<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Transactions extends CI_Controller
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
        //    echo $this->model->error("Error auth");
        //    exit;
        }
    }


    function index()
    {
        $get = $this->input->get();

        $date1 = new DateTime($get['dateFrom']);
        $date2 = new DateTime($get['dateTo']);

        $interval = $date1->diff($date2);
        $days = $interval->days;

        $paymentTypeId = $get['paymentTypeId'] != '' ? " AND paymentTypeId = '".$get['paymentTypeId']."' " : '' ;
        $terminalId = $get['terminalId'] != '' ? " AND terminalId = '".$get['terminalId']."' " : '' ;
        

        $q = "SELECT t.*,  p.name as 'paymentName', p.label as 'paymentLabel'
        FROM cso1_transaction as t 
        LEFT JOIN cso1_paymentType as p on p.id = t.paymentTypeId
        WHERE t.presence =1   AND  t.startDate >= '" . $get['dateFrom'] . "' AND t.startDate <= '" . $get['dateTo'] . "' $paymentTypeId $terminalId
        ORDER BY t.id ASC ";
        $items = $this->model->sql($q);
        $data = array( 
            "items" =>  $items ,
            "total" => count( $items ),
            "get" => $get,
            "days" => $days,
        );
        echo json_encode($data);
    }

    function byId()
    {
        $get = $this->input->get();

        $id = $get['id'];
          
        $q = "SELECT t.*,  p.name as 'paymentName', p.label as 'paymentLabel'
        FROM cso1_transaction as t 
        LEFT JOIN cso1_paymentType as p on p.id = t.paymentTypeId
        WHERE t.presence =1   AND  t.id = '$id' 
        ORDER BY t.id ASC ";

        $items = $this->model->sql($q);
        $data = array( 
            "items" =>  $items ,
            "total" => count( $items ),
            "get" => $get, 
        );
        echo json_encode($data);
    }

    function httpSelect()
    { 
        $paymentType = $this->model->sql("SELECT id, label, name  FROM cso1_paymentType WHERE presence =1   ORDER BY label ASC ");
        $terminal = $this->model->sql("SELECT id, name , storeOutlesId  FROM cso1_terminal WHERE presence =1  ");

        $data = array( 
            "paymentType" =>  $paymentType, 
            "terminal" =>  $terminal, 
            
        );
        echo json_encode($data);
    }

    function detail(){
        $id = $this->input->get('id');
        $q = "SELECT t.*, i.description AS 'item', p.description  AS 'promo'
        FROM cso1_transactionDetail AS t
        LEFT JOIN cso1_item AS i on i.id = t.itemId
        LEFT JOIN cso1_promotion AS p ON p.id = t.promotionId 
        WHERE t.transactionId = '$id'
        "; 
        $items = $this->model->sql($q);

        $h = "SELECT t.*,  p.name as 'paymentName', p.label as 'paymentLabel'
        FROM cso1_transaction as t 
        LEFT JOIN cso1_paymentType as p on p.id = t.paymentTypeId
        WHERE t.presence =1   AND  t.id = '$id'  ";
        $header = $this->model->sql($h);

        $data = array( 
            "q" =>  $q,   
            "items" => $items,
            "header" => $header[0],
        );
        echo json_encode($data);
    }

}
