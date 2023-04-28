<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kiosks extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->terminalId = "";
        $this->storeOutlesId = "";
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        date_default_timezone_set('Asia/Jakarta');
        date_default_timezone_set('Asia/Jakarta');
        // error_reporting(E_ALL);  
        if (!$this->model->checkDeviceObj()) {
            echo $this->model->error("Error auth");
            exit;
        } else {
            $getDeviceObj =  $this->model->getDeviceObj();
            $this->terminalId =  $getDeviceObj['terminalId'];
            $this->storeOutlesId =  $getDeviceObj['storeOutlesId'];
        }
    }

    function index()
    {
        $token =  $this->input->get("token");
        $this->terminalId = $this->model->select("id", "cso1_terminal", "status = 1 and presence = 1 and token = '$token' ");
        $this->storeOutlesId = $this->model->select("storeOutlesId", "cso1_terminal", "status = 1 and presence = 1 and token = '$token'");
        $systemOnline = true;
        if($this->model->select("status","cso1_storeOutles","id='".$this->storeOutlesId."'") == 0){
            $systemOnline = false;
        }

        if($this->model->select("status","cso1_terminal","id='".$this->terminalId."'") == 0){
            $systemOnline = false;
        }

        $data = array(
            "account" =>  $this->model->sql("SELECT * FROM cso1_account  order by Id ASC"),
            "limitItemsWarning" =>  $this->model->select("limit", "cso1_storeOutles", "id='" . $this->storeOutlesId . "'"),
            "storeOutlesId" =>  $this->storeOutlesId,
            "terminalId" =>  $this->terminalId,
            "systemOnline" => $systemOnline,
            "turnOn"    =>  (int)$this->model->select("value", "cso1_account", "id=4"),
        );

        echo json_encode($data);
    }
}
