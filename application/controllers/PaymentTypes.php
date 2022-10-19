<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PaymentTypes extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();  
        $this->openAPI = $this->db->openAPI;
        $this->module = "paymentTypes";
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
            "items" => $this->model->sql("SELECT * FROM cso1_paymentType where  presence = 1 order by id ASC"),
        ); 
        echo json_encode($data); 
    } 
 
    function insert()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post && $this->model->_modify($this->module) ) {
            $error = true;
            $insert = array( 
                "id" =>  $this->model->number('idPayment'),
                "name" => "Payment",
                "status" => 0, 
                "presence" => 1,
                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->insert('cso1_paymentType', $insert);

            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }

    function delete(){
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post && $this->model->_modify($this->module) ) {
            $error = true;
            $update = array(
                "presence" => 0,
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_paymentType', $update," ilock = 0 and id='".$post['id']."' "); 
       
        }
        echo   json_encode($post);
    }

    function update(){
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post && $this->model->_modify($this->module) ) {
            $error = true;
            $update = array( 
                "status" => $post['status'],
                "name" => $post['name'], 
                
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_paymentType', $update,"id='".$post['id']."' ");  
        }  
        echo   json_encode($post);
    }

    function updateDetail(){
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post && $this->model->_modify($this->module) ) {
            $error = true;
            $update = array(  
                "name" => $post['item']['name'],  
                "mId" => $post['item']['mId'],  
                "nmId" => $post['item']['nmId'],  
                "merchant" => $post['item']['merchant'],  
                "timeout" => (int) $post['item']['timeout'],  
                "image" => $post['item']['image'],  
                "apiUrlStatus" => $post['item']['apiUrlStatus'],    
                "apiUrl" => $post['item']['apiUrl'],   
                
                "status" => $post['item']['status'],   

                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_paymentType', $update,"id='".$post['item']['id']."' ");  
        }  
        echo   json_encode($post);
    }
}
