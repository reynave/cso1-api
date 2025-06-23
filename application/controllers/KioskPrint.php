<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KioskPrint extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->keygen = "t3XsTuq9aCvNxCkNXPEyvvGejhKBHumxVbv6fJ6aGeCPg83hzVGBYDFd6H8u";
        $this->priceLevel = 1;
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        date_default_timezone_set('Asia/Jakarta');

        // if (!$this->model->header($this->openAPI)) {
        //     echo $this->model->error("Error auth");
        //     exit;
        // }
    }

    function index()
    {   
        $a = "SELECT t.id, t.startDate, t.memberId, t.finalPrice, e.rrn,
            p.label as 'paymentName', e.kioskUuid, e.approvalCode, t.kioskUuid, e.approvalCode, t.terminalId
                from cso1_transaction as t 
                left join cso1_paymentType as p on p.id = t.paymentTypeId
                left join cso1_paymentBcaEcr as e on e.transactionId = t.id
                where t.presence  = 1 and (  
                    year(t.startDate) = year(GETDATE()) AND  
                    month(t.startDate) = month(GETDATE()) AND  
                    day(t.startDate) = day(GETDATE()) 
                )";

        
        $data = array(
            "items" => $this->model->sql($a), 
            "a" => $a,
        ); 
        echo json_encode($data);
    }
    function indexAll()
    { 
        $data = array(
            "items" => $this->model->sql("SELECT top 100 t.id,  t.startDate, t.memberId, t.finalPrice, 
            p.label as 'paymentName', e.kioskUuid, e.approvalCode, t.kioskUuid, e.approvalCode, t.terminalId
                from cso1_transaction as t 
                left join cso1_paymentType as p on p.id = t.paymentTypeId
                left join cso1_paymentBcaEcr as e on e.transactionId = t.id
                where t.presence  = 1 order by t.id DESC"), 
        );
        echo json_encode($data);
    }

    function printDetail()
    {
        $data = [];
        $id = str_replace(["'", '"', "-"], "", $this->input->get("id"));
        if ($id) {
            $isId = $this->model->select("endDate", "cso1_transaction", "id='" . $id . "'");

            $update = array( 
                "discount" => 0, 
            ); 
            $this->db->update("cso1_transactionDetail", $update, "discount is null and transactionId = '$id' ");
            //ver 1
            // $items = $this->model->sql("SELECT t1.*, i.description, i.shortDesc, i.id as 'itemId'
            // FROM (
            //     SELECT count(td.itemId) as qty, td.itemId, sum(td.price - td.discount) as 'totalPrice', td.price, td.barcode,
            //     sum(td.isSpecialPrice) as 'isSpecialPrice', sum(td.discount) as 'totalDiscount', td.note
            //     from cso1_transactionDetail as td
            //     where td.presence = 1 and td.void = 0 and td.transactionId = '$id' and td.isFreeItem = 0
            //     group by td.itemId, td.price, td.note , td.barcode
            // ) as t1
            // JOIN cso1_item as i on i.id = t1.itemId
            // ORDER BY i.description ASC
            // "); 

            //ver 2
            $q = " SELECT  td.id, td.barcode, td.itemId, (td.price - td.discount) as 'totalPrice', td.price, td.originPrice,
                    (td.isSpecialPrice) as 'isSpecialPrice', (td.discount) as 'totalDiscount', td.note,  i.description, i.shortDesc
            from cso1_transactionDetail as td
            JOIN cso1_item as i on i.id = td.itemId
            where td.presence = 1 and td.void = 0 and td.transactionId = '$id' and td.isFreeItem = 0";
            $itemsList = $this->model->sql($q);
           
            $items= [];
            foreach ($itemsList as $rec) {
                $arrBarcode = $this->model->barcode($rec['barcode']);
               
                $qty = is_array($arrBarcode) == true && $arrBarcode['prefix'] == '2' ? $arrBarcode['weight'] : 1;

                $a = $rec['barcode'].$rec['price'];
                if (!isset($items[$a])) {
                    $price = $rec['price'];
                    $count = 1;
                    if(is_array($arrBarcode) == true && $arrBarcode['prefix'] == '2'){
                        $price = is_array($arrBarcode) == true && $arrBarcode['prefix'] == '2' ? $rec['originPrice']   : $rec['price'];
                        $count = $this->model->sql("SELECT count(id) as 'total'
                        from cso1_transactionDetail where presence = 1 and transactionId = '$id' and barcode = '".$rec['barcode']."'
                                ")[0]['total'];
                    }
                 


                    $items[$a ] = array(
                        "qty" => $qty,
                        "itemId" => $rec['itemId'],
                        "barcode" => $rec['barcode'],
                        "totalPrice" => $rec['totalPrice'],
                        "totalDiscount" => $rec['totalDiscount'] * -1,
                        "shortDesc" => $rec['shortDesc'] .($count > 1  ? " X ".$count : '' ),
                        "description" => $rec['description'] .($count > 1  ? " X ".$count : '' ),
 
                        "isSpecialPrice" => $rec['isSpecialPrice'],
                        "note" => $rec['note'], 
                        "price" => $price,
                        "images" => null,
                        "arrayBarcode" => $arrBarcode,
                    );
                } else {
                    $items[$a ]['qty'] += $qty;
                    $items[$a ]['totalPrice'] += $rec['totalPrice'];
                }
            }
            $items = array_values($items);
            $memberId = $this->model->sql("SELECT t.*, p.label as 'paymentName' 
            from cso1_transaction  as t
            left join cso1_paymentType as p on p.id = t.paymentTypeId
            where t.id= '" . $id . "' ")[0]['memberId'];
            $member = isset($memberId) && $memberId != '0'  ?  "MEMBER ID : ".$memberId : "MEMBER ID : VISITOR";
          
          $paymentBcaEcr =  $this->model->sql("SELECT  *  from cso1_paymentBcaEcr    where transactionId = '" . $id . "' ");
            $data = array(
                "id" => $id,
                "printable" =>   $isId ? true : false,
                "date" => $this->model->select("endDate", "cso1_transaction", "id='" . $id . "'"),
                "detail" =>  $isId ?  $this->model->sql("SELECT t.*, p.label as 'paymentName' 
                from cso1_transaction  as t
                left join cso1_paymentType as p on p.id = t.paymentTypeId
                where t.id= '" . $id . "' ")[0] : [],

                "paymentBcaEcr" =>  $paymentBcaEcr ?  $paymentBcaEcr : [], 
                "itemsList" => $itemsList,
                "items" =>  $items,
                "freeItem" => $this->model->sql(" SELECT t1.*, i.description, i.shortDesc, i.id as 'itemId'
                    from (
                        select count(td.itemId) as qty, td.itemId, sum(td.isPrintOnBill) as printOnBill
                        from cso1_transactionDetail as td
                        where td.presence = 1 and td.void = 0 and td.transactionId = '$id' and td.isFreeItem = 1
                        group by td.itemId, td.price, td.isPrintOnBill
                    ) as t1
                    JOIN cso1_item as i on i.id = t1.itemId
                    ORDER BY i.description
                "),
                "freeItemWaitingScanFail" => $this->model->sql(" SELECT t1.*, i.description, i.shortDesc, i.id as 'itemId'
                    from (
                        select count(td.itemId) as qty, td.itemId, sum(td.isPrintOnBill) as printOnBill
                        from cso1_transactionDetail as td
                        where td.presence = 2 and td.transactionId = '$id' and td.isFreeItem = 1
                        group by td.itemId, td.price, td.isPrintOnBill
                    ) as t1
                    JOIN cso1_item as i on i.id = t1.itemId
                    ORDER BY i.description
                "),
                "summary" => array(
                    "nonBkp" => (int)$this->model->select("nonBkp", "cso1_transaction", "id='$id'"),
                    "bkp" =>  ceil($this->model->select("bkp", "cso1_transaction", "id='$id'")),
                    "discount" => (int)$this->model->select("discount", "cso1_transaction", "id='$id'"),
                    //"dpp" => (int)$this->model->select("dpp", "cso1_transaction", "id='$id'"),
                    "dpp" =>  ceil($this->model->select("bkp", "cso1_transaction", "id='$id'")),

                    "discountMember" => (int)$this->model->select("discountMember", "cso1_transaction", "id='$id'"),
                    "ppn" => (int)$this->model->select("ppn", "cso1_transaction", "id='$id'"),
                    "total" => (int)$this->model->select("total", "cso1_transaction", "id='$id'"),
                    "voucher" => (int)$this->model->select("voucher", "cso1_transaction", "id='$id'"),
                    "final" => (int)$this->model->select("finalPrice", "cso1_transaction", "id='$id'"),
                ),
                "template" => array(
                    "companyName" => $this->model->select("value", "cso1_account", "name='companyName'"),
                    "companyAddress" => $this->model->select("value", "cso1_account", "name='companyAddress'"),
                    "companyPhone" => strlen($this->model->select("value", "cso1_account", "name='companyPhone'")) > 3 ? 'Telp : ' . $this->model->select("value", "cso1_account", "name='companyPhone'") : '',
                 //   "footer" => $member."\n".$this->model->select("value", "cso1_account", "id='1007'"),
                    "footer" => $this->model->select("value", "cso1_account", "id='1007'"),

                ),
                "memberId" =>  $memberId == '0' ? 'VISITOR' : $memberId,
                "copy" => $this->model->sql(" select count(id) as 'copy' from cso1_transactionPrintLog where transactionId ='$id'" )[0]['copy'],
                "rate" => count($this->model->sql(" select * from cso1_rate where transactionId ='$id'" )) <1 ? false : $this->model->sql(" select * from cso1_rate where transactionId ='$id'" ) ,
            );
        }
        echo json_encode($data);
    }

    function countingPrinting()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $insert = array(
                "transactionId" => $post['id'],
                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
            );
            $this->db->insert("cso1_transactionPrintLog", $insert);
        }
        echo json_encode($insert);
    }


    function fnUpdateRate(){
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $insert = array(
                "transactionId" => $post['transactionId'],
                "terminalId" => $post['terminalId'],
                "storeOutlesId" => $post['storeOutlesId'],
                
                "rate" => $post['rate'], 
                "inputDate" => date("Y-m-d H:i:s"), 
            );
            $this->db->insert("cso1_rate", $insert);
        }
        echo json_encode($insert);
    }
}
