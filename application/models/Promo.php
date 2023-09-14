<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Promo extends CI_Model
{

    function __construct()
    {
        /* Call the Model constructor */
        $this->prefixDB = 'cso1_';
        parent::__construct();
    }

    

    function select($field, $table, $where = "")
    {
        $query = "SELECT " . $field . " FROM " . $table . " WHERE " . $where;
        $query = $this->db->query($query);
        if ($query->row()) {
            $row = $query->row();
            return  $row->$field;
        }
    }
    function getId($itemId = "", $qty = 0)
    {
        $today = date('D', time());
        $q = "SELECT  i.promotionId, i.id AS 'promotionItemId', i.qtyFrom, i.qtyTo, p.typeOfPromotion,
        FROM_UNIXTIME(p.startDate) AS 'startDate', FROM_UNIXTIME(p.endDate) AS 'endDate', NOW() as 'nowDate',  p.$today as '$today' 
        FROM cso1_promotion_item AS i
        LEFT JOIN cso1_promotion AS p ON p.id = i.promotionId
        WHERE i.itemId = '$itemId' AND  p.typeOfPromotion = 1 
        AND (p.startDate < unix_timestamp(now()) AND unix_timestamp(NOW()) <  p.endDate)
        AND ( i.qtyFrom <= $qty AND i.qtyTo >= $qty)
        AND p.$today = 1 AND p.`status` = 1 AND p.presence = 1 AND i.presence = 1 AND i.`status` = 1"; 
        
        $query = $this->db->query( $q );
        $items = $query->row_array();
 
        $data = array(
            "error" => count($items) > 0 ? false : true,
            "promo" => $items, 
            "q" =>  $q, 
        );

        return $data;
    }
    function getPromo($itemId, $qty = 0)
    {
        $promo = self::getId($itemId, $qty);
        $i = 1;
        if ($promo['error'] == false) {

            $promotionItemId = $promo['promo'][0]['promotionItemId'];
            $typeOfPromotion = $promo['promo'][0]['typeOfPromotion'];

            $isSpecialPrice = (int) self::select("specialPrice", "cso1_promotion_item", "id=$promotionItemId") > 0 ? 1 : 0;
            if ($isSpecialPrice == 1) {
                $newPrice = (int) self::select("specialPrice", "cso1_promotion_item", "id=$promotionItemId");
            } else {
                $discountPrice = self::select("discountPrice", "cso1_promotion_item", "id=$promotionItemId");

                $discx = [
                    "disc1" => self::select("disc1", "cso1_promotion_item", "id=$promotionItemId"),
                    "disc2" => self::select("disc2", "cso1_promotion_item", "id=$promotionItemId"),
                    "disc3" => self::select("disc3", "cso1_promotion_item", "id=$promotionItemId"),
                ];

                $price = self::select("price$i", "cso1_item", "id=$itemId");


                $disc1 = $discx['disc1'] / 100;
                $disc2 = $discx['disc2'] / 100;
                $disc3 = $discx['disc3'] / 100;

                $discLevel1 = $price * $disc1;
                $discLevel2 = ($price - $discLevel1) * $disc2;
                $discLevel3 = ($price - $discLevel1 - $discLevel2) * $disc3;

                $discLevel = $discLevel1 + $discLevel2 + $discLevel3;


                $newPrice = $price - ($discountPrice + $discLevel);

            }
            $data = array(
                "itemId" => $itemId,
                "typeOfPromotion" => $typeOfPromotion,
                "promotionId" => $promo['promo'][0]['promotionId'],
                "promotionItemId" => $promotionItemId,  
                "newPrice" => (int) $newPrice,
                "isSpecialPrice" => $isSpecialPrice > 0 ? 1 : 0,
                "discount" => $isSpecialPrice == 1 ? 0 : $discountPrice + $discLevel,
                "promoDetail" => $promo,
            );


        } else {
            $data = array(
                "itemid" => null,
                "typeOfPromotion" => 0,
                "promotionId" => 0,
                "promotionItemId" => 0,
                "newPrice" => 0,
                "isSpecialPrice" => 0,
                "discount" => 0,
            );
        }
        return $data;
    }
 
}
