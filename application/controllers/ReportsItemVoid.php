<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ReportsItemVoid extends CI_Controller
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
         //   exit;
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

        $startDate = $this->input->get('dateFrom');
        $endDate = $this->input->get('dateTo');

        //? storeBranchesId=11&storeOutletId=&dateFrom=2022-09-14&dateTo=2022-09-13 
        $q = "SELECT t1.*, i.description , i.itemCategoryId, c.name
        from (
            select td.itemId, sum(td.price) as 'totalAmount', count(td.itemId) as 'qty'
            from cso1_transaction as t
            join cso1_transactionDetail as td on td.transactionId = t.id 
            where t.presence = 1 and  td.void = 1 and t.storeOutlesId = '".$this->input->get('storeOutletId')."' 
            and  (cast(t.startDate as date) >= '$startDate' and cast(t.startDate as date) <= '$endDate' ) 
                group by td.itemId
            ) as t1
            join cso1_item as i on i.id = t1.itemId
            left join cso1_itemCategory as c on c.id = i.itemCategoryId 
        ";

        $data = array(
            "dateFrom" => $startDate, 
            "dateTo" => $endDate,  
            "items" => $this->model->sql($q),
            "q" => $q
        );
        echo json_encode($data);
    }
}
