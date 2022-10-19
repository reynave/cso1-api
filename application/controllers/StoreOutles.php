<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StoreOutles extends CI_Controller
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


    function index()
    { 
       $itemsHeader =   $this->model->sql("SELECT so.*, b.name  'storeBranchesName'  FROM cso1_storeOutles as so
       left join cso1_storeBranches as b on so.storeBranchesId = b.id
       WHERE   so.presence = 1 order by so.id ASC ");
      
       $items = [];
        foreach ($itemsHeader as $row) { 
            $cso1_paymentType = [];
            $paymentType = $this->model->sql("SELECT  * from  cso1_paymentType where status = 1 and presence = 1");
      
            foreach ($paymentType as $r) { 
       
                $storeOutlesPaymentTypeId = (int)$this->model->select("id","cso1_storeOutlesPaymentType","presence = 1 and  paymentTypeId = '".$r['id']."'  and  storeOutlesId = '". $row['id']."' ");
                $temp = array(
                    "id" => $r['id'],
                    "storeOutlesPaymentTypeId" => $storeOutlesPaymentTypeId,
                    "name" => $r['name'],
                    "paymentTypeId" => (int)$r['id'],   
                    "storeOutlesId" =>  (int)$row['id'],    
                    "status" => (int)$this->model->select("status","cso1_storeOutlesPaymentType","presence = 1 and id = '".$storeOutlesPaymentTypeId."' "),
                );
                array_push($cso1_paymentType,$temp); 
            }

            $temp =  array(
                "storeOutletTerminal" => $this->model->sql("SELECT * FROM cso1_terminal WHERE storeOutlesId = '".$row['id']."' and  status = 1 and presence = 1 order by id ASC "),    
                "storeOutlesPaymentType" => $cso1_paymentType,  
            
            ); 
            array_push( $items,array_merge($temp,$row));

        }


        $data = array(
            "items" =>  $items, 
            "selectPaymentType" => $this->model->sql("SELECT * FROM cso1_paymentType WHERE status = 1 and presence = 1 order by name ASC "), 
            "selectStoreBrands" =>  $this->model->sql("SELECT * FROM cso1_storeBrands WHERE status = 1 and presence = 1 order by name ASC "), 
            "selectStoreBranches" =>  $this->model->sql("SELECT * FROM cso1_storeBranches WHERE status = 1 and presence = 1 order by name ASC "), 
             
        ); 
        echo   json_encode($data);
    }
     
    function detail($id="")
    { 
       $itemsHeader =   $this->model->sql("SELECT so.*, b.name  'storeBranchesName' 
       FROM cso1_storeOutles as so
       left join cso1_storeBranches as b on so.storeBranchesId = b.id
       WHERE  so.id = '$id' and 
        so.presence = 1 order by so.id ASC ");
      
       $items = [];
        foreach ($itemsHeader as $row) { 
            $cso1_paymentType = [];
            $paymentType = $this->model->sql("SELECT  * from  cso1_paymentType where status = 1 and presence = 1");
      
            foreach ($paymentType as $r) { 
       
                $storeOutlesPaymentTypeId = $this->model->select("id","cso1_storeOutlesPaymentType","presence = 1 and paymentTypeId = '".$r['id']."'  and  storeOutlesId =  '". $row['id']."' ");
                $temp = array(
                    "id" => $r['id'],
                    "storeOutlesPaymentTypeId" => $storeOutlesPaymentTypeId,
                    "name" => $r['name'],
                    "paymentTypeId" => (int)$r['id'],   
                    "storeOutlesId" =>  (int)$row['id'],    
                    "status" => (int)$this->model->select("status","cso1_storeOutlesPaymentType","presence = 1 and id = '".$storeOutlesPaymentTypeId."' "),
                );
                array_push($cso1_paymentType,$temp); 
            }

            $temp =  array(
                "storeOutletTerminal" => $this->model->sql("SELECT * FROM cso1_terminal WHERE storeOutlesId = '".$row['id']."' and  status = 1 and presence = 1 order by id ASC "),    
                "storeOutlesPaymentType" => $cso1_paymentType,  
            
            ); 
            array_push( $items,array_merge($temp,$row));

        }


        $data = array(
            "items" =>  $items, 
            "selectPaymentType" => $this->model->sql("SELECT * FROM cso1_paymentType WHERE status = 1 and presence = 1 order by name ASC "), 
            "selectStoreBrands" =>  $this->model->sql("SELECT * FROM cso1_storeBrands WHERE status = 1 and presence = 1 order by name ASC "), 
            "selectStoreBranches" =>  $this->model->sql("SELECT * FROM cso1_storeBranches WHERE status = 1 and presence = 1 order by name ASC "), 
             
        ); 
        echo   json_encode($data);
    }
     
    function insert()
    { 
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true; 
            $id= $this->model->number('outlet');
            $insert = array( 
                "id"                =>  $id, 
                "name"              => $post['item']['name'], 
                "code"              => $post['item']['code'],  
                "storeBranchesId"   => $post['item']['storeBranchesId'],   
                "storeBrandsId"     => $post['item']['storeBrandsId'],   
                "description"       => isset($post['item']['description']) ? $post['item']['description'] : "",    
                "limit"             => $post['item']['limit'],    
                "priceLevel"             => $post['item']['priceLevel'],     
                "status" => 1, 
                "presence" => 1,
                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
                "updateDate" => time(),
                "updateBy" => $this->model->userId(), 
            );
            $this->db->insert('cso1_storeOutles', $insert);
           
            $data = array(
                "id" =>  $id,
                "items" =>  $insert,
            );
        }
        echo   json_encode($data);
    }

    function update()
    { 
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;

            foreach($post['item']['storeOutlesPaymentType'] as $r){
                $update = array(
                    "status" => $r['status'] == true ? 1 :0,   
                    "updateDate" => time(),
                    "updateBy" => $this->model->userId(), 
                );
                $this->db->update('cso1_storeOutlesPaymentType', $update,"id = '".$r['id']."' "); 
            }

            $update = array( 
                "name" => !$post['item']['name'] ? "Store Outlet ".time() : $post['item']['name'],   
                "description" => $post['item']['description'],    
                "status" => $post['item']['status'],   
                "storeBranchesId"   => $post['item']['storeBranchesId'],   
                "storeBrandsId"     => $post['item']['storeBrandsId'],   
                "priceLevel" => $post['item']['priceLevel'],    
                "limit" => $post['item']['limit'],     
                "npwp" => $post['item']['npwp'],     
                "code"              => $post['item']['code'],  
                "updateDate" => time(),
                "updateBy" => $this->model->userId(), 
            );
            $this->db->update('cso1_storeOutles', $update,"id = '".$post['item']['id']."' ");

            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }


    function fnUpdateStoreOutlesPaymentTypeStatus()
    { 
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        $insert = "";
        $update = "";
        if ($post) {
            $error = true;  
            $storeOutlesPaymentTypeId = $this->model->select("id","cso1_storeOutlesPaymentType","paymentTypeId='".$post['paymentType']['id']."'  and storeOutlesId = '".$post['item']['id']."' ");
            if($storeOutlesPaymentTypeId > 0 ){ 
                $update = array( 
                    "status" => (int)$post['paymentType']['status'],    
                    "updateDate" => time(),
                    "updateBy" => $this->model->userId(), 
                );
                $this->db->update('cso1_storeOutlesPaymentType', $update,"paymentTypeId= '".$post['paymentType']['id']."' and storeOutlesId = '".$post['item']['id']."' "); 
            }else{ 
                $insert = array( 
                    "id" => uniqid(),
                    "paymentTypeId" => $post['paymentType']['id'],  
                    "storeOutlesId" => $post['item']['id'],   
                    "status" => (int)$post['paymentType']['status'],    
                    "updateDate" => time(),
                    "updateBy" => $this->model->userId(), 
                );
                $this->db->insert('cso1_storeOutlesPaymentType', $insert);
            }
            $data = array(
                "items" =>  $post,
                "update" => $update,
                "insert" => $insert,
            );
        }
        echo   json_encode($data);
    }


    function delete()
    { 
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "presence" => 0,  
                "updateDate" => time(),
                "updateBy" => $this->model->userId(), 
            );
            $this->db->update('cso1_storeOutles', $update,"id = '".$post['id']."' " );

            $data = array(
                "items" =>  $update,
            );
        }
        echo   json_encode($data);
    }
}
