<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Spv_report extends CI_Controller
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
       //     echo $this->model->error("Error auth");
           //  exit;
        }
    }


    function index()
    { 
        if($this->input->get("dateFrom") && $this->input->get("dateTo")){
            $storeOutlesId = "";
            if($this->input->get("storeOutlesId") != '0' ){
                $storeOutlesId = " AND storeOutlesId = '".$this->input->get("storeOutletId")."' ";
            } 
            $item = $this->model->sql("SELECT   terminalId, id, finalPrice, endDate
            FROM cso1_transaction
            WHERE presence = 1 and startDate >= '".$this->input->get("dateFrom")."' and endDate <= '".$this->input->get("dateTo")."'
                $storeOutlesId 
            ");
        }else{

            $item = $this->model->sql("SELECT terminalId, id, finalPrice, endDate
            FROM cso1_transaction
            WHERE presence = 1 and  endDate <= '".date("Y-m-d")."'   
            ");
        }
     
        $data = array( 
            "storeOutles" => $this->model->sql("select * from cso1_storeOutles where presence = 1"), 
            "items" => $item, 
            "get" => $this->input->get(),  
        
        ); 
        echo   json_encode($data);
    }  
    function httpSelectOutle()
    {  
        $data = array( 
            "storeOutles" => $this->model->sql("select * from cso1_storeOutles where presence = 1"),  
        ); 
        echo   json_encode($data);
    }  

    function detail()
    { 
        $post =   json_decode(file_get_contents('php://input'), true);  
        if ($post) { 
            
            $data = array(
                "itemsSearch" => $this->model->sql("SELECT *
                    FROM cso1_transaction
                    WHERE presence = 1 and format(cast(endDate as date),'yyyy-MM-dd') = '".$post['item']['date']."' AND terminalId = '".$post['item']['terminalId']."'
                "),

                "items" => $this->model->sql("SELECT *
                FROM cso1_transaction
                WHERE presence = 1 
            "),
            ); 
            echo   json_encode($data);
        }
      
    }  
}