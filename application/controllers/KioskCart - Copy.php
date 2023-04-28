<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KioskCart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->keygen = "t3XsTuq9aCvNxCkNXPEyvvGejhKBHumxVbv6fJ6aGeCPg83hzVGBYDFd6H8u";
        $this->priceLevel = 1;
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        date_default_timezone_set('Asia/Jakarta');

        // if (!$this->model->header($this->openAPI)) {
        //     echo $this->model->error("Error auth");
        //     exit;
        // }
    }

    function index()
    {
        $uuid = str_replace(["'", '"', "-"], "", $this->input->get("uuid"));
        if ($uuid) {
            $priceLevel = $this->priceLevel;
            $memberId =  $this->model->select("memberId", "cso1_kioskUuid", "presence = 1 AND status = 1  AND kioskUuid = '" . $uuid . "'");
            $data = array(
                "kioskUuid" =>  $this->model->sql("SELECT * FROM cso1_kioskUuid
                    where presence = 1 and kioskUuid = '" . $uuid . "'")[0],

                "member" =>  !$memberId ? [] : $this->model->sql("SELECT * FROM cso1_member
                    where presence = 1 and id = '" . $memberId . "'")[0],

                "items" =>  $this->model->sql("SELECT c.id, c.itemId, c.itemQty, i.description, c.finalPrice, c.discAmount, c.isPriceEdit,
                    i.shortDesc, i.id as itemId, i.barcode,   c.price, c.discAmount , c.finalDiscount
                    from cso1_kioskCart as c 
                    join cso1_item as i on c.itemId = i.id
                    where c.presence = 1 and c.kioskUuid = '" . $uuid . "'
                    order by c.inputDate asc"),

                "freeItem" => $this->model->sql("SELECT * from cso1_kioskCartFreeItem 
                    WHERE presence = 1 and  kioskUuid = '" . $uuid . "' order by inputDate ASC "),

                "summary" =>  $this->model->summary($uuid),
            );
        }
        echo json_encode($data);
    }
    function fnUpdate()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) { 
            $itemQty = $this->model->select("itemQty","cso1_kioskCart","id=". $post['items']['id']);
            $update = array(
                "price" => $post['items']['price'], 
                "finalDiscount" => $post['items']['finalDiscount'],
                "finalPrice" => ($post['items']['price'] *  $itemQty) -$post['items']['finalDiscount'],
                
                "isPriceEdit" => 1,
                "updateDate" => time(),
            );
          
          $this->db->update("cso1_kioskCart", $update, "id = " . $post['items']['id']);
        }
        echo json_encode($update);
    }

    function scanner()
    {

        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $priceLevel = $this->priceLevel;
            $userId = $this->model->select("id", "cso1_user", "id='" . $post['itemId'] . "' and presence = 1 
            and status = 1");
            // SCAN SUPERVISOR
            if ($userId) {
                $data = array(
                    "admin" => true,
                    "error" => false,
                    "note" => "Supervisor mode!",
                    "userId" => $userId,
                );

                // SCAN ITEM
            } else {
                $itemId = $this->model->select("id", "cso1_item", "id='" . $post['itemId'] . "' and presence = 1");
                $promoId = 0;

                if ($itemId) {
                    $time = time();
                   
  
                    $id = $this->model->select("id", "cso1_kioskCart", "kioskUuid = '" . $post['kioskUuid'] . "' and itemId = '" . $post['itemId'] . "' and presence = 1 ");
                    $price  = $this->model->select("price" . $priceLevel, "cso1_item", "id='" . $post['itemId'] . "' ");
                    if ($id) {
                        $itemQty = $this->model->select("itemQty", "cso1_kioskCart", "id=" . $id) + 1;
                        $update = array(
                            "itemQty" => $itemQty ,
                            "finalPrice" => $price *($itemQty+1), 
                            "updateDate" => time(),
                        );
                        $this->db->update("cso1_kioskCart", $update, "id = " . $id);
                    } else {
                        $id = time();
                        $insert = array(
                            "id" => $id,
                            "kioskUuid" => $post['kioskUuid'],
                            "itemQty" => 1,
                            "itemId" => $post['itemId'],  
                            "finalDiscount" => 0,
                            "price" => $price,
                            "originPrice" => $price,
                            "finalPrice" => $price, 
                            "void" => 0,
                            "presence" => 1,
                            "inputDate" => time(),
                            "updateDate" => time(),

                        );
                        $this->db->insert("cso1_kioskCart", $insert);
                    }
 
                    $data = array(
                        "promotion" => $this->model->promotion($id, $post['itemId'],$post['kioskUuid']),
                        "admin" => false,
                        "error" => false,
                        "note" => "Item add",
                        "items" => $this->model->sql("select *, price$priceLevel as price from cso1_item where id= '" . $post['itemId'] . "'")[0],
                        "priceLevel" => $priceLevel,
                    );
                } else {
                    $data = array(

                        "error" => true,
                        "note" => "Item not found!",
                    );
                }
            }
        }
        echo   json_encode($data);
    }

    function fnAddQty()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post && $this->model->select("id", "cso1_user", "presence = 1 and status = 1 and id='" . $post['userId'] . "' ")) {
            if (($post['qty'] == 0) || ($this->model->select("itemQty", "cso1_kioskCart", " id = " . $post['items']['id']) +  $post['qty']) < 1) {
                $update = array(
                    "presence" => 0,
                    "void" => 1,
                    "updateDate" => time(),
                    "updateBy" => $post['userId'],
                );
                $this->db->update("cso1_kioskCart", $update, "id = " . $post['items']['id']);

                $update2 = array(
                    "presence" => 0, 
                    "updateDate" => time(),
                );
                $this->db->update("cso1_kioskCartFreeItem", $update2, "kioskCartId = " . $post['items']['id']);

                
            } else {
                $update = array(
                    "itemQty" =>  $this->model->select("itemQty", "cso1_kioskCart", " id = " . $post['items']['id']) +  $post['qty'],
                    "updateDate" => time(),
                    "updateBy" => $post['userId'],
                );
                $this->db->update("cso1_kioskCart", $update, "id = " . $post['items']['id']);
               
            }
 
            $promotion =  $this->model->promotion($post['items']['id'], $post['items']['itemId'],$post['uuid']);
        }
        $data = array(
           
            "update" => $update,
            "post" => $post,
            "q" => $this->db->last_query(),
        );
        echo   json_encode($data);
    }
}
