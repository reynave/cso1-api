<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Spv_terminal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->openAPI = $this->db->openAPI;
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        error_reporting(E_ALL);
        if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
        }
    }


    function index()
    {

        $data = array(
            "items" => $this->model->sql("SELECT t.id, t.name, t.storeOutlesId, t.status, so.description, k.kioskUuid, k.memberId, k.startDate
            FROM cso1_terminal as t 
            left join cso1_storeOutles as so on t.storeOutlesId = so.id
            left join cso1_kioskUuid as k on k.terminalId = t.id
            WHERE  t.presence = 1 and t.status = 1
            order by t.name ASC "),

            "storeOutles" => $this->model->sql("SELECT *  FROM cso1_storeOutles  WHERE  status = 1 and presence = 1 order by id ASC"),
            "turnOn" => $this->model->select("value", "cso1_account", "id=4"),
        );
        echo json_encode($data);
    }

    function fnSearchItem($name = '', $priceLevel = 1)
    {
        $q = str_replace(['"', "'"], "", $name);

        $data = array(
            "items" => $this->model->sql("SELECT * , price$priceLevel as 'price'
                from cso1_item where presence =1 and status = 1
                and description like '%$q%'
                order by description ASC
            "),
        );
        echo json_encode($data);
    }

    function detail($id = "")
    {

        $data = array(
            "items" => $this->model->sql("SELECT t.id, k.kioskUuid, k.terminalId, k.memberId, k.inputDate, a.*
                FROM cso1_kioskUuid as k
                join (
                    select kioskUuid, count(kioskUuid) as 'qty', sum(price) as 'price', sum(discount) as 'discount' 
                    from cso1_kioskCart 
                    group by kioskUuid
                ) as a on a.kioskUuid = k.kioskUuid
                join cso1_terminal as t on t.token = k.terminalId
                where t.id = '$id'
                order by inputDate DESC 
            "),
        );
        echo json_encode($data);
    }
    function transaction($kioskUuid = "")
    {
        $id = $this->model->sql("SELECT * from cso1_kioskUuid where kioskUuid = '" . $kioskUuid . "' ");
        if (count($this->model->sql("SELECT * from cso1_kioskUuid where kioskUuid = '" . $kioskUuid . "' "))) {



            $storeOutlesId = $this->model->select("storeOutlesId", "cso1_kioskUuid", "kioskUuid = '$kioskUuid'");

            $items = $this->model->sql("SELECT k.*, i.description,  i.id as 'itemId',  i.price1 as 'masterPrice', 1 as 'weight'
            from cso1_kioskCart as k
            join cso1_item as i on i.id = k.itemId
            where k.kioskUuid = '$kioskUuid' and  k.presence = 1
        ");

            $i = 0;
            foreach ($items as $row) {
                $barcode = $row['barcode'];
                //  $items[$i]['weight'] =  $items[$i]['barcode'];

                $arrItem = $this->model->barcode($barcode);
                if (isset($arrItem['prefix'])) {
                    if ($arrItem['prefix'] == 2) {
                        $arrItem = $this->model->barcode($barcode);

                        $items[$i]['weight'] = (float) $arrItem['weight'];
                    }
                }
                $i++;
            }


            $data = array(
                "items" => $items,

                "storeOutlesPaymentType" => $this->model->sql("SELECT s.id, s.paymentTypeId, p.*
                    from cso1_storeOutlesPaymentType as s
                    join cso1_paymentType as p on p.id = s.paymentTypeId
                    where s.storeOutlesId =  '$storeOutlesId' and s.presence = 1 and s.status = 1"),

                "freeItem" => $this->model->sql("SELECT k.*, i.description,  i.id as 'itemId'
                from cso1_kioskCartFreeItem as k
                join cso1_item as i on i.id = k.freeItemId
                where k.kioskUuid = '$kioskUuid' and k.presence = 1
            "),
                "kioskCart" => $this->model->sql("SELECT * from cso1_kioskUuid where kioskUuid = '" . $kioskUuid . "' ")[0],
                "summary" => $this->model->summary($kioskUuid),
                "priceLevel" => $this->model->priceLevel($kioskUuid),
            );
        }
        else{
             $data = array(
                "items" => [],
                "error" => true,
                "msg" => "BILL ID NOT AVAIBLE OR DELETED"
            );
        }
        echo json_encode($data);
    }
    function transactionDetail()
    {

        $kioskUuid = $this->input->get("kioskUuid");
        $barcode = $this->input->get("barcode");

        $q = "SELECT k.*, i.description,  i.id as 'itemId'
                from cso1_kioskCart as k
                join cso1_item as i on i.id = k.itemId
                where k.kioskUuid = '$kioskUuid' and  k.presence = 1 and k.barcode = '$barcode'
            ";
        $data = array(
            "items" => $this->model->sql($q),
            "q" => $q,
        );
        echo json_encode($data);
    }



    function recheck($kioskUuid = "")
    {
        $storeOutlesId = $this->model->select("storeOutlesId", "cso1_kioskUuid", "kioskUuid = '$kioskUuid'");
        $data = array(
            "ilock" => $this->model->select("ilock", "cso1_kioskUuid", " kioskUuid = '" . $kioskUuid . "' "),
        );
        echo json_encode($data);
    }

    function addItems()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $price = $this->model->select("price" . $post['priceLevel'], "cso1_item", "id='" . $post['item']['id'] . "' ");

            $id = $this->model->number("kiosk");
            $insert = array(
                "id" => $id,
                "kioskUuid" => $post['kioskUuid'],
                "itemId" => $post['item']['id'],
                "price" => $price,
                "originPrice" => $price,
                "transactionDate" => date("Y-m-d H:i:s"),
                "discount" => 0,
                "isPriceEdit" => 1,
                "void" => 0,
                "presence" => 1,
                "inputDate" => time(),
                "updateDate" => time(),
            );
            $insert = array(
                "id" => $id,
                "note" => 'DISABLE',
            );
            //  $this->db->insert("cso1_kioskCart", $insert);
        }
        echo json_encode($insert);
    }

    function duplicateItem()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            for ($i = 0; $i < $post['qty']; $i++) {
                $id = $this->model->number("kiosk");

                $filename = $post['item']['kioskUuid'] . '.txt';
                $error = true;
                $price = $post['item']['price'];
                $discount = $post['item']['discount'];
                $finalPrice = $price - $discount;
                $barcode = $post['item']['barcode'];
                $itemId = $post['item']['itemId'];

                $insert = array(
                    "id" => $id,
                    "kioskUuid" => $post['item']['kioskUuid'],
                    "itemId" => $post['item']['itemId'],
                    "price" => $post['item']['price'],
                    "barcode" => $post['item']['barcode'],
                    "originPrice" => $post['item']['originPrice'],
                    "discount" => $post['item']['discount'],
                    "transactionDate" => date("Y-m-d H:i:s"),
                    "void" => 0,
                    "isPriceEdit" => 1,
                    "presence" => 1,
                    "inputDate" => time(),
                    "updateDate" => time(),
                );

                $this->db->insert("cso1_kioskCart", $insert);
            }
            $this->kiosk->writeLog("SUPERVISOR DUPLICATE QTY " . $post['qty'] . " $id $barcode $itemId : $price - $discount = $finalPrice", $filename);

        }
        echo json_encode($insert);
    }
    function fnUpdate()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $filename = $post['kioskUuid'] . '.txt';
            $error = true;
            $price = $post['item']['price'];

            $barcode = $post['item']['barcode'];

            $weight = 1;
            $arrItem = $this->model->barcode($barcode);
            if (isset($arrItem['prefix'])) {
                if ($arrItem['prefix'] == 2) {
                    $arrItem = $this->model->barcode($barcode);
                    $weight = (float) $arrItem['weight'];
                }
            }


            $itemId = $post['item']['itemId'];
            $this->kiosk->writeLog("SUPERVISOR UPDATE fnUpdate()  $barcode $itemId :  $price", $filename);

            if ($post['item']['originPrice'] > 0 && ($post['item']['originPrice'] * $weight) > 0) {


                $update = array(
                    "originPrice" => $post['item']['originPrice'],
                    "price" => ceil($post['item']['originPrice'] * $weight),
                    // "discount" => $post['item']['discount'],
                    "isPriceEdit" => 1,
                    "updateDate" => time(),
                );
                $this->db->update('cso1_kioskCart', $update, "barcode='" . $post['item']['barcode'] . "' ");
            } else {
                $this->kiosk->writeLog("SUPERVISOR UPDATE fnUpdate() ERROR MINUS $barcode $itemId :  $price", $filename);

            }
        }
        echo json_encode($update);
    }

    function removeFreeItem()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;

            $filename = $post['item']['kioskUuid'] . '.txt';
            $price = $post['item']['price'];
            $discount = $post['item']['discount'];
            $finalPrice = $price - $discount;
            $barcode = $post['item']['barcode'];
            $itemId = $post['item']['itemId'];
            $id = $post['item']['id'];
            $this->kiosk->writeLog("SUPERVISOR VOID $id $barcode $itemId", $filename);

            $update = array(
                "presence" => 0,
                "updateDate" => time(),
            );
            $this->db->update('cso1_kioskCartFreeItem', $update, "id='" . $post['item']['id'] . "' ");
        }
        echo json_encode($update);
    }

    function removeItem()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;

            $filename = $post['item']['kioskUuid'] . '.txt';
            $barcode = $post['item']['barcode'];
            $itemId = $post['item']['itemId'];
            $id = $post['item']['id'];
            $this->kiosk->writeLog("SUPERVISOR VOID $id $barcode $itemId", $filename);

            $update = array(
                "void" => 1,
                "presence" => 0,
                "updateDate" => time(),
            );
            $this->db->update('cso1_kioskCart', $update, "id='" . $post['item']['id'] . "' ");

            $kioskUuid = $post['kioskUuid'];


            if ($this->model->select("count(id)", "cso1_kioskCart", "price  = 0 and presence = 1 and kioskUuid='" . $kioskUuid . "' ") == 0) {
                $update = array(
                    "ilock" => 0,
                );
                $this->db->update('cso1_kioskUuid', $update, "kioskUuid='" . $kioskUuid . "' ");

            }





            $q = "SELECT k.*, i.description,  i.id as 'itemId'
                    from cso1_kioskCart as k
                    join cso1_item as i on i.id = k.itemId
                    where k.kioskUuid = '$kioskUuid' and  k.presence = 1 and k.barcode = '$barcode'
                ";
            $data = array(
                "items" => $this->model->sql($q),
                "q" => $q,
            );
        }
        echo json_encode($data);
    }

    function fnStatusTerminal()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $this->db->query("TRUNCATE TABLE cso1_kioskUuid");
            $this->db->query("TRUNCATE TABLE cso1_kioskCartFreeItem");
            $this->db->query("TRUNCATE TABLE cso1_kioskCart");

            $update = array(
                "value" => $post['status'],
                "updateDate" => time(),
            );
            $this->db->update("cso1_account", $update, "id=4");

            $data = array(
                "turnOn" => $this->model->select("value", "cso1_account", "id=4"),
            );
        }
        echo json_encode($data);
    }


    function fnProcessPayment()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $this->db->trans_start();
            $id = $this->model->number("transaction");

            $kioskUuid = $post['kioskUuid'];
            $summary = $this->model->summary($kioskUuid);

            $storeOutlesId = $this->model->select("storeOutlesId", "cso1_kioskUuid", "kioskUuid='" . $post['kioskUuid'] . "'");
            $terminalId = $this->model->select("terminalId", "cso1_kioskUuid", "kioskUuid='" . $post['kioskUuid'] . "'");

            $insert = array(
                "id" => $id,
                "transactionDate" => time(),
                "kioskUuid" => $kioskUuid,
                "memberId" => $this->model->select("memberId", "cso1_kioskUuid", "kioskUuid = '" . $kioskUuid . "'"),
                "paymentTypeId" => $post['paymentTypeId'],

                "startDate" => $this->model->select("startDate", "cso1_kioskUuid", "kioskUuid = '" . $kioskUuid . "'"),
                "endDate" => date("Y-m-d H:i:s"),
                "storeOutlesId" => $storeOutlesId,
                "terminalId" => $terminalId,
                "struk" => $id,
                "cashierId" => "Close by Supervisor",
                "pthType" => 1,

                "total" => (int) $summary['total'],
                "discount" => (int) $summary['discount'],
                "discountMember" => (int) $summary['memberDiscount'],
                "voucher" => (int) $summary['voucer'],
                "bkp" => (int) $summary['bkp'],
                "dpp" => (int) $summary['dpp'],
                "ppn" => (int) $summary['ppn'],
                "nonBkp" => (int) $summary['nonBkp'],
                "finalPrice" => (int) $summary['final'],
                "userId" => $this->model->userId(),
                "locked" => 1,
                "presence" => 1,
                "inputDate" => time(),
                "updateDate" => time(), 
            );
            $this->db->insert('cso1_transaction', $insert);

            if ($this->model->select("kioskUuid", "cso1_paymentQrisTelkom", "kioskUuid = '" . $kioskUuid . "'")) {
                $update = array(
                    "qris_status" => "Close by Admin",
                    "transactionId" => $id,
                    "updateDate" => time(),
                );
                $this->db->update('cso1_paymentQrisTelkom', $update, "kioskUuid = '" . $kioskUuid . "'");
            }


            $q = $this->model->sql("select * from cso1_kioskCart where kioskUuid = '$kioskUuid' ");
            foreach ($q as $row) {
                $insertDetail = array(
                    "transactionId" => $id,
                    "promotionId" => $row['promotionId'],
                    "promotionItemId" => $row['promotionItemId'],
                    "barcode" => $row['barcode'],
                    "itemId" => $row['itemId'],
                    "originPrice" => $row['originPrice'],
                    "price" => $row['price'],
                    "discount" => $row['discount'],
                    "isPriceEdit" => $row['isPriceEdit'],
                    "isFreeItem" => $row['isFreeItem'],
                    "isSpecialPrice" => $row['isSpecialPrice'],
                    "isPrintOnBill" => $row['isPrintOnBill'],
                    "note" => $row['note'],
                    "void" => $row['void'],
                    "presence" => 1,
                    "inputDate" => time(),
                    "updateDate" => time(),
                    "updateBy" => $row['updateBy'],
                    "transactionDate" => $row['transactionDate'],
                    "qty" => $row['qty'],
                );
                $this->db->insert('cso1_transactionDetail', $insertDetail);
            }

            $q = $this->model->sql("SELECT * FROM cso1_kioskCartFreeItem
             WHERE presence = 1 AND status = 0 AND kioskUuid = '$kioskUuid' ");
            foreach ($q as $row) {

                $insertDetail = array(
                    "transactionId" => $id,
                    "barcode" => $row['barcode'],
                    "itemId" => $row['freeItemId'],
                    "promotionId" => $row['promotionId'],
                    "promotionFreeId" => $row['promotionFreeId'],
                    "originPrice" => 0,
                    "price" => 0,
                    "discount" => 0,
                    "isPriceEdit" => 0,
                    "isFreeItem" => 1,
                    "isSpecialPrice" => 0,
                    "isPrintOnBill" => $row['printOnBill'],
                    "void" => 0,
                    "presence" => $row['scanFree'] == true ? 1 : 2,
                    "inputDate" => time(),
                    "updateDate" => time(),
                    "updateBy" => $row['updateBy'],
                );
                $this->db->insert('cso1_transactionDetail', $insertDetail);
            }


            $this->db->trans_complete();
            $trans_status = true;
            if ($this->db->trans_status() === FALSE) {
                $trans_status = false;
            } else {

                // REMOVE CART
                $delete = array(
                    'kioskUuid' => $kioskUuid
                );
                $this->db->delete('cso1_kioskUuid', $delete);
                $this->db->delete('cso1_kioskCart', $delete);
                $this->db->delete('cso1_kioskCartFreeItem', $delete);
            }


            $data = array(
                "error" => false,
                "id" => $id,
                "insert" => $insert,
                "post" => $post,
                "trans_status" => $trans_status,
            );
        } else {
            $data = array(
                "error" => true,
            );
        }
        echo json_encode($data);
    }

    function fnRemove()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $kioskUuid = $post['kioskUuid'];
            $this->db->delete("cso1_kioskUuid", "kioskUuid = '$kioskUuid' ");
            $this->db->delete("cso1_kioskCart", "kioskUuid = '$kioskUuid' ");
            $this->db->delete("cso1_kioskCartFreeItem", "kioskUuid = '$kioskUuid' ");
            $data = array(
                "error" => false,
            );

        } else {
            $data = array(
                "error" => true,
            );
        }

        echo json_encode($data);
    }
}
