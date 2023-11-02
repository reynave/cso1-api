<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Voucher extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->openAPI = $this->db->openAPI;
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        if (!$this->model->header($this->openAPI)) {
          //  echo $this->model->error("Error auth");
          //  exit;
        }

    }


    function index()
    {
       echo 'masuk';
    }
    function generate()
    {


        $post['data'] = array(
            "name" =>"testing",
            "prefix" => 'C'.date("Y"),
            "startNumber" => 100,
            "endNumber" => 910,   
            "digitNumber" => 4
        );
        $this->db->trans_start();


        $insert = array( 
            "name" => $post['data']['name'],
            "prefix" => $post['data']['prefix'],
            "startNumber" => $post['data']['startNumber'], 
            "endNumber" => $post['data']['endNumber'], 
            "digitNumber" => $post['data']['digitNumber'],  
            "input_date" => date("Y-m-d H:i:s"),
        );
        $this->db->insert("voucher_master", $insert);

        $date = date("Ymd");

        $fp = fopen("uploads/voucher/file$date.txt", 'w');
        $id = $this->model->select('id',"voucher_master"," startNumber > 0  order by input_date DESC ");
        for($i = $post['data']['startNumber']; $i <= $post['data']['endNumber'] ; $i++){
            $new_number = $id.$post['data']['prefix'].str_pad($i, $post['data']['digitNumber'] , "0", STR_PAD_LEFT);

            $insert = array( 
                "voucherMasterId" =>  $id ,
                //"status" => 0, 
                "number" =>  $new_number,
                "input_date" => date("Y-m-d H:i:s"),
               
            );
            fputcsv($fp, $insert);

            echo $id.';'.$new_number.';'.date("Y-m-d H:i:s")."\n";
           // $this->db->insert("voucher", $insert);
        }


       // $this->db->trans_complete();
      //  $trans_status = true;
      //  if ($this->db->trans_status() === FALSE) {
      //      $trans_status = false;
     //   }

       // $data = array(
      //      "trans_status" => $trans_status,
      //  );
    }


    function csv(){
        $list = array (
            array('aaa', 'bbb', 'ccc', 'dddd'),
            array('123', '456', '789'),
            array('"aaa"', '"bbb"')
        );
        
        $fp = fopen('uploads/file.txt', 'w');
        
        foreach ($list as $fields) {
            fputcsv($fp, $fields);
        }
        
        fclose($fp);
    }
}
