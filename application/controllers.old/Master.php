<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Master extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->openAPI = $this->db->openAPI;
        $this->module = "masterData";
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        // error_reporting(E_ALL);  
        if (!$this->model->header($this->openAPI)) {
            //  echo $this->model->error("Error auth");
            //  exit;
        }
    }


    function index()
    {
        if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
        }
        $data = array(
            "total" => $this->model->sql("SELECT count(id)  total FROM cso1_item where presence = 1 ")[0]['total'],
            "selectUom" => $this->model->sql("SELECT * FROM cso1_itemUom where  presence = 1"),
            "selectType" => $this->model->sql("SELECT * FROM cso1_itemType where   presence = 1"),
            "selectDepartements" => $this->model->sql("SELECT * FROM cso1_itemDepartement where  presence = 1"),
            "selectCategory" => $this->model->sql("SELECT * from cso1_itemCategory 
            where status = 1 And id not in (
                select id_parent
                from cso1_itemCategory
                where id_parent IS NOT NULL
            )
            order by name asc"),
            "selectTax" => $this->model->sql("SELECT * FROM cso1_taxCode where   presence = 1"),
        );
        echo json_encode($data);
    }

    function barcodeTest()
    {
        if($this->input->get("type") == "json"){
            echo json_encode( $this->model->barcode($this->input->get('barcode'))); 
        }else{
            print_r($this->model->barcode($this->input->get('barcode')));
        }
       

    }

    function datatables()
    {
        $search = $this->input->get('search');
        $data = array(
            "data" =>  strlen($search) >= 3  ? $this->model->sql("SELECT 
            i.id, i.price1 , i.description, i.shortDesc, i.status, i.barcode, i.ppnFlag, 
            c.name  'category'
            FROM cso1_item as i
            left join cso1_itemCategory as c on c.id = i.itemCategoryId
            where  i.presence = 1 and (i.description like '%" . $search . "%' OR i.barcode = '" . $search . "')
            order by i.description ASC 
            ") : [],
        );
        echo json_encode($data);
    }

    function queryItem()
    {
        $p =  $this->input->get('p');
        $next = $p < 0 ? 100 :  $p * 100;
        $data = array(
            "items" => $this->model->sql("SELECT  
            i.id, i.price1 , i.description, i.shortDesc, i.status, i.barcode, i.ppnFlag, 
            c.name  'category'
            FROM cso1_item as i
            left join cso1_itemCategory as c on c.id = i.itemCategoryId
            where  i.presence = 1 
            order by i.description ASC
            OFFSET " . $next . " ROWS
            FETCH NEXT 100 ROWS ONLY
            "),
            "pages" => $p,
            "total" =>   ceil($this->model->sql("select COUNT(id) as 'total' from cso1_item where presence = 1")[0]['total'] / 100),
        );
        echo json_encode($data);
    }

    function searchQueryItem()
    {

        $search = str_replace(['"', "#"], ['', ''], $this->input->get('search'));
        $data = array(
            "items" => $this->model->sql("SELECT  
            i.id, i.price1 , i.description, i.shortDesc, i.status, i.barcode, i.ppnFlag, 
            c.name  'category'
            FROM cso1_item as i
            left join cso1_itemCategory as c on c.id = i.itemCategoryId
            where  i.presence = 1 and i.description like '%$search%' or i.barcode = '" . $search . "'
            order by i.description ASC
            "),
        );
        echo json_encode($data);
    }


    function detail($id = "")
    {
        $category = [];
        $totalChild  = 0;
        foreach ($this->model->sql("SELECT * from cso1_itemCategory where presence = 1 and status = 1") as $row) {
            $totalChild = $this->model->sql("select count(id) as 'child' from  cso1_itemCategory where id_parent =  " . $row['id'])[0]['child'];
            if ($totalChild == 0) {
                $temp = array(
                    "id" => $row['id'],
                    "name" => $row['name'],
                    "count" => $totalChild,
                );
                array_push($category, $temp);
            }
        }

        $data = array(
            "items" => $this->model->sql("SELECT * FROM cso1_item  where  presence = 1 and id='" . $id . "' ")[0],
            "selectUom" => $this->model->sql("SELECT * FROM cso1_itemUom where  presence = 1"),
            "selectType" => $this->model->sql("SELECT * FROM cso1_itemType where   presence = 1"),
            "selectDepartements" => $this->model->sql("SELECT * FROM cso1_itemDepartement where  presence = 1"),
            "selectCategory" => $category,
            "selectTax" => $this->model->sql("SELECT * FROM cso1_taxCode where   presence = 1"),
            "barcode" => $this->model->sql("SELECT * FROM cso1_itemBarcode  where  presence = 1 and itemId = '$id' "),

        );
        echo json_encode($data);
    }

    function insertBarcode()
    {
        if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
        }
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $insert = array(
                "itemId"    =>  $post['itemId'],
                "barcode" => $post['newBarcode'],
                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
            );
            $this->db->insert('cso1_itemBarcode', $insert);

            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }
    function delBarcode()
    {
        if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
        }
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;

            $this->db->delete('cso1_itemBarcode', "id = " . $post['id']);

            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }

    function itemMaster_insert()
    {
        if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
        }
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $insert = array(
                "id" =>  $this->model->number('item'),
                "status" => $post['status'],
                "description" => $post['description'],
                "shortDesc" =>  $post['shortDesc'],
                "barcode" =>  $post['barcode'],
                "price1" =>  $post['price1'],
                "price2" =>  $post['price2'],
                "price3" =>  $post['price3'],
                "price4" =>  $post['price4'],
                "price5" =>  $post['price5'],
                "price6" =>  $post['price6'],
                "price7" =>  $post['price7'],
                "price8" =>  $post['price8'],
                "price9" =>  $post['price9'],
                "price10" =>  $post['price10'],

                "itemUomId" =>  $post['itemUomId'],
                "itemCategoryId" =>  $post['itemCategoryId'],
                "itemTaxId" =>  $post['itemTaxId'],

                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
            );
            $this->db->insert('cso1_item', $insert);

            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }

    function itemsMaster_delete()
    {
        if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
        }
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "presence" => 0,
                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
            );
            $this->db->update('cso1_item', $update, "id='" . $post['id'] . "' ");
        }
        echo   json_encode($post);
    }

    function itemsMaster_update()
    {
        if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
        }
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "status" => $post['item']['status'],
                "description" => $post['item']['description'],
                "shortDesc" =>  $post['item']['shortDesc'],
                "barcode" =>  $post['item']['barcode'],
                "price1" =>  $post['item']['price1'],
                "price2" =>  $post['item']['price2'],
                "price3" =>  $post['item']['price3'],
                "price4" =>  $post['item']['price4'],
                "price5" =>  $post['item']['price5'],

                "price6" =>  $post['item']['price6'],
                "price7" =>  $post['item']['price7'],
                "price8" =>  $post['item']['price8'],
                "price9" =>  $post['item']['price9'],
                "price10" =>  $post['item']['price10'],
                "itemUomId" =>  $post['item']['itemUomId'],
                "itemCategoryId" =>  $post['item']['itemCategoryId'],
                "itemTaxId" =>  $post['item']['itemTaxId'],
                "images" =>  $post['item']['images'],


                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_item', $update, "id='" . $post['item']['id'] . "' ");

            foreach ($post['barcode'] as $row) {
                $update = array(
                    "barcode" => $row['barcode'],
                    "updateDate" => time(),
                    "updateBy" => $this->model->userId(),
                );
                $this->db->update('cso1_itemBarcode', $update, "id='" . $row['id'] . "' ");
            }
        }
        echo   json_encode($update);
    }
}
