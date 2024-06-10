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

        $date  = explode('-',$this->input->get("date")); 

       

        $a = "SELECT  
        q.* ,  t.terminalId , '' as checkStatus
            from cso1_paymentQrisTelkom   as q
            left join cso1_transaction as t on t.id = q.transactionId 
        WHERE   q.presence = 1  AND
        (year( q.qris_request_date) = ".(int)$date[0]." AND month(q.qris_request_date) = ".(int)$date[1]." AND day( q.qris_request_date) = ".(int)$date[2]."   )
        order by  q.kioskUuid DESC";
        
        $data = array(
            "q1" => str_replace("\r\n",'',$a),
            "items" => $this->model->sql($a),
        );
        echo   json_encode($data);
    }
 

    function selectSCO(){

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

/**
 *      "qris_status": "paid",
 *      "qris_payment_customername": "L ANDI YULIANTO",
 *      "qris_payment_methodby": "Sakuku",
 *      "qris_paid_date": "2024-06-07 10:28:19"
 */ 
            if($resp['status'] == 'success'){ 
                $update = array( 
                    "qris_status" => $resp['data']['qris_status'], 
                    "qris_payment_customername" => $resp['data']['qris_payment_customername'],   
                    "qris_payment_methodby" => $resp['data']['qris_payment_methodby'],   
                    "qris_paid_date" => $resp['data']['qris_paid_date'], 
                    "url" => $url, 
                ); 
                $this->db->update("cso1_paymentQrisTelkom", $update, "kioskUuid = '$kioskUuid' ");  
            }

          
            $a = "SELECT  
            q.* ,  t.terminalId , '' as checkStatus
                from cso1_paymentQrisTelkom   as q
                left join cso1_transaction as t on t.id = q.transactionId 
            WHERE   q.presence = 1  AND q.kioskUuid = '".$kioskUuid."'
            order by  q.kioskUuid DESC";
             
            $data = array(
                "error" => false,
                "qris" => $resp,
                "item" => $this->model->sql($a)[0],
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
