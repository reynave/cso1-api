<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KioskPayment extends CI_Controller
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
        $uuid = str_replace(["'", '"', "-"], "", $this->input->get("uuid"));
        if ($uuid) {

            $uuid = str_replace(["'", '"', "-"], "", $this->input->get("uuid"));

            $storeOutlesId = $this->storeOutlesId;
            $terminalId = $this->terminalId;

            $memberId =  $this->model->select("memberId", "cso1_kioskUuid", "presence = 1 AND status = 1  AND kioskUuid = '" . $uuid . "'");

            $discountMember =  $memberId > 0 ? $this->model->sql("SELECT sum(discountAmount) as 'discountAmount', 
            sum(discountPercent) as 'discountPercent'
            from cso1_promotion where presence =1 and status =  1 and startDate >= " . time() . "  and endDate <= " . time())[0] : 0;


            $data = array(
                "outletId" => $storeOutlesId,
                "storeOutlesPaymentType" => $this->model->sql("SELECT s.id, s.paymentTypeId, p.*
                    from cso1_storeOutlesPaymentType as s
                    join cso1_paymentType as p on p.id = s.paymentTypeId
                    where s.storeOutlesId =  '$storeOutlesId' and s.presence = 1 and s.status = 1"),

                "kioskUuid" =>  $this->model->sql("SELECT * FROM cso1_kioskUuid  where presence = 1 and kioskUuid = '" . $uuid . "'") ?  $this->model->sql("SELECT * FROM cso1_kioskUuid  where presence = 1 and kioskUuid = '" . $uuid . "'")[0] : [],
                "member" =>  !$memberId ? [] : $this->model->sql("SELECT * FROM cso1_member  where presence = 1 and id = '" . $memberId . "'")[0],

                "summary" => $this->model->summary($uuid),
            );
        }

        echo json_encode($data);
    }

    function fnProcessPaymentReal()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $this->db->trans_start();
            $id =  $this->model->number("transaction");

            $kioskUuid =  $post['kioskUuid'];
            $summary = $this->model->summary($kioskUuid);

            $storeOutlesId = $this->storeOutlesId;
            $terminalId = $this->terminalId;

            $insert = array(
                "id" => $id,
                "transactionDate" => time(),
                "kioskUuid" =>  $kioskUuid,
                "memberId" => $this->model->select("memberId", "cso1_kioskUuid", "kioskUuid = '" .  $kioskUuid . "'"),
                "paymentTypeId" => $post['paymentTypeId'],

                "startDate" => $this->model->select("startDate", "cso1_kioskUuid", "kioskUuid = '" .  $kioskUuid . "'"),
                "endDate" => date("Y-m-d H:i:s"),
                "storeOutlesId" =>  $storeOutlesId,
                "terminalId" =>   $terminalId,
                "struk" => $id,
                "cashierId" => "",
                "pthType" => 1,

                "total" => (int)$summary['total'],
                "discount" => (int)$summary['discount'],
                "discountMember" => (int)$summary['memberDiscount'],
                "voucher" => (int)$summary['voucer'],
                "bkp" => (int)$summary['bkp'],
                "dpp" => (int)$summary['dpp'],
                "ppn" => (int)$summary['ppn'],
                "nonBkp" => (int)$summary['nonBkp'],
                "finalPrice" => (int)$summary['final'],

                "locked" => 1,
                "presence" => 1,
                "inputDate" => time(),
                "updateDate" =>  time(),
            );
            $this->db->insert('cso1_transaction', $insert);

            $q = $this->model->sql("select * from cso1_kioskCart where kioskUuid = '$kioskUuid' ");
            foreach ($q as $row) {
                $insertDetail = array(
                    "transactionId" => $id,
                    "promotionId" => $row['promotionId'],
                    "promotionItemId" => $row['promotionItemId'],
                    "barcode" => $row['barcode'],
                    "itemId" => $row['itemId'],
                    "originPrice" => $row['originPrice'],
                    "price" => $row['price'],
                    "discount" => $row['discount'],
                    "isPriceEdit" => $row['isPriceEdit'],
                    "isFreeItem" => $row['isFreeItem'],
                    "isSpecialPrice" => $row['isSpecialPrice'],
                    "isPrintOnBill" => $row['isPrintOnBill'],
                    "note" => $row['note'],

                    "void" => $row['void'],
                    "presence" => 1,
                    "inputDate" => time(),
                    "updateDate" =>  time(),
                    "updateBy" => $row['updateBy'],
                );
                $this->db->insert('cso1_transactionDetail', $insertDetail);
            }

            $q = $this->model->sql("SELECT * FROM cso1_kioskCartFreeItem
             WHERE presence = 1 AND status = 0 AND kioskUuid = '$kioskUuid' ");
            foreach ($q as $row) {

                $insertDetail = array(
                    "transactionId" => $id,
                    "barcode" => $row['barcode'],
                    "itemId" => $row['freeItemId'],
                    "promotionId" => $row['promotionId'],
                    "promotionFreeId" => $row['promotionFreeId'],
                    "originPrice" => 0,
                    "price" => 0,
                    "discount" => 0,
                    "isPriceEdit" => 0,
                    "isFreeItem" => 1,
                    "isSpecialPrice" => 0,
                    "isPrintOnBill" => $row['printOnBill'],
                    "void" => 0,
                    "presence" => $row['scanFree'] == true ? 1 : 2,
                    "inputDate" => time(),
                    "updateDate" =>  time(),
                    "updateBy" => $row['updateBy'],
                );
                $this->db->insert('cso1_transactionDetail', $insertDetail);
            }

            // QRIS TELKOM
            if ($post['paymentTypeId'] == 'QRT001') {
                $updateQris = array(
                    "qris_status" => $post['qris']['data']['qris_status'],
                    "qris_payment_customername" => $post['qris']['data']['qris_payment_customername'],
                    "qris_payment_methodby" => $post['qris']['data']['qris_payment_methodby'],
                    "transactionId" => $id,
                    "status" => 10,
                    "updateDate" => time(),
                );
                $this->db->update("cso1_paymentQrisTelkom",   $updateQris, "kioskUuid = '$kioskUuid'");
            }

            // DEBIT BCA
            if ($post['paymentTypeId'] == 'BCA01' ||  $post['paymentTypeId'] == 'BCA31' ) {
                $insert = array(
                    "transactionId" => $id,
                    "paymentTypeId" => $post['paymentTypeId'],
                    "kioskUuid"     => $kioskUuid, 
                    "respCode"      => $post['data']['respCode'],  
                    "hex"           => $post['data']['hex'],  
                    "asciiString"         => $post['data']['ascii'],  
                    "updateDate"    => time(),
                    "inputDate"     => time(),
                );
                $this->db->insert("cso1_paymentBcaEcr",   $insert);
            }  
            $this->db->trans_complete();
            $trans_status = true;
            if ($this->db->trans_status() === FALSE) {
                $trans_status = false;
            } else {

                // REMOVE CART
                $delete = array(
                    'kioskUuid' => $kioskUuid
                );
                $this->db->delete('cso1_kioskUuid', $delete);
                $this->db->delete('cso1_kioskCart', $delete);
                $this->db->delete('cso1_kioskCartFreeItem', $delete);
            }


            $data = array(
                "id" => $id,
                "insert" => $insert,
                "post" => $post,
                "trans_status" =>  $trans_status,
            );
        }
        echo json_encode($data);
    }

    function fnProcessPaymentFake()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $this->db->trans_start();
            $id =  $this->model->number("transaction");

            $kioskUuid =  $post['kioskUuid'];
            $summary = $this->model->summary($kioskUuid);

            $storeOutlesId = $this->storeOutlesId;
            $terminalId = $this->terminalId;

            $insert = array(
                "id" => $id,
                "transactionDate" => time(),
                "kioskUuid" =>  $kioskUuid,
                "memberId" => $this->model->select("memberId", "cso1_kioskUuid", "kioskUuid = '" .  $kioskUuid . "'"),
                "storeOutlesId" =>  $storeOutlesId,
                "terminalId" =>   $terminalId,

                "startDate" => $this->model->select("startDate", "cso1_kioskUuid", "kioskUuid = '" .  $kioskUuid . "'"),
                "endDate" => date("Y-m-d H:i:s"),

                "struk" => $id,
                "cashierId" => "",
                "pthType" => 1,

                "total" => (int)$summary['total'],
                "discount" => (int)$summary['discount'],
                "discountMember" => (int)$summary['memberDiscount'],
                "voucher" => (int)$summary['voucer'],
                "bkp" => (int)$summary['bkp'],
                "dpp" => (int)$summary['dpp'],
                "ppn" => (int)$summary['ppn'],
                "nonBkp" => (int)$summary['nonBkp'],
                "finalPrice" => (int)$summary['final'],

                "locked" => 1,
                "presence" => 1,
                "inputDate" => time(),
                "updateDate" =>  time(),
            );
            $this->db->insert('cso1_transaction', $insert);
            $q = $this->model->sql("select * from cso1_kioskCart where kioskUuid = '$kioskUuid' ");
            foreach ($q as $row) {
                $insertDetail = array(
                    "transactionId" => $id,
                    "promotionId" => $row['promotionId'],
                    "promotionItemId" => $row['promotionItemId'],
                    "barcode" => $row['barcode'],
                    "itemId" => $row['itemId'],
                    "originPrice" => $row['originPrice'],
                    "price" => $row['price'],
                    "discount" => $row['discount'],
                    "isPriceEdit" => $row['isPriceEdit'],
                    "isFreeItem" => $row['isFreeItem'],
                    "isSpecialPrice" => $row['isSpecialPrice'],
                    "isPrintOnBill" => $row['isPrintOnBill'],
                    "void" => $row['void'],
                    "presence" => 1,
                    "inputDate" => time(),
                    "updateDate" =>  time(),
                    "updateBy" => $row['updateBy'],
                    "note" => $row['note'],
                );
                $this->db->insert('cso1_transactionDetail', $insertDetail);
            }

            $q = $this->model->sql("SELECT * FROM cso1_kioskCartFreeItem
             WHERE presence = 1 AND status = 0 AND kioskUuid = '$kioskUuid' ");
            foreach ($q as $row) {

                $insertDetail = array(
                    "transactionId" => $id,
                    "barcode" => $row['barcode'],
                    "itemId" => $row['freeItemId'],
                    "promotionId" => $row['promotionId'],
                    "promotionFreeId" => $row['promotionFreeId'],
                    "originPrice" => 0,
                    "price" => 0,
                    "discount" => 0,
                    "isPriceEdit" => 0,
                    "isFreeItem" => 1,
                    "isSpecialPrice" => 0,
                    "isPrintOnBill" => $row['printOnBill'],
                    "void" => 0,
                    "presence" => $row['scanFree'] == true ? 1 : 2,
                    "inputDate" => time(),
                    "updateDate" =>  time(),
                    "updateBy" => $row['updateBy'],
                );
                $this->db->insert('cso1_transactionDetail', $insertDetail);
            }
            $this->db->trans_complete();
            $trans_status = true;
            if ($this->db->trans_status() === FALSE) {
                $trans_status = false;
            } else {

                // REMOVE CART
                $delete = array(
                    'kioskUuid' => $kioskUuid
                );
                $this->db->delete('cso1_kioskUuid', $delete);
                $this->db->delete('cso1_kioskCart', $delete);
                $this->db->delete('cso1_kioskCartFreeItem', $delete);
            }


            $data = array(
                "id" => $id,
                "insert" => $insert,
                "post" => $post,
                "trans_status" =>  $trans_status,
            );
        }
        echo json_encode($data);
    }


    function fnQrisTelkom()
    {
        $kioskUuid = $this->input->get("kioskUuid");

        if ($this->model->select("kioskUuid", "cso1_kioskUuid", "kioskUuid = '$kioskUuid' ")) {
            $summary = $this->model->summary($kioskUuid);
            $final = (int)$summary['final'];
            $cliTrxNumber = $kioskUuid . "-01";
            $exp = $this->model->select("kioskUuid", "cso1_paymentQrisTelkom", "kioskUuid = '$kioskUuid' ") ? $this->model->sql("select DATEADD(mi, 30,qris_request_date) as 'exp' from cso1_paymentQrisTelkom where kioskUuid = '$kioskUuid' ")[0]['exp'] : false;

            if ($this->model->select("qris_content", "cso1_paymentQrisTelkom", "kioskUuid ='$kioskUuid'")) {
                $qris_content = $this->model->select("qris_content", "cso1_paymentQrisTelkom", "kioskUuid ='$kioskUuid'");
                $data = array(
                    "status" => strtotime($exp) < time() ? false : true,
                    "check" => array(
                        "timeCreated" => strtotime($exp),
                        "timeCurrent" => time(),
                    ),
                    "summary" => $summary,
                    "do" => $kioskUuid,
                    "error" => false,
                    "note" => "View only",
                    "exp" =>  $exp,
                    "qris" => $qris_content,
                    "image" => $this->model->select("image", "cso1_paymentType", "id='QRT001'"),
                    "nmid" => $this->model->select("qris_nmid", "cso1_paymentQrisTelkom", "kioskUuid ='$kioskUuid'"),
                    "name" => $this->model->select("name", "cso1_paymentType", "id='QRT001'"),
                );
                $update = array(
                    "ilock" => 1,
                );
                $this->db->update("cso1_kioskUuid", $update, "kioskUuid = '$kioskUuid'");
            } else {
                $ch = curl_init();
                $headers = array(
                    'Accept: application/json',
                    'Content-Type: application/json',
                );

                $setting = $this->model->sql("select * from cso1_paymentType where id = 'QRT001' and presence = 1 and status = 1 ")[0];
                $url = $setting['apiUrl'] . "?do=$kioskUuid&apikey=" . $setting['apikey'] . "&mID=" . $setting['mId'] . "&cliTrxNumber=$cliTrxNumber&cliTrxAmount=$final";
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

                $insert = array(
                    "kioskUuid" => $kioskUuid,
                    "cliTrxNumber" => $cliTrxNumber,
                    "cliTrxAmount" => $final,
                    "transactionId" => "",
                    "qris_content" => $resp['data']['qris_content'],
                    "qris_invoiceid" => $resp['data']['qris_invoiceid'],
                    "qris_api_version_code" => $resp['qris_api_version_code'],
                    "qris_request_date" => $resp['data']['qris_request_date'],
                    "qris_nmid" =>  $resp['data']['qris_nmid'],
                    "updateDate" =>  time(),
                    "inputDate" =>  time(),
                    "status" => 0,
                    "presence" => 1,
                );
                $this->db->insert("cso1_paymentQrisTelkom", $insert);
                $update = array(
                    "ilock" => 1,
                );
                $this->db->update("cso1_kioskUuid", $update, "kioskUuid = '$kioskUuid'");
                $exp = $this->model->sql("select DATEADD(mi, 30,qris_request_date) as 'exp' from cso1_paymentQrisTelkom where kioskUuid ='$kioskUuid' ")[0]['exp'];

                $data = array(
                    "status" => true,
                    "summary" => $summary,
                    "do" => $kioskUuid,
                    "nmid" => $resp['data']['qris_nmid'],
                    "name" => $this->model->select("name", "cso1_paymentType", "id='QRT001'"),
                    "error" => false,
                    "exp" =>  $exp,
                    "status" => "create new",
                    "qris" =>  $insert['qris_content'],
                    "image" => $this->model->select("image", "cso1_paymentType", "id='QRT001'")
                );
            }
        } else {
            $data = array(
                "error" => true,
                "status" => "not found kiosk Uuid",
                "qris" => "",
            );
        }
        echo json_encode($data);
    }

    function fnQrisTelkomRegenerate()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $kioskUuid = $post['kioskUuid'];
            $this->db->delete("cso1_paymentQrisTelkom", "kioskUuid = '$kioskUuid' ");

            $data = array(
                "error" => false,
            );
        } else {
            $data = array(
                "error" => true,
            );
        }
        echo json_encode($data);
    }

    function fnQrisTelkomStatus()
    {
        $kioskUuid = $this->input->get("kioskUuid");

        if ($this->model->select("kioskUuid", "cso1_kioskUuid", "kioskUuid = '$kioskUuid' ")) {
            $ch = curl_init();
            $headers = array(
                'Accept: application/json',
                'Content-Type: application/json',
            );
            $setting = $this->model->sql("select * from cso1_paymentType where id = 'QRT001' and presence = 1 and status = 1 ")[0];
            $qris = $this->model->sql("select * from cso1_paymentQrisTelkom where kioskUuid = '$kioskUuid' ")[0];

            $apiUrlResp = "https://qris.id/restapi/qris/checkpaid_qris.php";
            $url =  $apiUrlResp . "?do=$kioskUuid&apikey=" . $setting['apikey'] . "&mID=" . $setting['mId'] . "&invid=" . $qris['qris_invoiceid'] . "&trxvalue=" . $qris['cliTrxAmount'] . "&trxdate=" . date("Y-m-d", strtotime($qris['qris_request_date']));

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
                "qris" =>  $resp,
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
