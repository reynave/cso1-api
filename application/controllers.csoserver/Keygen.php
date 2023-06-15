<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Keygen extends CI_Controller
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
         return false;
    } 
    function terminal()
    { 
        $data = array( 
            "terminal" => $this->model->sql("SELECT * FROM cso1_terminal where presence = 1 order by inputDate ASC"), 
            "keyLisence" => $this->model->select("value","cso1_account","id=2"),
        ); 
        echo json_encode($data); 
    }
    function onSubmit()
    { 
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = false;
            foreach ($post['items'] as $r) {
                $update = array( 
                    "keyLisence"     => $r['keyLisence'],
                    "token"     => $r['token'], 
                    "updateDate"=> time(),
                    "updateBy"  => $this->model->userId(),
                );
                $this->db->update('cso1_terminal', $update,"id='".$r['id']."' ");  
            }


            $update = array( 
                "value"     => "Update ".date("Y-m-d H:i:s"),
                "updateDate"=> time(),
                "updateBy"  => $this->model->userId(),
            );
            $this->db->update('cso1_account', $update,"id=2");  
        }

        $data = array( 
            "error" => $error,
            "post" =>$post,  
        ); 
        echo json_encode($data); 
     
    }
   
}
