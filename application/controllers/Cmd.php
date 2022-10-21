<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cmd extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // CALL cmd : php index.php Cmd
    }
    function index()
    {
        echo "ver 1.0.3";
    }

    function masterItem()
    {
        /**
         * HOW TO CALL :
         * php index.php Cmd masterItem
         */
        $error = false;
        // $this->db->trans_start();
        $handle = fopen("./uploads/items/item.txt", "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $ar =  explode("|", $line);
                // Action code  or $ar[4]
                // 1 = New insert / update  
                // 2 = Deletion
                if ($ar[4] == 2) {
                    $update = array(
                        "status" => 0,
                        "presence" => 0,
                        "updateDate" => time(),
                    );
                    $this->db->update("cso1_item", $update, " id = '" . $ar[0] . "'");
                } else {
                    $id  = $this->model->select("id", "cso1_item", " id = '" . $ar[0] . "' ");
                    if ($id) {
                        $update = array( 
                            "description" => $ar[1],
                            "shortDesc" =>  $ar[1],
                            "price1" =>  $ar[2],
                            "price2" =>  $ar[2],
                            "price3" =>  $ar[2],
                            "price4" =>  $ar[2],
                            "price5" =>  $ar[2],
                            "price6" =>  $ar[2],
                            "price7" =>  $ar[2],
                            "price8" =>  $ar[2],
                            "price9" =>  $ar[2],
                            "price10" =>  $ar[2],

                            "priceFlag" =>  (int)$ar[3],
                            "ppnFlag" =>  (int)$ar[5],
                            "status" => 1,
                            "presence" => 1,
                            "updateDate" => time(),
                        );
                        $this->db->update("cso1_item", $update, "id='" . $id . "' ");
                        echo "UDPDATE " . $ar[0] . "\n";
                        $itemBarcodeId = $this->model->select("id","cso1_itemBarcode","itemId = '$id'");
                        if($itemBarcodeId ){
                            $update = array( 
                                "barcode" =>  $id, 
                                "status" => 1,
                                "presence" => 1,
                                "updateDate" => time(),
                            );
                            $this->db->update("cso1_itemBarcode", $update, "itemId='" . $id . "' ");
                            echo "UDPDATE BARCODE" . $id . "\n";
                        }else{ 
                            $insert = array( 
                                "itemId" => $id,
                                "barcode" => $ar[0],  
                                "presence" => 1,
                                "inputDate" => time(),
                            );
                            $this->db->insert("cso1_itemBarcode", $insert);
                            echo "INSERT BARCODE " . $id . "\n";
                        }
                       
 
                      
                    } else {
                        $insert = array(
                            "id" => $ar[0],
                            "barcode" => $ar[0], 
                            "description" => $ar[1],
                            "shortDesc" =>  $ar[1],

                            "price1" =>  $ar[2],
                            "price2" =>  $ar[2],
                            "price3" =>  $ar[2],
                            "price4" =>  $ar[2],
                            "price5" =>  $ar[2],
                            "price6" =>  $ar[2],
                            "price7" =>  $ar[2],
                            "price8" =>  $ar[2],
                            "price9" =>  $ar[2],
                            "price10" =>  $ar[2],

                            "priceFlag" =>  (int)$ar[3],
                            "ppnFlag" =>  (int)$ar[5],
                            "status" => 1,
                            "presence" => 1,
                            "inputDate" => time(),
                        );
                        $this->db->insert("cso1_item", $insert);
 
                        $insert = array( 
                            "itemId" => $id,
                            "barcode" => $ar[0],  
                            "presence" => 1,
                            "inputDate" => time(),
                        );
                        $this->db->insert("cso1_itemBarcode", $insert);
                        echo "INSERT " . $ar[0] . "\n";
                    }
                }
            }

            fclose($handle);
        }
    }

    function promo($name = "")
    {
        $error = false;
        // $this->db->trans_start();
        $handle = fopen("./uploads/promo/" . $name, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $ar =  explode("|", $line);
                $update = array(
                    "promoCode" => $ar[0],
                    "barcode" => $ar[1],
                    "fixPriceHSP" =>  $ar[2],
                    "price1" =>  $ar[3],
                    "discMember1" => $ar[4],
                    "discMember2" => $ar[5],
                    "discMember3" => $ar[6],
                    "discMemberRupiah" => $ar[7],
                    "discNormal1" => $ar[8],
                    "discNormal2" => $ar[9],
                    "discNormal3" => $ar[10],
                    "discNormalRupiah" => $ar[11],
                    "minQty" => $ar[12],
                    "maxQty" => $ar[13],
                    "price1" => $ar[14],
                    "price2" => $ar[15],
                    "minQty1" => $ar[16],
                    "maxQty1" => $ar[17],
                    "minQty2" => $ar[18],
                    "maxQty2" => $ar[19],
                    "endDate" => $ar[20],
                    "startTime" => $ar[21],
                    "endTime"  => $ar[22],
                );
                $this->db->insert("gold_promo", $update);
                print_r($update);
            }

            $update = array(
                "status" => 1,
            );
            $this->db->update("cso1_syncLog", $update, "module = 'promo' and fileName= '" . $name . "'");

            fclose($handle);
        }
        // $this->db->trans_complete();
        // if ($this->db->trans_status() === FALSE)
        // {
        //         $error = true; 
        //  } 

    }

    function member()
    {
        # php index.php Cmd member
        error_reporting(E_ERROR | E_PARSE);
        $ch = curl_init();
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',

        );
        curl_setopt($ch, CURLOPT_URL, "http://103.169.238.219:8080/uploads/android/getmember.php");
        //curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $body = '{}';

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Timeout in seconds
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        $txt = curl_exec($ch);
         echo $txt;
        $saveFile = "member" . date("YmdHis") . ".txt";
        $myfile = fopen("./uploads/member/$saveFile", "w") or die("Unable to open file!");
        fwrite($myfile, $txt);
        fclose($myfile);
        echo "\n" . 'SAVE FILE DONE' . "\n";

        $handle = fopen("./uploads/member/$saveFile", "r");
        
        

        if ($handle) {
            echo  "\n" . 'handle run' . "\n";
            while (($line = fgets($handle)) !== false) {
                $ar =  explode("|", $line);

                $id  =  $this->model->select("id", "cso1_member", " id = '" . str_replace("\r\n", "", $ar[1]) . "'  ");

                if ($id) {
                    $update = array(
                        "firstName" =>  $ar[0],
                        "status" => 1,
                        "presence" => 1,
                        "updateDate" => time(),
                    );
                    if (is_int((int)$id)) {
                        $this->db->update("cso1_member", $update, "id='" . $id . "' ");
                        echo "UDPDATE  " .$id."|".$ar[0] . "\n";
                    }else{
                        echo "UDPDATE  ERROR, ID is not INT" . $ar[0] . "\n";
                    }
                } else {
                    $newId = str_replace("\r\n", "", $ar[1]);
                    $insert = array(
                        "id" => $newId ,
                        "firstName" =>  $ar[0],
                        "status" => 1,
                        "presence" => 1,
                        "inputDate" => time(),
                    );
                    if (is_int((int)$id)) {
                        $this->db->insert("cso1_member", $insert);
                        echo "INSERT " . $newId .'|'. $ar[0] . "\n";
                    }else{
                        echo "INSERT ERROR, ID is not INT " . $ar[0] . "\n";
                    }
                }
            }

            fclose($handle);
        }else{
            echo  "\n" . 'handle ERROR' . "\n";
        }
    }

    function memberSave()
    {
        # php index.php Cmd member
        error_reporting(E_ERROR | E_PARSE);
        $ch = curl_init();
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',

        );
        curl_setopt($ch, CURLOPT_URL, "http://103.169.238.219:8080/uploads/android/getmember.php");
        //curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $body = '{}';

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Timeout in seconds
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        $txt = curl_exec($ch);
        // echo $txt;
        $date = "member" . date("YmdHis");
        $myfile = fopen("./uploads/member/$date.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $txt);
        fclose($myfile);
        echo "\n" . 'SAVE FILE DONE ' . $date . "\n";
    }

    function memberToDatabase()
    {
    }

    function saveTxt()
    {
        $myfile = fopen("./uploads/member/member.txt", "w") or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($myfile, $txt);
        $txt = "Jane Doe\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }
}
