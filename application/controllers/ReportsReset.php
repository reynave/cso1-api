<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ReportsReset extends CI_Controller
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
        //? storeBranchesId=11&storeOutletId=&dateFrom=2022-09-14&dateTo=2022-09-13 
        $dateFrom = strtotime($this->input->get('dateFrom'));

        $data = array(
            "dateFrom" => $dateFrom, 
            "dateTo" => strtotime($this->input->get('dateTo') ),  
            "items" => $this->model->sql("SELECT a.*, u.name as 'user' 
            FROM cso1_reset as a 
            join cso1_user as u on u.id = a.inputBy   
            WHERE 
                (a.endDate >=  ".$dateFrom." and  a.endDate <= ".strtotime($this->input->get('dateTo') )." )  
                and a.presence = 1
            ")
        );
        echo json_encode($data);
    }
}
