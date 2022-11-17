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
        /*
        if (!$this->model->checkDeviceObj()) {
            //  echo $this->model->error("Error auth");
            //  exit;
        } else {
            $getDeviceObj =  $this->model->getDeviceObj();
            $this->terminalId =  $getDeviceObj['terminalId'];
            $this->storeOutlesId =  $getDeviceObj['storeOutlesId'];
        }*/
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

            $update = array(
                "ilock" => 1,
            );
            $this->db->update("cso1_kioskUuid", $update, "kioskUuid = '$kioskUuid'");

            $summary = $this->model->summary($kioskUuid);
            $final = (string)$summary['final'];

            $str_length = 10;
            $debit = substr("00000000000{$final}", -$str_length) . "00";


            $erc_STX            = "02";
            $erc_messageLenght  = "0150";
            $erc_version        = "02";

            $erc_transAmount    = $debit . "000000000000";
            $erc_other          = "N00000                                                                              ";
            $erc_ETX            = "03";
            $erc_transType      =  $post['transType'];

            if ($erc_transType == '01') {
                // DEBIT CC 
                if ($dummyCC == true) {
                    $erc_cc             = "5409120012345684   251000000000000000  ";
                } else {
                    $erc_cc             = "                       00000000000000  ";
                }
            }
            if ($erc_transType == '31') {
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
                "xor" =>   $this->ecr->fnXor($erc_message),
                "debit" => $debit,
            );



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

    /*
    BCA ERC 
    */
    function fnBcaEcr32($reffNo)
    {
       
        if ($reffNo) { 
            $data = []; 
            $erc_STX            = "02";
            $erc_messageLenght  = "0150";
            $erc_version        = "02"; 
            $erc_dat2 = "32000000000000000000000000                       00000000000000  N00000            232116000753                                                      ";
            $erc_data = "32000000000000000000000000                       00000000000000  N00000            ".$reffNo."                                                      ";
            $erc_ETX           = "03";


            $msg_length =  strlen($erc_version .$erc_data);
            $erc_message =  ($erc_data);

            $hex  = $erc_STX .
                $erc_messageLenght .
                $erc_version .
                bin2hex($erc_data) . 
                $erc_ETX .
                $this->ecr->fnXor($erc_message);

            $data = array(
                "msg" => $erc_message,
                "length" => $msg_length,
                "hex" =>  $hex,
                "xor" =>  $this->ecr->fnXor($erc_message),
            
            );   
        } else {
            $data = array(
                "error" => true,
            );
        }
       return ($data);
    }
    function fnQrisCheck()
    {
        $post =   json_decode(file_get_contents('php://input'), true);

        if ($post) {
            $id = $this->model->select("id", "cso1_paymentBcaQris", "presence = 1 and  kioskUuid = '" . $post['kioskUuid'] . "' ");
            $reffNo = $this->model->select("reffNo", "cso1_paymentBcaQris", "presence = 1 and  kioskUuid = '" . $post['kioskUuid'] . "' ");
            $data = array(
                "data" => $id ? $this->model->sql("select * from cso1_paymentBcaQris where id= $id ")[0] : false,
                "error" => false,
                "hex" => self::fnBcaEcr32( $reffNo ),
            );
        } else {
            $data = array(
                "error" => true,
            );
        }
        echo json_encode($data);
    }

    function fnCheck()
    {
        $kioskUuid = $this->input->get("kioskUuid");
        $post = $this->model->sql("select * from cso1_paymentBcaQris where kioskUuid = '$kioskUuid' ")[0];

        // print_r($post );
        // $refNo = (string)preg_replace('/\s\s+/', ' ', $post['asciiString']);
        // echo $refNo;
        // $refNo = (explode(" ", $refNo));
        // print_r( $refNo);
        // $refNo = $refNo[1];
        // echo substr( $refNo, 2, 12);

        $refNo = (string)preg_replace('/\s\s+/', ' ', $post['asciiString']);

        $refNo = substr($refNo, 0, 45);
        echo  'hasil ' . $refNo;
    }

    function fnBcaCashDEL()
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
                $debit = substr("00000000000{$final}", -$str_length) . "00";


                $erc_STX            = "02";
                $erc_messageLenght  = "0150";
                $erc_version        = "02";

                $erc_transAmount    = $debit . "000000000000";
                $erc_other          = "N00000                                                                              ";
                $erc_ETX            = "03";
                $erc_transType      =  $post['transType'];

                if ($erc_transType == '01') {
                    // DEBIT CC 
                    $erc_cc             = "                       00000000000000  ";
                }
                if ($erc_transType == '31') {
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


    function fnSaveLog()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post && $post['data']['respCode']) {
            $insert = array(
                "respCode"  => $post['data']['respCode'],
                "kioskUuid" =>  $post['kioskUuid'],
                "transType" =>  $post['data']['transType'],
                "hex"       => $post['data']['hex'],
                "inputDate" => time(),
            );

            $this->db->insert("cso1_paymentBcaLog", $insert);
            $data = array(
                "error" => false,
                "insert" => $insert,
            );
        } else {
            $data = array(
                "error" => true,
            );
        }
        echo json_encode($data);
    }
    function fnQrisInsert()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post && $post['data']['respCode']) {

            $this->db->delete("cso1_paymentBcaQris", "kioskUuid = '" . $post['kioskUuid'] . "'");

            $refNo = preg_replace('/\s\s+/', ' ', $post['data']['ascii']);
            $refNo  = substr($refNo, 33, 12);
            $insert = array(
                "kioskUuid" =>  $post['kioskUuid'],
                "reffNo" =>   $refNo,
                "hex" =>  $post['data']['hex'],
                "asciiString"  =>  $post['data']['ascii'],
                "inputDate"  => time(),
                "updateDate"  => time(),
            );
            $id = $this->model->select("id", "cso1_paymentBcaQris", "kioskUuid = '" . $post['kioskUuid'] . "'  and reffNo = '" . $refNo . "'");
            if (!$id) {
                $this->db->insert("cso1_paymentBcaQris", $insert);
            } else {
                $insert = false;
            }

            $data = array(
                "error" => false,
                "insert" => $insert,
                "refNo" => $refNo,
                "id" =>  $id,
            );
        } else {
            $data = array(
                "error" => true,
            );
        }
        echo json_encode($data);
    }
}
