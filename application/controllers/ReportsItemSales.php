<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ReportsItemSales extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->openAPI = $this->db->openAPI;
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        $this->file = 'C:/xampp7433/htdocs/app/sync';
        // error_reporting(E_ALL);  
        if (!$this->model->header($this->openAPI)) {
            // echo $this->model->error("Error auth");
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



    function fnFilter_0()
    {
        $itemsCategory = [];
        $startDate = $this->input->get('dateFrom');
        $endDate = $this->input->get('dateTo');

        $where_epoctime = "and t.storeOutlesId = '" . $this->input->get('storeOutletId') . "' 
            and (t.transactionDate  >=  " . strtotime($this->input->get('dateFrom')) . " and t.transactionDate < " . strtotime($this->input->get('dateTo')) . ")";
        $where = "and t.storeOutlesId = '" . $this->input->get('storeOutletId') . "' 
            and (cast(startDate as date) >= '$startDate' and cast(startDate as date) <= '$endDate' )  ";

        foreach ($this->model->sql("select id, name from cso1_itemCategory where presence = 1
           order by name asc") as $row) {
            $totalAmount = 0;
            $qty = 0;
            $itemDetail = $this->model->sql("SELECT t1.*, i.description , i.itemCategoryId 
                from (
                    select td.itemId, sum(td.price) as 'totalAmount', sum(td.qty) as 'qty'
                    from cso1_transaction as t
                    join cso1_transactionDetail as td on td.transactionId = t.id 
                    where t.presence = 1 and td.presence = 1 and td.void = 0 
                    $where    
                    group by td.itemId
                ) as t1
                join cso1_item as i on i.id = t1.itemId  
                where  i.itemCategoryId  = '" . $row['id'] . "' ");

            foreach ($itemDetail as $rec) {
                $totalAmount += $rec['totalAmount'];
                $qty += $rec['qty'];
            }


            $itemDetailEdit = [];
            foreach ($itemDetail as $rec) {
                array_push($itemDetailEdit, [
                    "itemId" => $rec['itemId'],
                    "totalAmount" => $rec['totalAmount'],
                    "qty" => $rec['qty'],
                    "description" => $rec['description'],
                    "itemCategoryId" => $rec['itemCategoryId'],
                    "percent" => number_format(($rec['qty'] / $qty) * 100, 1),
                ]);
            }



            $detailItem = array(
                "id" => $row['id'],
                "category" => $row['name'],
                "totalAmount" => $totalAmount,
                "qty" => $qty,
                "itemDetail" => $itemDetailEdit,
            );
            if (count($detailItem['itemDetail']) > 0) {
                array_push($itemsCategory, $detailItem);
            }
        }


        $q="SELECT t1.*, i.description , i.itemCategoryId, c.name
                from (
                    select td.itemId, sum(td.price) as 'totalAmount', sum(td.qty) as 'qty'
                    from cso1_transaction as t
                    join cso1_transactionDetail as td on td.transactionId = t.id 
                    where t.presence = 1 and td.presence = 1 and td.void = 0 
                    $where
                    group by td.itemId
                ) as t1
                join cso1_item as i on i.id = t1.itemId
                left join cso1_itemCategory as c on c.id = i.itemCategoryId 
                order by t1.totalAmount DESC 
            ";
        $data = array(
            "dateFrom" => $startDate,
            "dateTo" => $endDate,
            "itemsCategory" => $itemsCategory,
            "q" => $q,
            "items" => $this->model->sql($q),
        );
        echo json_encode($data);
    }
  function fnFilter()
    {
        $itemsCategory = [];
        $startDate = $this->input->get('dateFrom');
        $endDate = $this->input->get('dateTo');

        $where_epoctime = "and t.storeOutlesId = '" . $this->input->get('storeOutletId') . "' 
            and (t.transactionDate  >=  " . strtotime($this->input->get('dateFrom')) . " and t.transactionDate < " . strtotime($this->input->get('dateTo')) . ")";
        $where = "and t.storeOutlesId = '" . $this->input->get('storeOutletId') . "' 
            and (cast(startDate as date) >= '$startDate' and cast(startDate as date) <= '$endDate' )  ";

   

        $q="SELECT t1.* , i.description, '' as name, i.itemCategoryId  from 
            (
                SELECT    d.itemId,  
                sum(d.price - d.discount) as 'totalAmount',
                sum( d.qty ) as 'qty'
            from cso1_transaction as t 
            left join cso1_transactionDetail as d on d.transactionId = t.id
            where  t.presence = 1 and d.presence = 1 and d.void = 0 
                $where 
                group by d.itemId
            ) as t1
         left join cso1_item as i on i.id = t1.itemId
            ";
        $data = array(
            "dateFrom" => $startDate,
            "dateTo" => $endDate,
            "itemsCategory" => $itemsCategory,
      
            "items" => $this->model->sql($q),
        );
        echo json_encode($data);
    }


    function exportGold()
    {
        $this->load->model('transaction');


        $start_date = $this->input->get('startDate');
        $end_date =  $this->input->get('endDate');

        $date_array = [];

        $current_date = new DateTime($start_date);
        $end_date_obj = new DateTime($end_date);

        while ($current_date <= $end_date_obj) {
        	$date_array[] = $current_date->format('Y-m-d'); // Simpan tanggal dalam format Y-m-d
        	$current_date->modify('+1 day'); // Tambahkan 1 hari
        }

        $syncRest = [];
        foreach($date_array as $row){
            $syncRest[] = $this->transaction->sync($row);
        }

        $data = array(
            "dateFrom" => $start_date,
            "dateTo" => $end_date,
            "dateArray " =>  $date_array ,
            "syncRest" => $syncRest,
        );
        echo json_encode($data);


        //  echo $this->transaction->sync(date("Y-m-d"));
    }

}
