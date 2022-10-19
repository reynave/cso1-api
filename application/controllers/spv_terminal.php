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
            WHERE  t.presence = 1 
            order by t.name ASC "),

            "storeOutles" =>  $this->model->sql("SELECT *  FROM cso1_storeOutles  WHERE  status = 1 and presence = 1 order by id ASC"),
            "turnOn" => $this->model->select("value", "cso1_account", "id=4"),
        );
        echo   json_encode($data);
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
        echo   json_encode($data);
    }
    function transaction($kiosUuid = "")
    {
        $data = array(
            "items" => $this->model->sql("SELECT k.*, i.description, i.barcode, i.id as 'itemId'
                from cso1_kioskCart as k
                join cso1_item as i on i.id = k.itemId
                where k.kioskUuid = '$kiosUuid' and  k.presence = 1
            "),

            "freeItem" => $this->model->sql("SELECT k.*, i.description, i.barcode, i.id as 'itemId'
                from cso1_kioskCartFreeItem as k
                join cso1_item as i on i.id = k.freeItemId
                where k.kioskUuid = '$kiosUuid' and k.presence = 1
            "),
            "summary" =>  $this->model->summary($kiosUuid),
            "priceLevel" => $this->model->priceLevel($kiosUuid),
        );
        echo   json_encode($data);
    }

    function addItems()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $price  = $this->model->select("price" .  $post['priceLevel'], "cso1_item", "id='" . $post['item']['id'] . "' ");

            $id =  $this->model->number("kiosk");
            $insert = array(
                "id" => $id,
                "kioskUuid" => $post['kioskUuid'],
                "itemId" => $post['item']['id'],
                "price" => $price,
                "originPrice" => $price,
                "discount" => 0,
                "isPriceEdit" => 1,
                "void" => 0,
                "presence" => 1,
                "inputDate" => time(),
                "updateDate" => time(),
            );
            $this->db->insert("cso1_kioskCart", $insert);
        }
        echo   json_encode($insert);
    }

    function duplicateItem()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $id =  $this->model->number("kiosk");
            $insert = array(
                "id" => $id,
                "kioskUuid" => $post['item']['kioskUuid'],
                "itemId" => $post['item']['itemId'],
                "price" => $post['item']['price'],
                "originPrice" => $post['item']['originPrice'],
                "discount" => $post['item']['discount'],
                "void" => 0,
                "isPriceEdit" => 1,
                "presence" => 1,
                "inputDate" => time(),
                "updateDate" => time(),
            );
            $this->db->insert("cso1_kioskCart", $insert);
        }
        echo   json_encode($insert);
    }
    function fnUpdate()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "price"         => $post['item']['price'],
                "discount"      => $post['item']['discount'],
                "isPriceEdit" => 1,
                "updateDate"    => time(),
            );
            $this->db->update('cso1_kioskCart', $update, "id='" . $post['item']['id'] . "' ");
        }
        echo   json_encode($update);
    }

    function removeFreeItem()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "presence" => 0,
                "updateDate" => time(),
            );
            $this->db->update('cso1_kioskCartFreeItem', $update, "id='" . $post['item']['id'] . "' ");
        }
        echo   json_encode($update);
    }

    function removeItem()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "void" => 1,
                "presence" => 0,
                "updateDate" => time(),
            );
            $this->db->update('cso1_kioskCart', $update, "id='" . $post['item']['id'] . "' ");
        }
        echo   json_encode($update);
    }

    function fnStatusTerminal()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $this->db->query("TRUNCATE TABLE cso1_kioskUuid");
            $this->db->query("TRUNCATE TABLE cso1_kioskCartFreeItem");
            $this->db->query("TRUNCATE TABLE cso1_kioskCart");

            $update = array(
                "value" =>   $post['status'],
                "updateDate" => time(),
            );
            $this->db->update("cso1_account", $update, "id=4");

            $data = array(
                "turnOn" => $this->model->select("value", "cso1_account", "id=4"),
            );
        }
        echo   json_encode($data);
    }
}
