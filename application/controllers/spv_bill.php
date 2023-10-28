<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Spv_bill extends CI_Controller
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
            //    echo $this->model->error("Error auth");
            //    exit;
        }
    }
    function list()
    {
        $data = array(
            "items" => $this->model->sql("select top 50 c.endDate, c.id, c.struk, c.finalPrice, c.paymentTypeId,
            t.name as 'terminalId'
                        from cso1_transaction as c
                        left join cso1_terminal as t on t.id = c.terminalId
                        where c.presence = 1 order by c.id DESC
            
"),
        );
        echo   json_encode($data);
    }

    function index()
    {
    }
    function httpSelectOutlet()
    {
        $data = array(
            "storeOutlet" => $this->model->sql("select * from cso1_storeOutles where presence = 1"),
        );
        echo   json_encode($data);
    }

    function datatables()
    {
        $dateFrom = strtotime($this->input->get('dateFrom') . ' -1 day');
        $where = " and t.storeOutlesId = '" . $this->input->get('storeOutletId') . "' 
        and (t.transactionDate  >=  " . $dateFrom . " and t.transactionDate <= " . strtotime($this->input->get('dateTo') . '+1 day') . ")";
        $data = array(
            "data" => $this->model->sql("SELECT t.*, p.name as 'payment' , x.totalPrint
            from cso1_transaction as t
            left join cso1_paymentType as p on p.id = t.paymentTypeId
            left join (
                select count(transactionId) as 'totalPrint', transactionId from cso1_transactionPrintLog
                group by transactionId 
            ) as x on x.transactionId = t.id
            where t.presence = 1 $where
            order by t.transactionDate DESC"),
        );
        echo   json_encode($data);
    }


    function print($id = "")
    {
        $data = array(
            "items" => $this->model->sql("SELECT r.*, u.name as 'name' 
                from cso1_reset as r
                left join cso1_user as u on r.inputBy = u.id 
                where  r.presence = 1 and r.id = '$id'
                order by r.id DESC")[0],

            "payments" => $this->model->sql("SELECT p.* , t.name as 'paymentName'
                from cso1_resetPayment as p 
                left join cso1_paymentType as t on t.id = p.paymentTypeId
                where p.resetId = '$id' and p.presence = 1
                order by t.name asc "),
        );
        echo   json_encode($data);
    }
}
