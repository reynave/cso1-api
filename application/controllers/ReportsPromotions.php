<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ReportsPromotions extends CI_Controller
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
            from cso1_storeOutles where storeBranchesId = '".$this->input->get('storeBranchesId')."' and presence = 1 order by name ASC") : [], 

            "storeBranches" => $this->model->sql("SELECT id, name from cso1_storeBranches where presence = 1 order by name ASC"),  
            "dateFrom" => date('Y-m-d'),
            "dateTo" =>date('Y-m-d'),
        );
        echo json_encode($data);
    }

    function storeOutles($storeBranchesId="")
    { 
        $data = array(
            "storeOutles" => $this->model->sql("SELECT id, name from cso1_storeOutles where storeBranchesId = '$storeBranchesId' and  presence = 1 order by name ASC"),  
        );
        echo json_encode($data);
    }
   
    function fnFilter(){
     
        $data = array(
            "dateFrom" => strtotime($this->input->get('dateFrom') ), 
            "dateTo" => strtotime($this->input->get('dateTo') ),  
            "items" => $this->model->sql("SELECT t1.*, i.description as 'item', p.description as 'promo', p.id 
            from 
                (
                    select td.itemId, td.promotionId, count(td.id) as 'qty', sum(td.originPrice - td.price) as 'discount'
                    from cso1_transaction as t
                    join cso1_transactionDetail as td on t.id = td.transactionId
                    where t.presence = 1  and td.presence = 1 and promotionId is not null and 
                    (t.transactionDate >= " . strtotime($this->input->get('dateFrom')) . " and  t.transactionDate < " . strtotime($this->input->get('dateTo')) . " ) and t.storeOutlesId = '" . $this->input->get('storeOutletId') . "' 
                    GROUP BY  td.itemId, td.promotionId
                ) as t1
                join cso1_item as i on i.id = t1.itemId
                join cso1_promotion as p on p.id = t1.promotionId
                order by t1.qty DESC"),
        );
        echo json_encode($data);
    }

    function paymentDetail( )
    {
        $data = array(
            "items" => $this->model->sql("
                SELECT id, transactionDate,  paymentTypeId,  finalPrice
                from cso1_transaction where 
                paymentTypeId = '".$this->input->get("paymentTypeId")."'  and 
                presence = 1  and 
                 (transactionDate >= " . strtotime($this->input->get('dateFrom')) . " and  transactionDate < " . strtotime($this->input->get('dateTo')) . " ) and storeOutlesId = '" . $this->input->get('storeOutletId') . "' 
                 order by finalPrice DESC
            "),
        );
        echo json_encode($data);
    }


}
