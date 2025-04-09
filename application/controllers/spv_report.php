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


    function terminal(){
        $post = $this->input->get();


            $q = "SELECT 
                CAST(endDate AS DATE) AS 'transactionDate',
                COUNT(*) AS total
                from cso1_transaction as t
                left join cso1_rate as r on r.transactionId = t.id
                where  CAST(endDate AS DATE) BETWEEN '".$post['startDate']."' AND '".$post['endDate']."'
                and t.terminalId is not null
                GROUP BY CAST(endDate AS DATE)
                ORDER BY CAST(endDate AS DATE);";
            
            $item = $this->model->sql($q);

            $t = "select id, name from cso1_terminal where   token  != ''";
        
             $termial = $this->model->sql($t);

            $i=0;
            foreach($item as $r){

                foreach($termial as $tt){
                    $total =  $this->model->sql("select count(id)  as 'total' from cso1_transaction 
                    where CAST(endDate AS DATE) = '".$r['transactionDate']."' and terminalId = '".$tt['id']."'")[0]['total'];  
                    $item[$i][url_title($tt['name'])] = $total ; 

                    $rate =  $this->model->sql("select count(id) as 'totalRate', sum(rate)/count(id) as 'rateValue'  from cso1_rate
                    where CAST(inputDate AS DATE)   = '".$r['transactionDate']."'");  
                    $item[$i][url_title($tt['name'])."_totalRate"] = (int)$rate[0]['totalRate'] ; 
                    $item[$i][url_title($tt['name'])."_rateValue"] = (int)$rate[0]['rateValue'] ; 
                    
                }
               
                
                $i++;
            }

            $data = array(  
                "terminal" => $termial,
                "items" => $item ,
            ); 
            echo   json_encode($data);  
    }
}