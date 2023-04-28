<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StoreBranches extends CI_Controller
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
        $data = array(
            "items" =>  $this->model->sql("SELECT * FROM cso1_storeBranches WHERE presence = 1 order by id ASC "), 
            "selectStoreBrands" =>  $this->model->sql("SELECT * FROM cso1_storeBrands WHERE status = 1 and presence = 1 order by id ASC "), 
            
        ); 
        echo   json_encode($data);
    }
     
    function insert()
    { 
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $insert = array(
                "id" => $this->model->number('branched'),
                "name" => "Branch",
                "status" => 1, 
                "presence" => 1,
                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
                "updateDate" => time(),
                "updateBy" => $this->model->userId(), 
            );
            $this->db->insert('cso1_storeBranches', $insert);

            $data = array(
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
            $update = array(
                "name" => !$post['name'] ? "Branch":$post['name'],
                "status" => $post['status'],   
                "storeBrandsId" => $post['storeBrandsId'],   
                "description" => $post['description'],      
                "updateDate" => time(),
                "updateBy" => $this->model->userId(), 
            );
            $this->db->update('cso1_storeBranches', $update,"id = '".$post['id']."' ");
        
        
            $data = array(
                "error" => false,
                "items" =>  $update,
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
            $this->db->update('cso1_storeBranches', $update,"id = '".$post['id']."' ");

            $data = array(
                "items" =>  $update,
            );
        }
        echo   json_encode($data);
    }
}
