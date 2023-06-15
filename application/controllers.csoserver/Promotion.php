<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Promotion extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->openAPI = $this->db->openAPI;
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        // error_reporting(E_ALL);  
        if (!$this->model->header($this->openAPI)) {
           echo $this->model->error("Error auth");
              exit;
        }
    }

    // START :: ITEMS
    function index()
    {

        $update = array(
            "presence" => 0,
            "updateDate" => time(),
        );
        $this->db->update('cso1_promotionItem', $update, "itemId is NULL ");
        $this->db->update('cso1_promotionFree', $update, "itemId is NULL or freeItemId is NULL ");


        $data = array(
            "itemsPromotion" => $this->model->sql("SELECT p.*, so.description as 'storeOutlet' FROM cso1_promotion  as p 
            left join cso1_storeOutles as so on so.id = p.storeOutlesId
            where  p.presence = 1"),
            "storeOutles" => $this->model->sql("SELECT * From  cso1_storeOutles where  presence = 1"),

        );
        echo json_encode($data);
    }

    function items()
    {
        $search = $this->input->get('search');
        $data = array(
            "data" =>  strlen($search) >= 3  ? $this->model->sql("SELECT 
            i.barcode, i.price1 , i.description, i.id
            FROM cso1_item as i
            where  i.presence = 1 and (i.description like '%" . $search . "%' OR i.barcode = '" . $search . "')
            order by i.description ASC 
            ") : [],
        );
        echo json_encode($data);
    }

    function detail($id = "")
    {

        $data = array(
            "promotion" => $this->model->sql("select *, 
            FORMAT ( dateadd(S, startDate, '1970-01-01 00:00:00')  , 'yyyy-MM-dd')as startDate,
            FORMAT ( dateadd(S, endDate, '1970-01-01 00:00:00')  , 'yyyy-MM-dd') as endDate 
            from cso1_promotion where id = '" . $id . "' and presence = 1 ")[0],

            "promotionItem" => $this->model->sql("SELECT p.*,  i.barcode as 'barcode',  i.description as 'description' ,  i.price1
            From  cso1_promotionItem AS p
            left JOIN cso1_item AS i ON i.id = p.itemId
            WHERE p.promotionId = '$id' AND  p.presence = 1 
            order BY p.inputDate ASC"),

            "promotionFree" => $this->model->sql("SELECT p.*,
            i1.description as 'description' , i2.description as 'description2',
            i1.barcode as 'barcodeItem', i2.barcode as 'barcodeItemFree'
            From cso1_promotionFree p 
            left JOIN cso1_item AS i1 ON i1.id = p.itemId 
            left JOIN cso1_item AS i2 ON i2.id = p.freeItemId 
            
            where p.promotionId = '$id' AND p.presence = 1 
            order BY p.inputDate ASC"),
            "storeOutles" => $this->model->sql("SELECT * From  cso1_storeOutles where  presence = 1"),

        );
        echo json_encode($data);
    }

    function insert()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $insert = array(
                "id" => $this->model->number('promotion'),
                "storeOutlesId" => $post['item']['storeOutlesId'],
                "code" => $post['item']['code'],
                "description" => $post['item']['description'],
                "startDate" => strtotime($post['item']['startDate']),
                "endDate" => strtotime($post['item']['endDate']),
                "discountPercent" => 0, 
                "status" => 0,
                "presence" => 1,
                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->insert('cso1_promotion', $insert);
            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }

    function update()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $update = array(
                "status" => $post['status'],
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_promotion', $update, "id='" . $post['id'] . "' ");
        }
        echo   json_encode($post);
    }

    function delete()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $update = array(
                "presence" => 0,
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_promotion', $update, "id='" . $post['id'] . "' ");
            $this->db->update('cso1_promotionItem', $update, "promotionId='" . $post['id'] . "' ");
            $this->db->update('cso1_promotionFree', $update, "promotionId='" . $post['id'] . "' ");
        }
        echo   json_encode($post);
    }
    // END :: ITEMS

    // START :: ITEM DETAIL MODAL
    function fnModalUpdate()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "typeOfPromotion" => $post['item']['typeOfPromotion'],
                "storeOutlesId" => $post['item']['storeOutlesId'],
                "code" => $post['item']['code'],
                "description" => $post['item']['description'],
                "startDate" => strtotime('+1 day',strtotime($post['item']['startDate']) ),
                "endDate" => strtotime('+1 day', strtotime($post['item']['endDate']) ),
                "discountPercent" => $post['item']['discountPercent'], 
                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
            );
            $this->db->update('cso1_promotion', $update, "id='" . $post['item']['id'] . "' ");
            $data = array(
                "post" =>  $post, 
                "error" => $error,
            );
        }
        echo   json_encode($data);
    }
    // END  :: ITEM DETAIL MODAL

    // START :: PromotionItem
    function addPromotionItem()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $insert = array(
                "promotionId" => $post['id'],
                "qtyFrom" => 1,
                "qtyTo" => 99,
                "status" => 0, 
                "disc1" => 0,
                "disc2" => 0,
                "disc3" => 0,

                "presence" => 1,
                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
            );
            $this->db->insert('cso1_promotionItem', $insert);
            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }

    function fnUpdatePromotionItem()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true; 
           
            $update = array(
                "qtyFrom" => $post['qtyFrom'],
                "qtyTo" => $post['qtyTo'], 
                "disc1" => $post['disc1'],
                "disc2" => $post['disc2'],
                "disc3" => $post['disc3'],
                "specialPrice" => $post['specialPrice'],
                "discountPrice" => $post['discountPrice'],
                
                "status" => $post['status'], 
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_promotionItem', $update, "id='" . $post['id'] . "' ");
            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }

    function onSelectItem()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "itemId" => $post['item']['id'],
                "disc1" => "0",
                "disc2" => "0",
                "disc3" => "0", 
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_promotionItem', $update, "id='" . $post['detail']['id'] . "' ");
            $data = array(
                "items" => $post,
                "description" =>  $this->model->select("description", "cso1_item", "id='" . $post['item']['id'] . "' "),
                "price" => $this->model->select("price1", "cso1_item", "id='" . $post['item']['id'] . "' "),
            );
        }
        echo   json_encode($data);
    }

    function fnDeletePromotionItem()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "status" => 0,
                "presence" => 0,
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_promotionItem', $update, "id='" . $post['id'] . "' ");
            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }
    // END :: PromotionItem


    // START :: PromotionFREE
    function fnAddPromotionFree()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $insert = array(
                "promotionId" => $post['id'],
                "qty" => 1,
                "freeQty" => 1,
                "status" => 0,
                "presence" => 1,
                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
            );
            $this->db->insert('cso1_promotionFree', $insert);
            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }

    function fnUpdatePromotionFree()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "qty" => $post['qty'],
                "freeQty" => $post['freeQty'],
                "applyMultiply" => $post['applyMultiply'],
                "scanFree" => $post['scanFree'],
                "printOnBill" => $post['printOnBill'],
                "status" => $post['status'],
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_promotionFree', $update, "id='" . $post['id'] . "' ");
            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }

    function fnDeletePromotionFree()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "status" => 0,
                "presence" => 0,
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_promotionFree', $update, "id='" . $post['id'] . "' ");
            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }

    function onSelectFree()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "itemId" => $post['item']['id'],
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_promotionFree', $update, "id=" . $post['detail']['id']);
            $data = array(
                "items" => $post,
                "description" =>  $this->model->select("description", "cso1_item", "id='" . $post['item']['id'] . "' "),
                "price" => $this->model->select("price1", "cso1_item", "id='" . $post['item']['id'] . "' "),
            );
        }
        echo   json_encode($data);
    }

    function onSelectFree2()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "freeItemId" => $post['item']['id'],
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_promotionFree', $update, "id=" . $post['detail']['id']);
            $data = array(
                "items" => $post,
                "description" =>  $this->model->select("description", "cso1_item", "id='" . $post['item']['id'] . "' "),
                "price" => $this->model->select("price1", "cso1_item", "id='" . $post['item']['id'] . "' "),
            );
        }
        echo   json_encode($data);
    }

    function onSelectFreeFree()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "freeItemId" => $post['freeItemId'],
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_promotionFree', $update, "id='" . $post['id'] . "' ");
            $data = array(
                "items" => $post,
                "update" => $update,
            );
        }
        echo   json_encode($data);
    }
}
