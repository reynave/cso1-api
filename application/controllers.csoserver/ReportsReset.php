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
            // echo $this->model->error("Error auth");
            //  exit;
        }
    }
    // START :: ITEMS
    function storeBranches()
    {
        // $cso1_storeBrand  = $this->model->sql("SELECT * from cso1_storeBrands where presence = 1 order by name ASC");
        // $storeBranches = [];
        // $storeBranchesDetail = [];
        // foreach ($cso1_storeBrand as $row) {

        //     foreach ($this->model->sql("SELECT id, description 
        //     from cso1_storeBranches where storeBrandsId = '" . $row['id'] . "' and presence = 1 order by description ASC") as $row) {
        //         array_push($storeBranchesDetail, $row);
        //     }
        //     $temp = array(
        //         "brand" => "[" . $row['id'] . "] " . ($row['description'] == null ? $row['id'] : $row['description']),
        //         "branches" => $storeBranchesDetail,
        //     );
        //     array_push($storeBranches, $temp);
        // }

 
        $storeBranches = [];
       
        foreach ($this->model->sql("SELECT * from cso1_storeBranches where presence = 1 order by name ASC") as $row) {
            $storeOutlet = [];
            foreach ($this->model->sql("SELECT storeBranchesId,id, name
            from cso1_storeOutles where storeBranchesId = '" . $row['id'] . "' and presence = 1 order by name ASC") as $row2) {
                array_push($storeOutlet, $row2);
            }



            $temp = array(
                "branches" => "[" . $row['id'] . "] " . ($row['name'] == null ? $row['id'] : $row['name']),
                "outlet" => $storeOutlet, 
            );
            array_push($storeBranches, $temp);
        }


        $data = array( 
            //"storeBranches" =>  $storeBranches,
            "storeOutlet" =>  $storeBranches,

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


    function fnFilter()
    {
        //? storeBranchesId=11&storeOutletId=&dateFrom=2022-09-14&dateTo=2022-09-13 
        $dateFrom = strtotime($this->input->get('dateFrom'));
        $storeOutlesId = $this->input->get('storeOutletId');

        $data = array(
            "dateFrom" => $dateFrom,
            "dateTo" => strtotime($this->input->get('dateTo')),
            "storeOutlesId" => $storeOutlesId,
            "items" => $this->model->sql("SELECT a.*, u.name as 'user' 
            FROM cso1_reset as a 
            join cso1_user as u on u.id = a.inputBy   
            WHERE a.storeOutlesId = '$storeOutlesId' and 
                (a.endDate >=  " . $dateFrom . " and  a.endDate <= " . strtotime($this->input->get('dateTo')) . " )  
                and a.presence = 1
            "),

        );
        echo json_encode($data);
    }
}
