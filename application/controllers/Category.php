<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category extends CI_Controller
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
            "items" => $this->model->category(0),
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
                "id_parent"     => $post['id_parent'], 
                "name"          => $post['child']['name'],  
                "status"        => $post['child']['status'], 
                "inputDate"     => time(),
                "inputBy"       => $this->model->userId(),
                "updateDate"    => time(),
                "updateBy"      => $this->model->userId(), 
            );
            $this->db->insert('cso1_itemCategory', $insert);

            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }
    function insertParent()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $insert = array(
                "id_parent"     => 0, 
                "name"          => $post['name'],  
                "status"        => $post['status'], 
                "inputDate"     => time(),
                "inputBy"       => $this->model->userId(),
                "updateDate"    => time(),
                "updateBy"      => $this->model->userId(), 
            );
            $this->db->insert('cso1_itemCategory', $insert);

            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }
    function delete(){
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "presence" => 0,
                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
            );
            $this->db->update('cso1_itemCategory', $update,"id=".$post['id']); 
       
        }
        echo   json_encode($post);
    }

    function update(){
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array( 
                "status" => $post['status'],
                "name" => $post['name'],  
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_itemCategory', $update,"id=".$post['id']);  
        }
        echo   json_encode($post);
    }
 
}
