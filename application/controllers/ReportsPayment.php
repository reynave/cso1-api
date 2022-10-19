<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ReportsPayment extends CI_Controller
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
    // START :: ITEMS
    function storeBranches()
    {
        $data = array(
            "storeOutles" => $this->input->get('storeBranchesId') ?  $this->model->sql("SELECT id, name 
            from cso1_storeOutles where storeBranchesId = '" . $this->input->get('storeBranchesId') . "' and presence = 1 order by name ASC") : [],

            "storeBranches" => $this->model->sql("SELECT id, name from cso1_storeBranches where presence = 1 order by name ASC"),
            "dateFrom" => date('Y-m-d'),
            "dateTo" => date('Y-m-d'),
        );
        echo json_encode($data);
    }

    function storeOutles($storeBranchesId = "")
    {
        $data = array(
            "storeOutles" => $this->model->sql("SELECT id, name from cso1_storeOutles where storeBranchesId = '$storeBranchesId' and  presence = 1 order by name ASC"),
        );
        echo json_encode($data);
    }


    function fnFilterDONT()
    {
        //? storeBranchesId=11&storeOutletId=&dateFrom=2022-09-14&dateTo=2022-09-13 
        $payment = $this->model->sql("select id,name from cso1_paymentType
        where presence = 1");
        $items = [];
        foreach ($payment as $row) {
            $paymentDetail = $this->model->sql("SELECT t.id, t.finalPrice, t.paymentTypeId,  t.storeOutlesId
            from cso1_transaction  as t 
            where t.presence = 1  and t.paymentTypeId = '" . $row['id'] . "' ");
            $detail = array(
                "name" => $row['name'],
                "detail" => $paymentDetail,
            );
            array_push($items, $detail);
        }

        $data = array(
            "dateFrom" => strtotime($this->input->get('dateFrom')),
            "dateTo" => strtotime($this->input->get('dateTo')),
            "items" =>  $items,
        );
        echo json_encode($data);
    }

    function fnFilter()
    {

        $data = array(
            "dateFrom" => strtotime($this->input->get('dateFrom')),
            "dateTo" => strtotime($this->input->get('dateTo')),
            "items" => $this->model->sql("SELECT t1.*, p.name
                from (
                SELECT paymentTypeId, count(paymentTypeId) as 'qty',  sum(finalPrice) as 'totalAmount'
                from cso1_transaction where 
                (transactionDate >= " . strtotime($this->input->get('dateFrom')) . " and  transactionDate < " . strtotime($this->input->get('dateTo')) . " ) 
                and storeOutlesId = '" . $this->input->get('storeOutletId') . "' 
                and presence = 1 
                group by paymentTypeId) as t1
                join cso1_paymentType as p on p.id = t1.paymentTypeId"),
        );
        echo json_encode($data);
    }

    function paymentDetail()
    {
        $data = array(
            "items" => $this->model->sql("
                SELECT id, transactionDate,  paymentTypeId,  finalPrice
                from cso1_transaction where 
                paymentTypeId = '" . $this->input->get("paymentTypeId") . "'  and 
                presence = 1  and 
                 (transactionDate >= " . strtotime($this->input->get('dateFrom')) . " and  transactionDate < " . strtotime($this->input->get('dateTo')) . " ) and storeOutlesId = '" . $this->input->get('storeOutletId') . "' 
                 order by finalPrice DESC
            "),
        );
        echo json_encode($data);
    }
}
