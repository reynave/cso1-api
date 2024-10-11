<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KioskCart2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->priceLevel = 1;
        $this->terminalId = "";
        $this->storeOutlesId = "";
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        date_default_timezone_set('Asia/Jakarta');

        // if (!$this->model->checkDeviceObj()) {
        //     echo $this->model->error("Error auth");
        //     exit;
        // } else {
        //     $getDeviceObj = $this->model->getDeviceObj();
        //     $this->terminalId = $getDeviceObj['terminalId'];
        //     $this->storeOutlesId = $getDeviceObj['storeOutlesId'];
        // }
    }

    function index()
    {

        $uuid = str_replace(["'", '"', "-"], "", $this->input->get("uuid"));
        if ($uuid) {
            $this->benchmark->mark('code_start');
            $memberId = $this->model->select("memberId", "cso1_kioskUuid", "presence = 1 AND status = 1  AND kioskUuid = '" . $uuid . "'");
            $itemsList = $this->model->sql("SELECT 
                    c.id, c.kioskUuid, c.itemId, c.price, c.discount, c.barcode, c.originPrice, c.note,
                    i.description, i.shortDesc, i.images
                FROM cso1_kioskCart as c
                left join cso1_item as i on i.id = c.itemId
                WHERE c.presence =1 and c.kioskUuid = '$uuid' 
            ");
     
            $this->benchmark->mark('code_end');
            $data = array(
                "elapsed_time" => $this->benchmark->elapsed_time('code_start', 'code_end'), 
                "ilock" => (bool) $this->model->select("ilock", "cso1_kioskUuid", "presence = 1 AND status = 1  AND kioskUuid = '" . $uuid . "'"),
                "kioskUuid" => $this->model->sql("SELECT * FROM cso1_kioskUuid  where presence = 1 and kioskUuid = '" . $uuid . "'") ? $this->model->sql("SELECT * FROM cso1_kioskUuid  where presence = 1 and kioskUuid = '" . $uuid . "'")[0] : [],
                "member" => !$memberId ? array(
                    "firstName" => "Guest",
                    "lastName" => "",
                ) : $this->model->sql("SELECT * FROM cso1_member  where presence = 1 and id = '" . $memberId . "'")[0],
               
                "memberId" => $memberId,
                "itemsList" => $itemsList,
                "summary" => $this->model->summary($uuid),
               
            );
        }
        echo json_encode($data);
    }

    function fnUpdate()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $update = array(
                "price" => $post['items']['price'],
                "discount" => $post['items']['discount'],
                "isPriceEdit" => 1,
                "updateDate" => time(),
                "updateBy" => $post['userId']
            );

            $this->db->update("cso1_kioskCart", $update, "id = " . $post['items']['id']);
        }
        echo json_encode($update);
    }

    function checkPromo(){
        $itemId = $this->input->get("id");
        $price = $this->model->select("price1" , "cso1_item", "id='" . $itemId . "' ");
        $data = array(
            "itemId" => $itemId, 
            "getPromo2" => $this->promo->getPromo2($itemId, $price),
        );
        echo json_encode($data);
    }


    function scanner()
    {
        $data = [];
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $sqlQty = "select count(id) as 'totalQty' from cso1_kioskCart where  presence = 1 and  kioskUuid =  '" . $post['kioskUuid'] . "' ";
            $totalQty = $this->model->sql($sqlQty)[0]['totalQty'];

            $priceLevel = 1;
            $limit = (int) $this->model->storeOutlesLimit($post['kioskUuid']);


            // SCAN ITEM
            $weight = 1.0;
            $note = "";
            // CHECK BARCODE 
            $barcode = str_split($post['barcode']);
            $arrItem = $this->model->barcode($post['barcode']);
            if (count($barcode) >= 13 && $arrItem['prefix'] == 2) {
                $arrItem = $this->model->barcode($post['barcode']);

                // BARCODE DINAMIC  
                $itemId = $this->model->select("itemId", "cso1_itemBarcode", "barcode = '" . $arrItem['itemId'] . "' and presence = 1");
                $weight = (float) $arrItem['weight']; 
            } else {
                // BARCODE STATIC
                $itemId = $this->model->select("itemId", "cso1_itemBarcode", "barcode = '" . $post['barcode'] . "' and presence = 1");
            }


            if ($totalQty >= $limit) {
                $data = array(
                    "sql" => $sqlQty,
                    "totalQty" => $totalQty,
                    "limit" => $limit,
                    "error" => true,
                    "note" => "Maxsimum only $limit items",
                );
            } else if ($itemId) {
                $price = $this->model->select("price" . $priceLevel, "cso1_item", "id='" . $itemId . "' ");
                $kioskCartId = $this->model->number("kiosk");

                $finalPrice = $price * $weight;
                $coma = (float) $finalPrice - (int) $finalPrice;
                if ($coma > 0.5) {
                    $finalPrice = ceil($finalPrice);
                } else {
                    $finalPrice = (int) $finalPrice;
                }

                $insert = array(
                    "id" => $kioskCartId,
                    "transactionDate" => date("Y-m-d H:i:s"),
                    "kioskUuid" => $post['kioskUuid'],
                    "itemId" => $itemId,
                    "barcode" => $post['barcode'],
                    "price" => $finalPrice,
                    "originPrice" => $price,
                    "promotionId" => "",
                    "discount" => 0,
                    "void" => 0,
                    "presence" => 1,
                    "inputDate" => time(),
                    "updateDate" => time(),
                    "note" => $note,
                );
                $this->db->insert("cso1_kioskCart", $insert);
 
                 // ver 2.0.1
                $qty = (int) $this->model->select("count(id)", "cso1_kioskCart", " kioskUuid = '" . $post['kioskUuid'] . "' AND  itemId = '$itemId' ") + 1;
                $promo = $this->promo->getPromo2($itemId, $finalPrice, $qty);
                if ($promo['promotionItemId'] > 0) {
                    $update = [
                        "kioskUuid" => $post['kioskUuid'],
                        "price" => $promo['newPrice'] * $weight,
                        "isSpecialPrice" => isset($promo['isSpecialPrice']),
                        "promotionId" => isset($promo['promotionId']) ? $promo['promotionId'] : "",
                        "promotionItemId" => isset($promo['promotionItemId']) ? $promo['promotionItemId'] : "",
                        "discount" => $promo['discount'],
                        "note" => $note.$this->model->select("description", "cso1_promotion", " id = '" . $promo['promotionId'] . "'"),
                    ];
                    $this->db->update("cso1_kioskCart", $update, " id = $kioskCartId ");
                    $price = $promo['newPrice'];
                }


                // ver 1.2 base on POS2
                // $qty = (int) $this->model->select("count(id)", "cso1_kioskCart", " kioskUuid = '" . $post['kioskUuid'] . "' AND  itemId = '$itemId' ") + 1;
                // $promo = $this->promo->getPromo($itemId, $qty);
                // if ($promo['promotionItemId'] > 0) {
                //     $update = [
                //         "kioskUuid" => $post['kioskUuid'],
                //         "price" => $promo['newPrice'] * $weight,
                //         "isSpecialPrice" => isset($promo['isSpecialPrice']),
                //         "promotionId" => isset($promo['promotionId']) ? $promo['promotionId'] : "",
                //         "promotionItemId" => isset($promo['promotionItemId']) ? $promo['promotionItemId'] : "",
                //         "discount" => $promo['discount'],
                //         "note" => $note.$this->model->select("description", "cso1_promotion", " id = '" . $promo['promotionId'] . "'"),
                //     ];
                //     $this->db->update("cso1_kioskCart", $update, " id = $kioskCartId ");
                //     $price = $promo['newPrice'];
                // }




                $sql = "select *,   '$price'  as price from cso1_item where id= '" . $itemId . "' and presence = 1 and status = 1";

                $data = array(
                    "promo" => $promo,
                    "totalQty" => $totalQty,
                    "admin" => false,
                    "error" => false,
                    "note" => "Item add",
                    "items" => $this->model->sql($sql)[0],
                    "priceLevel" => $priceLevel,
                );
            } else {
                $data = array(
                    "totalQty" => $totalQty,
                    "error" => true,
                    "note" => "Item not found!",
                );
            }

        }

        if (!$this->model->select("kioskUuid", "cso1_kioskUuid", "kioskUuid =  '" . $post['kioskUuid'] . "' ")) {

            $data = array(
                "error" => true,
                "note" => "session expired",
                "relogin" => true,
            );
        }


        echo json_encode($data);
    }

    function fnVoid()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $update = array(
                "presence" => 0,
                "void" => 1,
                "updateDate" => time(),
                "updateBy" => $post['userId']

            );
            $this->db->update("cso1_kioskCart", $update, "id = " . $post['items']['id']);

            echo json_encode($update);
        }
    }

    function lock()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $update = array(
                "ilock" => 1,
            );
            $this->db->update("cso1_kioskUuid", $update, "  kioskUuid = '" . $post['kioskUuid'] . "' ");

            echo json_encode($update);
        }
    }

    function lockBcaQris()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $update = array(
                "ilock" => 1,
                "reffNo" => $post['reffNo'],
                "navigate" => $post['navigate'],
            );
            $this->db->update("cso1_kioskUuid", $update, "  kioskUuid = '" . $post['kioskUuid'] . "' ");

            echo json_encode($update);
        }
    }

    function fnVoidFreeItem()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $update = array(
                "presence" => 0,
                "void" => 1,
                "updateDate" => time(),
                "updateBy" => $post['userId']
            );
            $this->db->update("cso1_kioskCartFreeItem", $update, "id = " . $post['items']['id']);
            echo json_encode($update);
        }
    }


    function fnCloseCart()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        $result = [];
        $trans_status = null;

        if ($post) {
            $trans_status = true;
            $time = time();

            /**
             * CSO1_PROMOTIONITEM
             */
            $wherePromotion = "";
            $or = "";
            $q2 = $this->model->sql("SELECT id FROM cso1_promotion  WHERE startDate >= $time  AND endDate <= $time  
            AND presence =1 AND status = 1 AND typeOfPromotion = 1");
            foreach ($q2 as $d) {
                $wherePromotion .= $or . "  promotionId =  '" . $d['id'] . "' ";
                $or = " OR ";
            }

            if ($wherePromotion != "") {
                $wherePromotion = " AND ( " . $wherePromotion . " )";
            }

            $time = time();
            $q1 = "SELECT count(itemId) as qty, itemId, sum(isFreeItem) as 'freeItemQty'
            from cso1_kioskCart
            WHERE presence = 1 AND kioskUuid = '" . $post['uuid'] . "'
            GROUP BY itemId";
            $q = $this->model->sql($q1);
            foreach ($q as $row) {

                $promotionItemId = $this->model->select(
                    "id",
                    "cso1_promotionItem",
                    "presence = 1 AND status = 1 AND itemId = '" . $row['itemId'] . "' " . $wherePromotion
                );

                $last_quert = $this->db->last_query();
                $promoItem = [];
                if ($promotionItemId) {
                    $promoItem = $this->model->sql("SELECT * from cso1_promotionItem WHERE  status = 1 and id = $promotionItemId ")[0];

                    $promotionId = $this->model->select("promotionId", "cso1_promotionItem", "presence = 1 AND status = 1 AND itemId = '" . $row['itemId'] . "' " . $wherePromotion);


                    if ($row['qty'] >= $promoItem['qtyFrom']) {

                        $q2 = "SELECT TOP " . $promoItem['qtyTo'] . " * from cso1_kioskCart 
                        WHERE kioskUuid = '" . $post['uuid'] . "' AND itemId = '" . $row['itemId'] . "' AND  presence = 1 ORDER BY inputDate ASC";

                        foreach ($this->model->sql($q2) as $i) {
                            if ($promoItem['specialPrice'] > 0) {
                                // Special Price
                                $update = array(
                                    "discount" => 0,
                                    "isSpecialPrice" => 1,
                                    "promotionId" => $promotionId,
                                    "promotionItemId" => $promotionItemId,
                                    "price" => $promoItem['specialPrice'],
                                    "updateDate" => time(),
                                );
                            } else {
                                // Discount Level

                                $disc1 = $promoItem['disc1'] / 100;
                                $disc2 = $promoItem['disc2'] / 100;
                                $disc3 = $promoItem['disc3'] / 100;

                                $discLevel1 = $i['price'] * $disc1;
                                $discLevel2 = ($i['price'] - $discLevel1) * $disc2;
                                $discLevel3 = ($i['price'] - $discLevel1 - $discLevel2) * $disc3;

                                $discLevel = $discLevel1 + $discLevel2 + $discLevel3;

                                $update = array(
                                    "promotionId" => $promotionId,
                                    "promotionItemId" => $promotionItemId,
                                    "discount" => $promoItem['discountPrice'] + $discLevel,
                                    "updateDate" => time(),
                                );
                            }

                            $this->db->update("cso1_kioskCart", $update, "isPriceEdit = 0 and id = " . $i['id']);
                        }
                    }

                    array_push(
                        $result,
                        array(
                            "promotionItemId" => $promotionItemId,
                            "promoItem" => $promoItem,
                            "last_quert" => $last_quert,
                        )
                    );
                }
            }
        }

        $data = array(

            "q1" => $q1,
            "result" => $result,
        );

        echo json_encode($data);
    }

    function fnLogoutVisitor()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $terminalId = $this->terminalId;

            $deleteID = array(
                'terminalId' => $terminalId,
            );
            $this->db->delete('cso1_kioskUuid', $deleteID);
            $delete = array(
                'kioskUuid' => $post['kioskUuid'],
            );
            $this->db->delete('cso1_kioskUuid', $delete);
            $this->db->delete('cso1_kioskCart', $delete);
            $this->db->delete('cso1_kioskCartFreeItem', $delete);
        }
    }
}
