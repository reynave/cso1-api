<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Spv_globalSetting extends CI_Controller
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
            "ipEcr" => $this->model->select("value", "cso1_account", "id= '9001' "),
            "ipSocket" => $this->model->select("value", "cso1_account", "id= '9002' "),
        );
        echo json_encode($data);
    }



    function onSubmit()
    {
        $post = json_decode(file_get_contents('php://input'), true);
        $data = array(
            "error" => true,
        );

        if ($post) {
            if (!$this->model->select("name", "cso1_account", "id= '9001' ")) { 
                $insert = array(
                    "id" => 9001,
                    "name" => 'IP Server for ECR ETH',
                    "value" => $post['ipEcr'],
                    "updateDate" => time(),
                );
                $this->db->insert("cso1_account", $insert);

            } else { 
                $update = array(
                    "value" => $post['ipEcr'],
                    "updateDate" => time(),
                );
                $this->db->update("cso1_account", $update, "id = 9001 ");
            }


            if (!$this->model->select("name", "cso1_account", "id= '9002' ")) { 
                $insert = array(
                    "id" => 9002,
                    "name" => 'IP Scoket',
                    "value" => $post['ipSocket'],
                    "updateDate" => time(),
                );
                $this->db->insert("cso1_account", $insert);

            } else { 
                $update = array(
                    "value" => $post['ipSocket'],
                    "updateDate" => time(),
                );
                $this->db->update("cso1_account", $update, "id = 9002 ");
            }


            $data = array(
                "error" => false,
                "post" => $post,
            );

        }
        echo json_encode($data);

    }

    function history()
    {
        $data = array(
            "items" => $this->model->sql("select TOP 30 r.*, u.name as 'name'
            from cso1_reset as r
            join cso1_user as u on r.inputBy = u.id
            where  r.presence = 1
            order by r.id DESC"),
        );
        echo json_encode($data);
    }

    function print($id = "")
    {

        $items = $this->model->sql("SELECT terminalId, storeOutlesId,
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
        foreach ($items as $row) {
            $items[$i]['summaryTotalTransaction'] = $this->model->sql("SELECT count(d.id) as 'id'
                from cso1_transaction as t
                left join cso1_transactionDetail as d ON d.transactionId = t.id
                where t.resetId = '$id' and   t.terminalId = '" . $row['terminalId'] . "' and d.void = 0 and  d.presence = 1
            ")[0]['id'];

            $items[$i]['summaryTotalVoid'] = $this->model->sql("SELECT count(d.id) as 'id'
                from cso1_transaction as t
                left join cso1_transactionDetail as d ON d.transactionId = t.id
                where t.resetId = '$id' and   t.terminalId = '" . $row['terminalId'] . "' and d.void = 1
            ")[0]['id'];

            $items[$i]['payments'] = $this->model->sql("SELECT p.name, p.label, b.* from cso1_paymentType as p
                join (
                    select t.paymentTypeId, count(t.id) as 'qty', sum(t.finalPrice) as 'paidAmount'
                    from cso1_transaction  as t
                    where t.resetId =  '$id' and   t.terminalId = '" . $row['terminalId'] . "'
                    group by t.paymentTypeId
                ) as b on b.paymentTypeId = p.id
            ");
            $i++;
        }


        $data = array(
            "itemGroup" => $items,
            "items" => $this->model->sql("SELECT r.*, u.name as 'name'
                from cso1_reset as r
                join cso1_user as u on r.inputBy = u.id
                where  r.presence = 1 and r.id = '$id'
                order by r.id DESC")[0],

            "payments" => $this->model->sql("SELECT p.* , t.name as 'paymentName'
                from cso1_resetPayment as p
                join cso1_paymentType as t on t.id = p.paymentTypeId
                where p.resetId = '$id' and p.presence = 1
                order by t.name asc "),
        );
        echo json_encode($data);
    }

}
