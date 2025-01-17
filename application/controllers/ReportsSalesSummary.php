<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ReportsSalesSummary extends CI_Controller
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
            //  echo $this->model->error("Error auth");
            //  exit;
        }
    }
    // START :: ITEMS
    function storeBranches()
    {
        $data = array(
            "storeOutles" => $this->input->get('storeBranchesId') ? $this->model->sql("SELECT id, name 
            from cso1_storeOutles where storeBranchesId = '" . $this->input->get('storeBranchesId') . "' and presence = 1 order by name ASC") : [],

            "storeBranches" => $this->model->sql("SELECT id, name from cso1_storeBranches where presence = 1 order by name ASC"),
            "dateFrom" => date('Y-m-d'),
            "dateTo" => date('Y-m-d'),
        );
        echo json_encode($data);
    }

    function storeOutles($storeBranchesId = "")
    {
        $data = array(
            "storeOutles" => $this->model->sql("SELECT id, name from cso1_storeOutles where storeBranchesId = '$storeBranchesId' and  presence = 1 order by name ASC"),
        );
        echo json_encode($data);
    }


    function fnFilter()
    {
        $startDate = $this->input->get('dateFrom');
        $endDate = $this->input->get('dateTo');
        //? storeBranchesId=11&storeOutletId=&dateFrom=2022-09-14&dateTo=2022-09-13 
        $q = "SELECT t1.*, i.description , i.itemCategoryId, c.name
        from (
            select td.itemId, sum(td.price) as 'totalAmount', count(td.itemId) as 'qty'
            from cso1_transaction as t
            join cso1_transactionDetail as td on td.transactionId = t.id 
            where t.presence = 1 and  td.void = 1 and t.storeOutlesId = '" . $this->input->get('storeOutletId') . "' 
            and (cast(startDate as date) >= '$startDate' and cast(startDate as date) <= '$endDate' )   
                group by td.itemId
            ) as t1
            join cso1_item as i on i.id = t1.itemId
            left join cso1_itemCategory as c on c.id = i.itemCategoryId 
        ";
       
        $dateFrom = strtotime($this->input->get('dateFrom') . ' -0 day');
        $dateTo = strtotime($this->input->get('dateTo') . " 23:59:55");
        $paymentSql = "SELECT t1.*, p.name
        from (
        SELECT paymentTypeId, count(paymentTypeId) as 'qty',  sum(finalPrice) as 'totalAmount'
        from cso1_transaction where 
       (cast(startDate as date) >= '$startDate' and cast(startDate as date) <= '$endDate' )   
        and storeOutlesId = '" . $this->input->get('storeOutletId') . "' 
        and presence = 1 
        group by paymentTypeId) as t1
        join cso1_paymentType as p on p.id = t1.paymentTypeId";

        $data = array(
            "dateFrom" => $startDate,
          //  "dateFromWIB" => date("Y-m-d H:i:s", $dateFrom),

            "dateTo" => $endDate,
           // "dateToWIB" => date("Y-m-d H:i:s", $dateTo),

            "overall" => $this->model->sql("SELECT count(id) as 'totalBill', sum(discount) as 'discount', sum(total-ppn) as 'netSales',
            sum(ppn) as 'tax', sum(finalPrice) as 'grossSales'
            from cso1_transaction where 
            (cast(startDate as date) >= '$startDate' and cast(startDate as date) <= '$endDate' )   
            and storeOutlesId = '" . $this->input->get('storeOutletId') . "'  
            and presence = 1")[0],

            "itemSales" => $this->model->sql("SELECT count(d.itemId) as 'itemSales' from cso1_transaction as a
            join cso1_transactionDetail as d on d.transactionId = a.id
            where  
              (cast(a.startDate as date) >= '$startDate' and cast(a.startDate as date) <= '$endDate' )   
            and a.storeOutlesId =  '" . $this->input->get('storeOutletId') . "'    and d.presence = 1 and d.void = 0
            and a.presence = 1;")[0]['itemSales'],

            "payment" => $this->model->sql($paymentSql),
           // "paymentSql" => $paymentSql,

            "tax" => $this->model->sql("SELECT t1.*, x.name from 
                    (
                        select  i.itemTaxId, sum(td.price) as 'sales', count(td.itemId) as 'qty' from cso1_transaction as t
                        join cso1_transactionDetail as td on td.transactionId = t.id
                        join cso1_item as i on i.id = td.itemId
                        where t.presence = 1 and td.presence= 1  
                        and (cast(t.startDate as date) >= '$startDate' and cast(t.startDate as date) <= '$endDate' )  
                       
                       group by i.itemTaxId
                    ) as t1
                left join cso1_taxCode as x on x.id = t1.itemTaxId"),

            "void" => $this->model->sql($q),

            "discount" => $this->model->sql("SELECT t1.* , p.description, p.endDate from (
                select  td.promotionId, count( td.itemId) as qty, sum(td.price) as price
                from cso1_transaction as t
                join cso1_transactionDetail as td on td.transactionId = t.id
                where t.presence = 1 and td.presence = 1 and  
                 (cast(t.startDate as date) >= '$startDate' and cast(t.startDate as date) <= '$endDate' ) 
                and td.promotionId is not null
                group by td.promotionId) as t1
                join cso1_promotion as p on p.id = t1.promotionId "),
        );

        echo json_encode($data);
    }
}
