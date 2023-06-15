<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KioskBill extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->terminalId = "";
        $this->storeOutlesId = "";
        $this->priceLevel = 1;
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        date_default_timezone_set('Asia/Jakarta');

        if (!$this->model->checkDeviceObj()) {
            echo $this->model->error("Error auth");
            exit;
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

            $priceLevel = $this->model->priceLevel($uuid);

            $memberId =  $this->model->select("memberId", "cso1_kioskUuid", "presence = 1 AND status = 1  AND kioskUuid = '" . $uuid . "'");

            $discountMember = $memberId > 0 ? $this->model->sql("SELECT sum(discountAmount) as 'discountAmount', 
            sum(discountPercent) as 'discountPercent'
            from cso1_promotion where presence =1 and status =  1 and startDate >= " . time() . "  and endDate <= " . time())[0] : 0;


            $data = array(
                "kioskUuid" =>  $this->model->sql("SELECT * FROM cso1_kioskUuid  where presence = 1 and kioskUuid = '" . $uuid . "'") ?  $this->model->sql("SELECT * FROM cso1_kioskUuid  where presence = 1 and kioskUuid = '" . $uuid . "'")[0] : [],
                "member" =>  !$memberId ? [] : $this->model->sql("SELECT * FROM cso1_member  where presence = 1 and id = '" . $memberId . "'")[0],
                "items" =>  $this->model->sql("SELECT t1.*, i.shortDesc, i.description
                from 
                    (select count(k.itemId) as 'qty', k.itemId, sum(k.isSpecialPrice) as 'isSpecialPrice', k.barcode,
                    sum(k.price - k.discount) as 'totalPrice', sum(k.discount) as 'totalDiscount', k.price,
                    sum(k.isFreeItem) as 'isFreeItem', k.note
                    from cso1_kioskCart as k
                    where k.presence = 1 and k.kioskUuid =  '$uuid'
                    group by k.price, k.itemId, k.note, k.barcode ) as t1
                join cso1_item as i  on t1.itemId = i.id 
                order by i.description DESC
                "),
                "freeItemWaitingScan" => $this->model->sql("SELECT t1.*, i.description, i.shortDesc 
                        from (
                            select count(k.freeItemId) as 'qty', k.freeItemId
                            from cso1_kioskCartFreeItem	 as k
                            where k.kioskUuid = '$uuid'
                            and k.scanFree = 0 and k.status = 0 and k.presence = 1
                            group by k.freeItemId
                        ) as t1
                        join cso1_item as i on i.id = t1.freeItemId
                "),
                "freeItem" => $this->model->sql(" SELECT t1.* , i.description, i.shortDesc
                    from (
                    SELECT count(k.freeItemId) as 'qty', k.freeItemId ,  k.printOnBill
                    from cso1_kioskCartFreeItem  as k
                    where k.presence = 1 and k.scanFree = 1 and kioskUuid = '$uuid'
                    group by k.freeItemId,  k.printOnBill
                    ) as t1 join cso1_item as i	 on i.id = t1.freeItemId"),

                "freeItemLabel" =>  $this->model->sql("SELECT count(k.printOnBill) as 'printOnBill'
                from cso1_kioskCartFreeItem  as k
                where k.presence = 1 and printOnBill = 0 and  k.scanFree = 1 and kioskUuid = '$uuid'
                ")[0]['printOnBill'],
                "itemsList" => $this->model->sql("SELECT c.id, c.kioskUuid, c.itemId, c.price, c.discount, i.description, i.shortDesc
                FROM cso1_kioskCart as c
                join cso1_item as i on i.id = c.itemId
                WHERE c.presence =1 and c.kioskUuid = '$uuid' "),
                "summary" =>  $this->model->summary($uuid),
            );
        }
        echo json_encode($data);
    }
}
