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
        $data = array(
            "items" => $this->model->sql("SELECT id, startDate, memberId, finalPrice from cso1_transaction
            where presence  = 1 and (  
                year(startDate) = year(GETDATE()) AND  
                month(startDate) = month(GETDATE()) AND  
                day(startDate) = day(GETDATE()) 
            )")
        );
        echo json_encode($data);
    }

    function printDetail()
    {
        $id = str_replace(["'", '"', "-"], "", $this->input->get("id"));
        if ($id) {

            $data = array(
                "id" => $id,
                "date" => $this->model->select("endDate","cso1_transaction","id=".$id),
                "detail" =>   $this->model->sql("select * from cso1_transaction where id='".$id."' ")[0],
                "items" =>  $this->model->sql("SELECT t1.*, i.description, i.shortDesc, i.id as 'itemId'
                FROM (
                    SELECT count(td.itemId) as qty, td.itemId, sum(td.price - td.discount) as 'totalPrice', td.price, td.barcode,
                    sum(td.isSpecialPrice) as 'isSpecialPrice', sum(td.discount) as 'totalDiscount', td.note
                    from cso1_transactionDetail as td
                    where td.presence = 1 and td.void = 0 and td.transactionId = '$id' and td.isFreeItem = 0
                    group by td.itemId, td.price, td.note , td.barcode
                ) as t1
                JOIN cso1_item as i on i.id = t1.itemId
                ORDER BY i.description ASC
                "),
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
                    "nonBkp" => (int)$this->model->select("nonBkp", "cso1_transaction", "id=$id"),
                    "bkp" => (int)$this->model->select("bkp", "cso1_transaction", "id=$id"),
                    "discount" => (int)$this->model->select("discount", "cso1_transaction", "id=$id"),
                    "dpp" => (int)$this->model->select("dpp", "cso1_transaction", "id=$id"),
                    "discountMember" => (int)$this->model->select("discountMember", "cso1_transaction", "id=$id"),
                    "ppn" => (int)$this->model->select("ppn", "cso1_transaction", "id=$id"),
                    "total" => (int)$this->model->select("total", "cso1_transaction", "id=$id"),
                    "voucher" => (int)$this->model->select("voucher", "cso1_transaction", "id=$id"),
                    "final" => (int)$this->model->select("finalPrice", "cso1_transaction", "id=$id"),
                ),
                "template" => array(
                    "companyName" => $this->model->select("value", "cso1_account", "name='companyName'"),
                    "companyAddress" => $this->model->select("value", "cso1_account", "name='companyAddress'"),
                    "companyPhone" => 'Telp : '.$this->model->select("value", "cso1_account", "name='companyPhone'"),   
                    "footer" => $this->model->select("value", "cso1_account", "id='1007'"),
                ),
              
            );
        }
        echo json_encode($data);
    }

    function countingPrinting(){
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $insert = array(
                "transactionId" => $post['id'],
                "inputDate" => time(),
                "inputBy" => $this->model->userId(), 
            );
            $this->db->insert("cso1_transactionPrintLog",$insert);
        }
        echo json_encode($insert);
    }
}
