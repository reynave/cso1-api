<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Spv_reset extends CI_Controller
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


    function index()
    {

        $data = array(
            "username" => $this->model->select("name", "cso1_user", "id= '" . $this->model->userId() . "' "),
            "overal" => $this->model->sql("SELECT sum(total) as 'itemSales', sum(discount + discountMember)  as 'discount' ,
                sum(total - (discount + discountMember)) as 'netSales', sum(ppn) as 'tax',
                sum(finalPrice) as 'finalPrice', count(id) as 'qty'
                from cso1_transaction  t
                where resetId is null and presence = 1")[0],

            "payment" => $this->model->sql("SELECT p.name, t1.*
                from (select paymentTypeId, count(paymentTypeId) as 'check', sum(finalPrice) as 'paid'
                from cso1_transaction
                where resetId is null and presence = 1
                group by paymentTypeId) as  t1
                join cso1_paymentType as p on p.id = t1.paymentTypeId"),

            "voidItems" => $this->model->sql("SELECT t1.qty, t1.itemId , i.description, i.barcode ,i.id
                from (
                select count( d.itemId ) as qty, d.itemId
                from cso1_transactionDetail as d
                join cso1_transaction as t on t.id = d.transactionId
                where d.void = 1 and t.resetId is null
                group by d.itemId) t1
                join cso1_item as i on i.id = t1.itemId"),

            "summary" => array(
                "void" => $this->model->sql("SELECT count(d.void) as 'total'
                    from cso1_transactionDetail as d
                    join cso1_transaction as t on t.id = d.transactionId
                    where  t.resetId is null and d.void = 1")[0]['total'],

                "transaction" => $this->model->sql("SELECT count(d.id) as 'total'
                    from cso1_transactionDetail as d
                    join cso1_transaction as t on t.id = d.transactionId
                    where  t.resetId is null and d.void = 0 and d.presence = 1")[0]['total'],

                "cart" => $this->model->sql("select count(id) as total from cso1_kioskCart")[0]['total'],

            ),

        );
        echo json_encode($data);
    }

    function updateTime()
    {

        $post = json_decode(file_get_contents('php://input'), true);
        if ($post) {


            $this->db->query("UPDATE cso1_reset
              SET openDate = DATEADD(HOUR, 7, DATEADD(SECOND, startDate, '1970-01-01 00:00:00')) ,
                closeDate = DATEADD(HOUR, 7, DATEADD(SECOND, endDate, '1970-01-01 00:00:00'))

                ");


            $insert1 = array(
                "error" => false,
            );
            echo json_encode($insert1);


        }
    }

    function fnSubmit()
    {

        $post = json_decode(file_get_contents('php://input'), true);
        if ($post) {
            $selectDate = date("Y-m-d");
            $whereDate = " CONVERT(date, t.endDate) = '$selectDate'";
            $data = array(
                "username" => $this->model->select("name", "cso1_user", "id= '" . $this->model->userId() . "' "),
                "overal" => $this->model->sql("SELECT sum(total) as 'itemSales', sum(discount + discountMember)  as 'discount' ,
                    sum(total - (discount + discountMember)) as 'netSales', sum(ppn) as 'tax',
                    sum(finalPrice) as 'finalPrice', count(id) as 'qty'
                    from cso1_transaction  t
                    where  $whereDate and presence = 1")[0],

                "voidItems" => $this->model->sql("SELECT t1.qty, t1.itemId , i.description, i.barcode ,i.id
                    from (
                    select count( d.itemId ) as qty, d.itemId
                    from cso1_transactionDetail as d
                    join cso1_transaction as t on t.id = d.transactionId
                    where d.void = 1 and  $whereDate
                    group by d.itemId) t1
                    join cso1_item as i on i.id = t1.itemId"),

                "summary" => array(
                    "void" => $this->model->sql("SELECT count(d.void) as 'total'
                        from cso1_transactionDetail as d
                        join cso1_transaction as t on t.id = d.transactionId
                        where  $whereDate and d.void = 1")[0]['total'],

                    "transaction" => $this->model->sql("SELECT count(d.id) as 'total'
                        from cso1_transactionDetail as d
                        join cso1_transaction as t on t.id = d.transactionId
                        where   $whereDate and d.void = 0 and d.presence = 1")[0]['total'],

                    "cart" => $this->model->sql("select count(id) as total from cso1_kioskCart")[0]['total'],
                ),
            );

            $reset = $this->model->sql("SELECT top 1 * 
            From cso1_reset where 
            closeDate is null  order by id DESC ");


            if (count($reset) == 0) {

                $rest = array(
                    "error" => true,
                    "note" => "not found ID "
                );
                echo json_encode($rest);
            } else {

                $id = $reset[0]['id'];
                $this->db->trans_start();

                $startDate = $this->model->sql("SELECT 
                        top 1 startDate, endDate
                        from cso1_transaction where
                          CONVERT(date, endDate) = '" . date('Y-m-d') . "' order by startDate ASC");

                $startDate = count($startDate) > 0 ? $startDate[0]['startDate'] : date("Y-m-d 00:00:00");
                
                $insert1 = array(

                    "storeOutlesId" => $this->model->select("storeOutlesId", "cso1_user", "id= '" . $this->model->userId() . "' "),
                    "totalNumberOfCheck" => (int) $data['overal']['qty'],
                    "summaryTotalVoid" => (int) $data['summary']['void'],
                    "summaryTotalTransaction" => (int) $data['summary']['transaction'],
                    "summaryTotalCart" => (int) $data['summary']['cart'],
                    "overalitemSales" => (int) $data['overal']['itemSales'], //
                    "overalDiscount" => (int) $data['overal']['discount'],
                    "overalNetSales" => (int) $data['overal']['netSales'],
                    "overalFinalPrice" => (int) $data['overal']['finalPrice'],
                    "overalTax" => (int) $data['overal']['tax'],

                    "endDate" => time(),
                    "closeDate" => date("Y-m-d H:i:s"),

                    "openDate" => $startDate,
                    "presence" => 1,
                    "inputDate" => time(),
                    "inputBy" => $this->model->userId(),
                    "note" => $post['note'],
                );
                $this->db->update("cso1_reset", $insert1, "id = '$id' ");

                $q = $this->model->sql("SELECT p.name, t1.*
                from (select t.paymentTypeId, count(t.paymentTypeId) as 'check', sum(t.finalPrice) as 'paid'
                from cso1_transaction as t
                where $whereDate  and t.presence = 1
                group by t.paymentTypeId) as  t1
                join cso1_paymentType as p on p.id = t1.paymentTypeId");

                foreach ($q as $row) {
                    $insert = array(
                        "resetId" => $id,
                        "paymentTypeId" => $row['paymentTypeId'],
                        "qty" => $row['check'],
                        "paidAmount" => $row['paid'],
                        "presence" => 1,
                        "inputDate" => time(),
                    );
                    $this->db->insert("cso1_resetPayment", $insert);
                }

                // Only update transactions with resetId is null and endDate is today
                $today = date('Y-m-d');
                $update = array(
                    "resetId" => $id,
                    "updateDate" => time(),
                );
                $this->db->update(
                    "cso1_transaction",
                    $update,
                    " CONVERT(date, endDate) = '$today'"
                );


                $this->db->delete('cso1_userAuth', array('token' => $post['token']));

                $this->db->trans_complete();
                if ($this->db->trans_status() !== FALSE) {
                    $rest = array(
                        "id" => $id,
                        "updateDate" => time(),
                    );

                    echo json_encode($rest);
                }

            }

        }
    }


    function fnSubmitLateReset()
    {

        $post = json_decode(file_get_contents('php://input'), true);
        if ($post) {
            $selectDate = $post['item']['date'];

            $whereDate = " CONVERT(date, t.endDate) = '$selectDate'";
            $data = array(
                "username" => $this->model->select("name", "cso1_user", "id= '" . $this->model->userId() . "' "),
                "overal" => $this->model->sql("SELECT sum(total) as 'itemSales', sum(discount + discountMember)  as 'discount' ,
                    sum(total - (discount + discountMember)) as 'netSales', sum(ppn) as 'tax',
                    sum(finalPrice) as 'finalPrice', count(id) as 'qty'
                    from cso1_transaction  t
                    where $whereDate and presence = 1")[0],

                "voidItems" => $this->model->sql("SELECT t1.qty, t1.itemId , i.description, i.barcode ,i.id
                    from (
                    select count( d.itemId ) as qty, d.itemId
                    from cso1_transactionDetail as d
                    join cso1_transaction as t on t.id = d.transactionId
                    where d.void = 1 and $whereDate
                    group by d.itemId) t1
                    join cso1_item as i on i.id = t1.itemId"),

                "summary" => array(
                    "void" => $this->model->sql("SELECT count(d.void) as 'total'
                        from cso1_transactionDetail as d
                        join cso1_transaction as t on t.id = d.transactionId
                        where  $whereDate and d.void = 1")[0]['total'],

                    "transaction" => $this->model->sql("SELECT count(d.id) as 'total'
                        from cso1_transactionDetail as d
                        join cso1_transaction as t on t.id = d.transactionId
                        where  $whereDate and d.void = 0 and d.presence = 1")[0]['total'],

                    "cart" => 0,
                ),
            );



            $id = $this->model->number("reset");
            $this->db->trans_start();


            $startDate = $this->model->sql("SELECT 
                        top 1 startDate, endDate
                        from cso1_transaction where
                          CONVERT(date, endDate) = '$selectDate' order by startDate ASC")[0]['startDate'];

            $endDate = $this->model->sql("SELECT 
                        top 1 startDate, endDate
                        from cso1_transaction where 
                         CONVERT(date, endDate) = '$selectDate' order by endDate DESC ")[0]['endDate'];


            $insert1 = array(
                "id" => $id,
                "storeOutlesId" => $this->model->select("storeOutlesId", "cso1_user", "id= '" . $this->model->userId() . "' "),
                "totalNumberOfCheck" => (int) $data['overal']['qty'],
                "summaryTotalVoid" => (int) $data['summary']['void'],
                "summaryTotalTransaction" => (int) $data['summary']['transaction'],
                "summaryTotalCart" => (int) $data['summary']['cart'],
                "overalitemSales" => (int) $data['overal']['itemSales'], //
                "overalDiscount" => (int) $data['overal']['discount'],
                "overalNetSales" => (int) $data['overal']['netSales'],
                "overalFinalPrice" => (int) $data['overal']['finalPrice'],
                "overalTax" => (int) $data['overal']['tax'],

                "endDate" => time(),
                "closeDate" => $endDate,
                "openDate" => $startDate,

                "presence" => 1,
                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
                "note" => 'RESET Unreset Transaction Data',
            );
            $this->db->insert("cso1_reset", $insert1);

            $q = $this->model->sql("SELECT p.name, t1.*
                from (select paymentTypeId, count(paymentTypeId) as 'check', sum(finalPrice) as 'paid'
                from cso1_transaction
                where   CONVERT(date, endDate) = '$selectDate' and presence = 1
                group by paymentTypeId) as  t1
                join cso1_paymentType as p on p.id = t1.paymentTypeId");

            foreach ($q as $row) {
                $insert = array(
                    "resetId" => $id,
                    "paymentTypeId" => $row['paymentTypeId'],
                    "qty" => $row['check'],
                    "paidAmount" => $row['paid'],
                    "presence" => 1,
                    "inputDate" => time(),
                );
                $this->db->insert("cso1_resetPayment", $insert);
            }

            // Only update transactions with resetId is null and endDate is today
            $today = $selectDate;
            $update = array(
                "resetId" => $id,
                "updateDate" => time(),
            );
            $this->db->update(
                "cso1_transaction",
                $update,
                "  CONVERT(date, endDate) = '$today'"
            );


            $this->db->trans_complete();
            if ($this->db->trans_status() !== FALSE) {
                $rest = array(
                    "id" => $id,
                    "updateDate" => time(),
                );

                echo json_encode($rest);
            }



        }
    }

    function fnReset()
    {

        $post = json_decode(file_get_contents('php://input'), true);
        if ($post) {
            $selectDate = $post['item']['date'];

            $whereDate = " CONVERT(date, t.endDate) = '$selectDate'";
            $data = array(
                "username" => $this->model->select("name", "cso1_user", "id= '" . $this->model->userId() . "' "),
                "overal" => $this->model->sql("SELECT sum(total) as 'itemSales', sum(discount + discountMember)  as 'discount' ,
                    sum(total - (discount + discountMember)) as 'netSales', sum(ppn) as 'tax',
                    sum(finalPrice) as 'finalPrice', count(id) as 'qty'
                    from cso1_transaction  t
                    where $whereDate and presence = 1")[0],

                "voidItems" => $this->model->sql("SELECT t1.qty, t1.itemId , i.description, i.barcode ,i.id
                    from (
                    select count( d.itemId ) as qty, d.itemId
                    from cso1_transactionDetail as d
                    join cso1_transaction as t on t.id = d.transactionId
                    where d.void = 1 and $whereDate
                    group by d.itemId) t1
                    join cso1_item as i on i.id = t1.itemId"),

                "summary" => array(
                    "void" => $this->model->sql("SELECT count(d.void) as 'total'
                        from cso1_transactionDetail as d
                        join cso1_transaction as t on t.id = d.transactionId
                        where  $whereDate and d.void = 1")[0]['total'],

                    "transaction" => $this->model->sql("SELECT count(d.id) as 'total'
                        from cso1_transactionDetail as d
                        join cso1_transaction as t on t.id = d.transactionId
                        where  $whereDate and d.void = 0 and d.presence = 1")[0]['total'],

                    "cart" => 0,
                ),
            );

            $startDate = $this->model->sql("SELECT 
                        top 1 startDate, endDate
                        from cso1_transaction where 
                        CONVERT(date, endDate) = '$selectDate' order by startDate ASC");

            $startDate = count($startDate) > 0 ? $startDate[0]['startDate'] : null;

            if ($startDate) {
                $id = $this->model->number("reset");
                $this->db->trans_start();


                $endDate = $this->model->sql("SELECT 
                        top 1 startDate, endDate
                        from cso1_transaction where 
                          CONVERT(date, endDate) = '$selectDate' order by endDate DESC ")[0]['endDate'];


                $insert1 = array(
                    "id" => $id,
                    "storeOutlesId" => $this->model->select("storeOutlesId", "cso1_user", "id= '" . $this->model->userId() . "' "),
                    "totalNumberOfCheck" => (int) $data['overal']['qty'],
                    "summaryTotalVoid" => (int) $data['summary']['void'],
                    "summaryTotalTransaction" => (int) $data['summary']['transaction'],
                    "summaryTotalCart" => (int) $data['summary']['cart'],
                    "overalitemSales" => (int) $data['overal']['itemSales'], //
                    "overalDiscount" => (int) $data['overal']['discount'],
                    "overalNetSales" => (int) $data['overal']['netSales'],
                    "overalFinalPrice" => (int) $data['overal']['finalPrice'],
                    "overalTax" => (int) $data['overal']['tax'],

                    "endDate" => time(),
                    "closeDate" => $endDate,
                    "openDate" => $startDate,

                    "presence" => 1,
                    "inputDate" => time(),
                    "inputBy" => $this->model->userId(),
                    "note" => 'RESET Unreset Transaction Data',
                );
                $this->db->insert("cso1_reset", $insert1);

                $q = $this->model->sql("SELECT p.name, t1.*
                from (select paymentTypeId, count(paymentTypeId) as 'check', sum(finalPrice) as 'paid'
                from cso1_transaction
                where CONVERT(date, endDate) = '$selectDate' AND presence = 1
                group by paymentTypeId) as  t1
                join cso1_paymentType as p on p.id = t1.paymentTypeId");

                foreach ($q as $row) {
                    $insert = array(
                        "resetId" => $id,
                        "paymentTypeId" => $row['paymentTypeId'],
                        "qty" => $row['check'],
                        "paidAmount" => $row['paid'],
                        "presence" => 1,
                        "inputDate" => time(),
                    );
                    $this->db->insert("cso1_resetPayment", $insert);
                }

                // Only update transactions with resetId is null and endDate is today
                $today = $selectDate;
                $update = array(
                    "resetId" => $id,
                    "updateDate" => time(),
                );
                $this->db->update(
                    "cso1_transaction",
                    $update,
                    "  CONVERT(date, endDate) = '$today'"
                );




                $this->db->trans_complete();
                if ($this->db->trans_status() !== FALSE) {
                    $rest = array(
                        "id" => $id,
                        "updateDate" => time(),
                    );

                    echo json_encode($rest);
                }

            } else {
                $rest = array(
                    "error" => "Failed to reset, no data",
                    "updateDate" => time(),
                );

                echo json_encode($rest);
            }

        }
    }


    function history()
    {
        $data = array(
            "items" => $this->model->sql("SELECT TOP 30 r.*, u.name as 'name'
                from cso1_reset as r
                left join cso1_user as u on r.inputBy = u.id
                where  r.presence = 1
                order by r.closeDate DESC"),
            "unresetItems" => $this->model->sql("SELECT 
                    count(id) as 'totalNumberOfCheck',   CONVERT(date, endDate) as 'date' 
                    from cso1_transaction 
                    where resetId is null  and  CONVERT(date, endDate) < CONVERT(date, GETDATE())
                    group by   CONVERT(date, endDate)
                    order by  CONVERT(date, endDate)  ASC;"),
        );
        echo json_encode($data);
    }


    function historyYear()
    {
        $data = array(
            "items" => $this->model->sql("select TOP 360 r.*, u.name as 'name'
            from cso1_reset as r
            left join cso1_user as u on r.inputBy = u.id

            order by r.startDate DESC"),
        );
        echo json_encode($data);
    }

    function print($id = "")
    {

        $itemGroup = $this->model->sql("SELECT terminalId, storeOutlesId,
            count(id) as 'totalNumberOfCheck',

            sum(total) as 'overalitemSales',
            sum(discount + discountMember) as 'overalDiscount',
            sum(ppn) as 'overalTax',
            sum(total - (discount + discountMember)) as 'overalNetSales',
            sum(finalPrice) as 'overalFinalPrice'

            from cso1_transaction
            where resetId = '$id' and presence = 1
            group by terminalId, storeOutlesId
        ");
        $i = 0;
        if (count($itemGroup) > 0) {


            foreach ($itemGroup as $row) {
                $itemGroup[$i]['summaryTotalTransaction'] = $this->model->sql("SELECT  sum(d.qty) as 'id'
                from cso1_transaction as t
                left join cso1_transactionDetail as d ON d.transactionId = t.id
                where t.resetId = '$id' and   t.terminalId = '" . $row['terminalId'] . "' and d.void = 0 and  d.presence = 1
            ")[0]['id'];

                $itemGroup[$i]['summaryTotalVoid'] = $this->model->sql("SELECT count(d.id) as 'id'
                from cso1_transaction as t
                left join cso1_transactionDetail as d ON d.transactionId = t.id
                where t.resetId = '$id' and   t.terminalId = '" . $row['terminalId'] . "' and d.void = 1
            ")[0]['id'];

                $itemGroup[$i]['payments'] = $this->model->sql("SELECT p.name, p.label, b.* from cso1_paymentType as p
                join (
                    select t.paymentTypeId, count(t.id) as 'qty', sum(t.finalPrice) as 'paidAmount'
                    from cso1_transaction  as t
                    where t.resetId =  '$id' and   t.terminalId = '" . $row['terminalId'] . "'
                    group by t.paymentTypeId
                ) as b on b.paymentTypeId = p.id
            ");
                $i++;
            }
        }
        $items2 = $this->model->sql("SELECT r.*, u.name as 'name'
                from cso1_reset as r
                left join cso1_user as u on r.inputBy = u.id
                where  r.presence = 1 and r.id = '$id'
                order by r.id DESC");

        $data = array(
            "itemGroup" => $itemGroup,
            "items" => count($items2) > 0 ? $items2[0] : [],

            "payments" => $this->model->sql("SELECT p.* , t.name as 'paymentName'
                from cso1_resetPayment as p
                join cso1_paymentType as t on t.id = p.paymentTypeId
                where p.resetId = '$id' and p.presence = 1
                order by t.name asc "),
        );



        $items2 = $this->model->sql("SELECT 
            count(id) as 'totalNumberOfCheck', 
            sum(total) as 'overalitemSales',
            sum(discount + discountMember) as 'overalDiscount',
            sum(ppn) as 'overalTax',
            sum(total - (discount + discountMember)) as 'overalNetSales',
            sum(finalPrice) as 'overalFinalPrice' 
            from cso1_transaction
            where resetId = '$id' and presence = 1 
            group by resetId 
        ");



        $update = array(

            "totalNumberOfCheck" => count($items2) > 0 ? $items2[0]['totalNumberOfCheck'] : 0,
            "summaryTotalVoid" => count($items2) > 0 ? $items2[0]['totalNumberOfCheck'] : 0,
            "summaryTotalTransaction" => count($items2) > 0 ? $items2[0]['totalNumberOfCheck'] : 0,
            "summaryTotalCart" => count($items2) > 0 ? $items2[0]['totalNumberOfCheck'] : 0,
            "overalitemSales" => count($items2) > 0 ? $items2[0]['overalitemSales'] : 0,
            "overalDiscount" => count($items2) > 0 ? $items2[0]['overalDiscount'] : 0,
            "overalNetSales" => count($items2) > 0 ? $items2[0]['overalNetSales'] : 0,
            "overalFinalPrice" => count($items2) > 0 ? $items2[0]['overalFinalPrice'] : 0,
            "overalTax" => count($items2) > 0 ? $items2[0]['overalTax'] : 0,


        );
        $this->db->update("cso1_reset", $update, "id = '$id' ");


        echo json_encode($data);
    }



    function delete()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        if ($post) {
            $update = array(
                "presence" => 0,
                "updateDate" => date("Y-m-d H:i:s"),
                "updateBy" => $this->model->userId(),

            );
            $this->db->update("cso1_reset", $update, " id = '" . $post['item']['id'] . "' ");



            echo json_encode($post);


        }
    }

    function where_newReset($dates, $t = '')
    {
        $date = explode('-', $dates);
        $whereDate = "
        ( Year( DATEADD(SECOND,  " . $t . "transactionDate, '1970-01-01 00:00:00')) = " . $date[0] . " and
        month( DATEADD(SECOND, " . $t . "transactionDate, '1970-01-01 00:00:00')) = " . $date[1] . "  and
        day( DATEADD(SECOND, " . $t . "transactionDate, '1970-01-01 00:00:00')) = " . $date[2] . " )
     ";


        return $whereDate;
    }
    function newReset()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        if ($post) {
            $date = $post['date'];
            $whereDate = $this->where_newReset($date, 't.');
            $data = array(
                "w" => $whereDate,
                "username" => $this->model->select("name", "cso1_user", "id= '" . $this->model->userId() . "' "),
                "overal" => $this->model->sql("SELECT sum(total) as 'itemSales', sum(discount + discountMember)  as 'discount' ,
                    sum(total - (discount + discountMember)) as 'netSales', sum(ppn) as 'tax',
                    sum(finalPrice) as 'finalPrice', count(id) as 'qty'
                    from cso1_transaction  t
                    where $whereDate and presence = 1")[0],

                "voidItems" => $this->model->sql("SELECT t1.qty, t1.itemId , i.description, i.barcode ,i.id
                    from (
                    select count( d.itemId ) as qty, d.itemId
                    from cso1_transactionDetail as d
                    join cso1_transaction as t on t.id = d.transactionId
                    where d.void = 1 and $whereDate
                    group by d.itemId) t1
                    join cso1_item as i on i.id = t1.itemId"),

                "summary" => array(
                    "void" => $this->model->sql("SELECT count(d.void) as 'total'
                        from cso1_transactionDetail as d
                        join cso1_transaction as t on t.id = d.transactionId
                        where  $whereDate and d.void = 1")[0]['total'],

                    "transaction" => $this->model->sql("SELECT count(d.id) as 'total'
                        from cso1_transactionDetail as d
                        join cso1_transaction as t on t.id = d.transactionId
                        where  $whereDate and d.void = 0 and d.presence = 1")[0]['total'],

                    "cart" => $this->model->sql("select count(id) as total from cso1_kioskCart")[0]['total'],
                ),
            );
            $this->db->trans_start();
            $id = $this->model->number("reset");

            $whereDate2 = $this->where_newReset($date, '');
            $startDate = $this->model->sql(" 
                select top 1  id,  transactionDate,
                DATEADD(HOUR, 7, DATEADD(SECOND, transactionDate, '1970-01-01 00:00:00'))   AS 'transactionDateTime', 
                resetId
                from cso1_transaction
                where 
                    $whereDate2 
                order by id  ASC
            ");
            $endDate = $this->model->sql(" 
                select top 1  id,  transactionDate,
                DATEADD(HOUR, 7, DATEADD(SECOND, transactionDate, '1970-01-01 00:00:00'))   AS 'transactionDateTime', 
                resetId
                from cso1_transaction
                where 
                    $whereDate2 
                order by id  DESC
            ");

            $insert1 = array(
                "id" => $id,
                "storeOutlesId" => $this->model->select("storeOutlesId", "cso1_user", "id= '" . $this->model->userId() . "' "),
                "totalNumberOfCheck" => $data['overal']['qty'],
                "summaryTotalVoid" => $data['summary']['void'],
                "summaryTotalTransaction" => $data['summary']['transaction'],
                "summaryTotalCart" => $data['summary']['cart'],
                "overalitemSales" => $data['overal']['itemSales'], //
                "overalDiscount" => $data['overal']['discount'],
                "overalNetSales" => $data['overal']['netSales'],
                "overalFinalPrice" => $data['overal']['finalPrice'],
                "overalTax" => $data['overal']['tax'],

                "openDate" => $startDate[0]['transactionDateTime'],
                "closeDate" => $endDate[0]['transactionDateTime'],

                "startDate" => $startDate[0]['transactionDate'],
                "endDate" => $endDate[0]['transactionDate'],

                "presence" => 1,

                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
                "note" => 'Create from  Rev1',
            );
            $this->db->insert("cso1_reset", $insert1);

            $whereDate2 = $this->where_newReset($date, '');
            $q = $this->model->sql("SELECT p.name, t1.*
                from (select paymentTypeId, count(paymentTypeId) as 'check', sum(finalPrice) as 'paid'
                from cso1_transaction
                where $whereDate2 and presence = 1
                group by paymentTypeId) as  t1
                join cso1_paymentType as p on p.id = t1.paymentTypeId");

            foreach ($q as $row) {
                $insert = array(
                    "resetId" => $id,
                    "paymentTypeId" => $row['paymentTypeId'],
                    "qty" => $row['check'],
                    "paidAmount" => $row['paid'],
                    "presence" => 1,
                    "inputDate" => time(),
                );
                $this->db->insert("cso1_resetPayment", $insert);
            }

            $update = array(
                "resetId" => $id,
                "updateDate" => time(),
            );
            $this->db->update("cso1_transaction", $update, $whereDate2);


            $this->db->trans_complete();
            if ($this->db->trans_status() !== FALSE) {
                echo json_encode($data);
            } else {
                $err = array(
                    "error" => true,
                );
                echo json_encode($err);
            }

        }
    }


    function startCheck()
    {
        $data = $this->model->sql("SELECT top 1 * 
            From cso1_reset where 
            closeDate is null  order by id DESC");

        $err = array(
            "error" => true,
            "item" => $data,
        );
        echo json_encode($err);

    }

    function onStart()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        if ($post) {

            $data = $this->model->sql("SELECT  id,  DATEADD(SECOND, startDate, '1970-01-01 00:00:00') AS startDate
                FROM cso1_reset
                WHERE endDate is null
                ORDER BY id desc 
            ");

            if (count($data) > 0) {

                $err = array(
                    "error" => false,
                    "data" => $data,
                );
                echo json_encode($err);
            } else {



                $this->db->trans_start();
                $id = $this->model->number("reset");
                $insert = array(
                    "id" => $id,
                    //  "storeOutlesId" => $this->model->select("storeOutlesId", "cso1_user", "id= '" . $this->model->userId() . "' "),
                    "startDate" => $post['time'],

                    "openDate" => $post['startDate'] . " " . date("H:i:s"),
                    "presence" => 1,
                    "inputDate" => time(),
                    "inputBy" => $this->model->userId(),
                );
                $this->db->insert("cso1_reset", $insert);

                $data = $this->model->sql("SELECT  id,  DATEADD(SECOND, startDate, '1970-01-01 00:00:00') AS startDate
                        FROM cso1_reset
                        WHERE endDate is null
                        ORDER BY id desc 
                    ");
                $err = array(
                    "error" => false,
                    "data" => $data,
                );
                $this->db->trans_complete();
                if ($this->db->trans_status() !== FALSE) {

                    echo json_encode($err);
                } else {
                    $err = array(
                        "error" => true,
                    );
                    echo json_encode($err);
                }

            }
        }
    }
}
