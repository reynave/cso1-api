<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sync extends CI_Controller
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

    function index()
    {

        $data = array(
            "items" => $this->model->sql("SELECT * 
            FROM cso1_syncLog 
            where  presence = 1 and module = 'item' order by inputDate DESC"),
        );
        echo json_encode($data);
    }



    function uploadItem()
    {

        $data = array(
            "error" => true,
        );
        if ($this->input->post('token')) {
            $this->load->helper('url', 'form');
            $config['upload_path']          = './uploads/items';
            $config['allowed_types']        = 'txt';
            $config['max_size']             = 10000;
            $new_name = time() . $_FILES["item"]['name'];
            $config['file_name'] = $new_name;
            $data = array(
                "error" => false,
                "upload_data" => [],
                "token" => apache_request_headers(),
                "post" => $this->input->post(),
            );
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('item')) {
                $data['error'] =  $this->upload->display_errors();
            } else {
                $data['upload_data'] =  $this->upload->data();
                $insert = array(
                    "fileSize" => $this->upload->data()['file_size'],
                    "fileName" => $this->upload->data()['file_name'],
                    "module" => "item",
                    "status" => 0,
                    "presence" => 1,
                    "inputDate" => time(),
                    "inputBy" => $this->model->userId(),
                );
                $this->db->insert("cso1_syncLog", $insert);
                $error = false;
                $data = array(
                    "error" => $error,
                    "insert" => $insert,
                );
            }
        }

        echo json_encode($data);
    }



    // PROMO   
    function promo()
    {

        $data = array(
            "items" => $this->model->sql("SELECT * 
            FROM cso1_syncLog 
            where  presence = 1 and module = 'promo' order by inputDate DESC"),
        );
        echo json_encode($data);
    }
    function uploadPromo()
    {

        $data = array(
            "error" => true,
        );
        if ($this->input->post('token')) {
            $this->load->helper('url', 'form');
            $config['upload_path']          = './uploads/promo';
            $config['allowed_types']        = 'txt';
            $config['max_size']             = 10000;
            $new_name = time() . $_FILES["item"]['name'];
            $config['file_name'] = $new_name;
            $data = array(
                "error" => false,
                "upload_data" => [],
                "token" => apache_request_headers(),
                "post" => $this->input->post(),
            );
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('item')) {
                $data['error'] =  $this->upload->display_errors();
            } else {
                $data['upload_data'] =  $this->upload->data();
                $insert = array(
                    "fileSize" => $this->upload->data()['file_size'],
                    "fileName" => $this->upload->data()['file_name'],
                    "module" => "promo",
                    "status" => 0,
                    "presence" => 1,
                    "inputDate" => time(),
                    "inputBy" => $this->model->userId(),
                );
                $this->db->insert("cso1_syncLog", $insert);
                $error = false;
                $data = array(
                    "error" => $error,
                    "insert" => $insert,
                );
            }
        }

        echo json_encode($data);
    }

    // TRANSACTION   
    function transaction()
    {

        $data = array(
            "items" => $this->model->sql("SELECT * 
             FROM cso1_syncLog 
             where  presence = 1 and module = 'transaction' order by inputDate DESC"),
        );
        echo json_encode($data);
    }
    function uploadTransactionHeader()
    {

        $data = array(
            "error" => true,
        );
        if ($this->input->post('token')) {
            $this->load->helper('url', 'form');
            $config['upload_path']          = './uploads/transaction';
            $config['allowed_types']        = 'txt';
            $config['max_size']             = 10000;
            $new_name = time() . $_FILES["item"]['name'];
            $config['file_name'] = $new_name;
            $data = array(
                "error" => false,
                "upload_data" => [],
                "token" => apache_request_headers(),
                "post" => $this->input->post(),
            );
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('item')) {
                $data['error'] =  $this->upload->display_errors();
            } else {
                $data['upload_data'] =  $this->upload->data();
                $insert = array(
                    "fileSize" => $this->upload->data()['file_size'],
                    "fileName" => $this->upload->data()['file_name'],
                    "module" => "transaction",
                    "status" => 0,
                    "presence" => 1,
                    "inputDate" => time(),
                    "inputBy" => $this->model->userId(),
                );
                $this->db->insert("cso1_syncLog", $insert);
                $error = false;
                $data = array(
                    "error" => $error,
                    "insert" => $insert,
                );
            }
        }

        echo json_encode($data);
    }


    function syncSetting()
    {
        $data = array(
            "item" => array(
                "getMember" => $this->model->select("value", "cso1_account", "id=300"),
                "getItem" => $this->model->select("value", "cso1_account", "id=301"),
                "getPromotion" => $this->model->select("value", "cso1_account", "id=302"),
                "sendTransaction" => $this->model->select("value", "cso1_account", "id=350"),
            ),
        );
        echo json_encode($data);
    }

    function syncSettingUpdate()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "value" => $post['items']['getMember'],
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update("cso1_account", $update, "id=300");

            $update = array(
                "value" => $post['items']['getItem'],
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update("cso1_account", $update, "id=301");

            $update = array(
                "value" => $post['items']['getPromotion'],
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update("cso1_account", $update, "id=302");

            $update = array(
                "value" => $post['items']['sendTransaction'],
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update("cso1_account", $update, "id=350");
            echo json_encode($post);
         
        }
    }
}
