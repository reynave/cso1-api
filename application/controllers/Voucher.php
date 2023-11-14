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
        $data = array(
            "items" => $this->model->sql("SELECT * from voucher_master  WHERE expDate >= GETDATE() order by input_date DESC"),
        );
        echo json_encode($data);
    }

    function datatables()
    {
        $data = array(
            "data" => $this->model->sql("SELECT *, FORMAT(amount, 'c','id-ID')  as 'amounts'  
            from voucher_master order by input_date DESC"),
        );
        echo json_encode($data);
    }
    function generate()
    {
        
        $post = json_decode(file_get_contents('php://input'), true);
        $data = array(
            "error" => true,
            "trans_status" => [],
            "post" => $post,
        );
        if ($post) { 

            $this->db->trans_start();
            $id = $this->model->number("voucher");
            $filename = "$id.txt";
            $insert = array(
                "id" => $id,
                "name" => $post['data']['name'],
                "prefix" => $post['data']['prefix'],
                "amount" => $post['data']['amount'],
                "startNumber" => $post['data']['startNumber'],
                "endNumber" => $post['data']['endNumber'],
                "digitNumber" => $post['data']['digitNumber'],
                "expDate" => $post['data']['expDate'],
                "filename" => $filename,
                "input_date" => date("Y-m-d H:i:s"),
            );
            $this->db->insert("voucher_master", $insert);


            $fp = fopen("uploads/voucher/$filename", 'w');
            $id = $this->model->select('id', "voucher_master", " startNumber > 0  order by input_date DESC ");
            for ($i = $post['data']['startNumber']; $i <= $post['data']['endNumber']; $i++) {
                $new_number = $id . $post['data']['prefix'] . str_pad($i, $post['data']['digitNumber'], "0", STR_PAD_LEFT);

                $insert = array(
                    "id" => uniqid(),
                    "voucherMasterId" => $id,
                    "number" => $new_number,
                    "amount" => 100000,
                    "input_date" => date("Y-m-d H:i:s"),

                );
                fputcsv($fp, $insert, ";");

                // echo $id.';'.$new_number.';'.date("Y-m-d H:i:s")."\n";
                // $this->db->insert("voucher", $insert);
            }

            $this->db->trans_complete();
            $trans_status = true;
            if ($this->db->trans_status() === FALSE) {
                $trans_status = false;
            }

            $data = array(
                "error" => false,
                "trans_status" => $trans_status,
                "post" => $post,
            );
        }
        echo json_encode($data);
    }


    function csv()
    {
        $list = array(
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
