<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->openAPI = $this->db->openAPI;
        header('Access-Control-Allow-Origin: *'); 
        header("Access-Control-Allow-Headers: key, token,  Content-Type"); 
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/javascript');
        //error_reporting(E_ALL);  
        //  $this->core->https();
      /*  if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
        }
        */
      
    }

    function index()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $password = md5($post['passw']);
        $email = $this->model->clean($post['email']);
      
        $id = $this->model->select('id', 'cso1_user', "email = '". $email ."' and password = '".$password."' and status = 1 and presence =1  ");
        if ($post &&  $id ) {
            $token  = 'TT-' . md5($id . '-' . date('YmdHis') . '-' . rand(99999, 999999));
            $insert = array( 
                "agent" => $_SERVER['HTTP_USER_AGENT'],
                "token" => $token,
                "client_ip" => $_SERVER['SERVER_ADDR'],
                "userId" => $id,
                "inputDate" =>  time(),
                "updateDate" => time(),
                "inputBy"	=> $id,
            );
            $this->db->insert('cso1_userAuth', $insert);
            $userAccessId =  $this->model->select('userAccessId', 'cso1_user', "id = '".$id."' "); 
            $accessRight = $this->model->sql("SELECT * from cso1_userAccessModule where userAccessId = ".$userAccessId);
            $data = array( 
                "accessRightObj" => $accessRight,
                "accessRight" => json_encode($accessRight),
                "data" => $insert,
                "error" => false,  
            );
    
        }else{ 
            $data = array(
                "error" => true, 
            );
        }
       
        echo   json_encode($data);
    }

    function signout()
	{ 
        if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
        }
		$post = json_decode(file_get_contents('php://input'), true); 
		if ($post) {
			$this->db->delete("cso1_userAuth", "token = '" . $post['token'] . "'");
		}
	}
   

    
}
