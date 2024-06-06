<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Spv_qrisTelkom extends CI_Controller
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
            "items" => $this->model->sql("SELECT top 300 * , '' as checkStatus
                    from cso1_paymentQrisTelkom  
                WHERE  presence = 1  order by  kioskUuid DESC 
            "),
        );
        echo   json_encode($data);
    }
 
    


    function fnQrisTelkomStatus()
    {
        $kioskUuid = $this->input->get("transactionId");

        if ($this->model->select("kioskUuid", "cso1_paymentQrisTelkom", "kioskUuid = '$kioskUuid' ")) {
            $ch = curl_init();
            $headers = array(
                'Accept: application/json',
                'Content-Type: application/json',
            );
            $setting = $this->model->sql("select * from cso1_paymentType where id = 'QRT001' and presence = 1 and status = 1 ")[0];
            $qris = $this->model->sql("select * from cso1_paymentQrisTelkom where kioskUuid = '$kioskUuid' ")[0];

            $apiUrlResp = "https://qris.id/restapi/qris/checkpaid_qris.php";
            $url = $apiUrlResp . "?do=$kioskUuid&apikey=" . $setting['apikey'] . "&mID=" . $setting['mId'] . "&invid=" . $qris['qris_invoiceid'] . "&trxvalue=" . $qris['cliTrxAmount'] . "&trxdate=" . date("Y-m-d", strtotime($qris['qris_request_date']));

            // $url = "https://qris.id/restapi/qris/checkpaid_qris.php?do=BILL000000097&apikey=139139211206273&mID=195233984319&invid=50588963759&trxvalue=1000&trxdate=2022-09-30";

            curl_setopt($ch, CURLOPT_URL, $url);
            // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            $body = '{}';

            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Timeout in seconds
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);

            $res = curl_exec($ch);
            $resp = json_decode($res, true);

            $data = array(
                "error" => false,
                "qris" => $resp,
            );
        } else {
            $data = array(
                "error" => true,
                "status" => "not found kiosk Uuid",
            );
        }
        echo json_encode($data);
    }
}
