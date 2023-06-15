<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Member extends CI_Controller
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
       
    }


    function index()
    {
        
        $data = array( 
            "total" => $this->model->sql("select count(id)   total from cso1_member where presence = 1 ")[0]['total'],  
        ); 
        echo json_encode($data); 
    } 


    function datatables()
    {
        $search = $this->input->get('search');
        $data = array( 
            "data" => strlen($search) >= 3  ? $this->model->sql("SELECT top 100  * 
            from cso1_member where presence = 1 
            and (firstName like '%".$search."%' OR id = '".$search."' )
            order by firstName") : [], 
        ); 
        echo json_encode($data); 
    }  
}
