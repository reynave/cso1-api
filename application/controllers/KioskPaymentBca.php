<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kioskPaymentBca extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->priceLevel = 1;
        $this->terminalId = "";
        $this->storeOutlesId = "";
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        date_default_timezone_set('Asia/Jakarta');

        if (!$this->model->checkDeviceObj()) {
            //  echo $this->model->error("Error auth");
            //  exit;
        } else {
            $getDeviceObj =  $this->model->getDeviceObj();
            $this->terminalId =  $getDeviceObj['terminalId'];
            $this->storeOutlesId =  $getDeviceObj['storeOutlesId'];
        }
    }

    function index()
    {
        
    }
  
    /*
    BCA ERC 
    */ 
    function fnBcaEcr()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $paymentId = $post['paymentTypeId'];
            $kioskUuid = $post['kioskUuid'];
            $dummyCC = $post['dummyCC'];
            
            $data = [];
            if ($paymentId == 'bca01') {
                $update = array(
                    "ilock" => 1,
                );
                $this->db->update("cso1_kioskUuid", $update, "kioskUuid = '$kioskUuid'");

                $summary = $this->model->summary($kioskUuid);
                 $final = (string)$summary['final'];
  
                $str_length = 10;
                $debit = substr("00000000000{$final}", -$str_length)."00";
 

                $erc_STX            = "02";
                $erc_messageLenght  = "0150";
                $erc_version        = "02";
               
                $erc_transAmount    = $debit . "000000000000";  
                $erc_other          = "N00000                                                                              ";
                $erc_ETX            = "03";
                $erc_transType      =  $post['transType'];  

                if( $erc_transType == '01'){
                    // DEBIT CC 
                    if(   $dummyCC == true){
                        $erc_cc             = "5409120012345684   251000000000000000  "; 
                    }else{
                        $erc_cc             = "                       00000000000000  "; 
                    }
                   
                }
                if( $erc_transType == '31'){
                    // QRIS  
                    $erc_cc             = "                       00000000000000  "; 
                }




                $msg_length =  strlen($erc_version . $erc_transType . $erc_transAmount . $erc_cc . $erc_other);
                $erc_message =  ($erc_transType) . ($erc_transAmount) . ($erc_cc) . ($erc_other);

                $hex  = $erc_STX .
                    $erc_messageLenght .
                    $erc_version .
                    bin2hex($erc_transType) .
                    bin2hex($erc_transAmount) .
                    bin2hex($erc_cc) .
                    bin2hex($erc_other) . $erc_ETX .
                    $this->ecr->fnXor($erc_message);

                $data = array(
                    "summary" => $summary,
                    "msg" => $erc_message,
                    "length" => $msg_length,
                    "hex" =>  $hex,
                    "update" => $update,
                    "debit" => $debit,
                );
            }


            $data = array(
                "post" => $post,
                "data" => $data,
                "error" => false,
            );
        } else {
            $data = array(
                "error" => true,
            );
        }
        echo json_encode($data);
    }
 
    function fnBcaCash()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $paymentId = $post['paymentTypeId'];
            $kioskUuid = $post['kioskUuid'];
            $data = [];
            if ($paymentId == 'bca01') {
                $update = array(
                    "ilock" => 1,
                );
                $this->db->update("cso1_kioskUuid", $update, "kioskUuid = '$kioskUuid'");

                $summary = $this->model->summary($kioskUuid);
                 $final = (string)$summary['final'];
  
                $str_length = 10;
                $debit = substr("00000000000{$final}", -$str_length)."00";
 

                $erc_STX            = "02";
                $erc_messageLenght  = "0150";
                $erc_version        = "02";
               
                $erc_transAmount    = $debit . "000000000000";  
                $erc_other          = "N00000                                                                              ";
                $erc_ETX            = "03";
                $erc_transType      =  $post['transType'];  

                if( $erc_transType == '01'){
                    // DEBIT CC 
                    $erc_cc             = "                       00000000000000  "; 
                }
                if( $erc_transType == '31'){
                    // QRIS  
                    $erc_cc             = "                       00000000000000  "; 
                }




                $msg_length =  strlen($erc_version . $erc_transType . $erc_transAmount . $erc_cc . $erc_other);
                $erc_message =  ($erc_transType) . ($erc_transAmount) . ($erc_cc) . ($erc_other);

                $hex  = $erc_STX .
                    $erc_messageLenght .
                    $erc_version .
                    bin2hex($erc_transType) .
                    bin2hex($erc_transAmount) .
                    bin2hex($erc_cc) .
                    bin2hex($erc_other) . $erc_ETX .
                    $this->ecr->fnXor($erc_message);

                $data = array(
                    "summary" => $summary,
                    "msg" => $erc_message,
                    "length" => $msg_length,
                    "hex" =>  $hex,
                    "update" => $update,
                    "debit" => $debit,
                );
            }


            $data = array(
                "post" => $post,
                "data" => $data,
                "error" => false,
            );
        } else {
            $data = array(
                "error" => true,
            );
        }
        echo json_encode($data);
    } 
}
