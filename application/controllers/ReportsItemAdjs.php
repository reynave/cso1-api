<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ReportsItemAdjs extends CI_Controller
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
    // START :: ITEMS
    function storeBranches()
    { 
        if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
         }
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
        if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
         }
        $data = array(
            "storeOutles" => $this->model->sql("SELECT id, name from cso1_storeOutles where storeBranchesId = '$storeBranchesId' and  presence = 1 order by name ASC"),  
        );
        echo json_encode($data);
    }
 
   
    function fnFilter(){
        $dateFrom = strtotime($this->input->get('dateFrom').' -1 day');
        $where = " and t.storeOutlesId = '".$this->input->get('storeOutletId')."' 
        and (t.transactionDate  >=  ". $dateFrom." and t.transactionDate <= ".strtotime($this->input->get('dateTo') ).")";
        $data = array(
          //  "dateFrom" => strtotime($this->input->get('dateFrom') ),

          //  "dateTo" => strtotime($this->input->get('dateTo') ), 
 
            "data" => $this->model->sql("SELECT t1.*, i.description, u.name as 'pic' from (
                select    t.id, d.inputDate, d.itemId, d.originPrice, d.price, 
                d.updateBy,  t.transactionDate, t.terminalId, count(d.id) as 'qty'
                from cso1_transactionDetail as d
                join cso1_transaction as t on t.id = d.transactionId  
                where d.isPriceEdit = 1 and d.presence = 1  $where
                group by  t.id, d.itemId, d.inputDate, d.originPrice, d.price,t.transactionDate, t.terminalId, d.updateBy) as  t1
                join cso1_item as i on i.id = t1.itemId
                left join cso1_user as u on u.id = t1.updateBy
            ") 
        );
        echo json_encode($data);
    }
    
    function printDetail()
    {
        if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
         }
        $id = str_replace(["'", '"', "-"], "", $this->input->get("id"));
        if ($id) {

            $data = array(
                "id" => $id,
                "date" => $this->model->select("endDate","cso1_transaction","id=".$id),
                "items" =>  $this->model->sql("SELECT t1.*, i.description, i.shortDesc, i.id as 'itemId'
                    FROM (
                        SELECT count(td.itemId) as qty, td.itemId, sum(td.price - td.discount) as 'totalPrice', td.price,
                        sum(td.isSpecialPrice) as 'isSpecialPrice', sum(td.discount) as 'totalDiscount'
                        from cso1_transactionDetail as td
                        where td.presence = 1 and td.transactionId = '$id' and td.isFreeItem = 0
                        group by td.itemId, td.price
                    ) as t1
                    JOIN cso1_item as i on i.id = t1.itemId
                    ORDER BY i.description ASC
                "),
                "freeItem" => $this->model->sql(" SELECT t1.*, i.description, i.shortDesc, i.id as 'itemId'
                    from (
                        select count(td.itemId) as qty, td.itemId, sum(td.isPrintOnBill) as printOnBill
                        from cso1_transactionDetail as td
                        where td.presence = 1 and td.transactionId = '$id' and td.isFreeItem = 1
                        group by td.itemId, td.price, td.isPrintOnBill
                    ) as t1
                    JOIN cso1_item as i on i.id = t1.itemId
                    ORDER BY i.description
                "),
                 "freeItemWaitingScanFail" => $this->model->sql(" SELECT t1.*, i.description, i.shortDesc, i.id as 'itemId'
                    from (
                        select count(td.itemId) as qty, td.itemId, sum(td.isPrintOnBill) as printOnBill
                        from cso1_transactionDetail as td
                        where td.presence = 2 and td.transactionId = '$id' and td.isFreeItem = 1
                        group by td.itemId, td.price, td.isPrintOnBill
                    ) as t1
                    JOIN cso1_item as i on i.id = t1.itemId
                    ORDER BY i.description
                "),
                "summary" => array(
                    "nonBkp" => (int)$this->model->select("nonBkp", "cso1_transaction", "id=$id"),
                    "bkp" => (int)$this->model->select("bkp", "cso1_transaction", "id=$id"),
                    "discount" => (int)$this->model->select("discount", "cso1_transaction", "id=$id"),
                    "dpp" => (int)$this->model->select("dpp", "cso1_transaction", "id=$id"),
                    "discountMember" => (int)$this->model->select("discountMember", "cso1_transaction", "id=$id"),
                    "ppn" => (int)$this->model->select("ppn", "cso1_transaction", "id=$id"),
                    "total" => (int)$this->model->select("total", "cso1_transaction", "id=$id"),
                    "voucher" => (int)$this->model->select("voucher", "cso1_transaction", "id=$id"),
                    "final" => (int)$this->model->select("finalPrice", "cso1_transaction", "id=$id"),
                ),
                "template" => array(
                    "companyName" => $this->model->select("value", "cso1_account", "name='companyName'"),
                    "companyAddress" => $this->model->select("value", "cso1_account", "name='companyAddress'"),
                    "companyPhone" => 'Telp : '.$this->model->select("value", "cso1_account", "name='companyPhone'"),   
                    "footer" => $this->model->select("value", "cso1_account", "id='1007'"),
                ),
              
            );
        }
        echo json_encode($data);
    }
}
