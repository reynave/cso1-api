<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Transaction extends CI_Model
{

    function __construct()
    {
        /* Call the Model constructor */
        parent::__construct();
    }
    function sync($a = "")
    {
        if ($a == '') {
            $date = date("Y-m-d");
        } else {
            $date = date($a);
        }
        echo "\n";
        echo self::postraheader($date) . "\n";
        echo self::postrasalesitem($date) . "\n";
        echo self::postratender($date) . "\n";
    }

    function postraheader($date)
    {
        $ymd = date("ymd", strtotime($date));
        $year = date("Y", strtotime($date));
        $month = date("m", strtotime($date));
        $day = date("d", strtotime($date));

        // $fileName = "POSTRAHEADER$ymd.txt";
        $fileName = "SCOTRAHEADER$ymd.txt";

        $myfile = fopen("../sync/transaction/$fileName", "w") or die("Unable to open file!");
        $PTSCASHIER = 'SPVKSR';
        $sql = "SELECT * from cso1_transaction  
        where   year(endDate) = '$year' and  month(endDate) = '$month' and day(endDate) = '$day'
        and presence = 1";
        //echo   "\n" . $sql . "\n" . "\n";
        $i = 0;
        foreach ($this->model->sql($sql) as $row) {
            $i++;
            $txt = date("d/m/Y H:i:s", strtotime($row['startDate'])) . "|" . // 1  
                date("d/m/Y H:i:s", strtotime($row['endDate'])) . '|' .  // 2 
                date("d/m/Y", strtotime($row['endDate'])) . '|' . // 3 
                '' . $row['storeOutlesId'] . '|' . // 4
                '' . $row['terminalId'] . '|' . // 5
                '' . $row['id'] . '|' . // 6
                '' . $PTSCASHIER . '|' . // 7
                $row['memberId'] . '|' . // 8
                $row['finalPrice'] . '|' . // 9
                '0|1' . // 10  dan 11 

                "\n";
            fwrite($myfile, $txt);
        }
        fclose($myfile);

        // $fileNameTrg = "postraheader$ymd.trg";
        $fileNameTrg = "scotraheader$ymd.trg";

        $myfile = fopen("../sync/transaction/$fileNameTrg", "w") or die("Unable to open file!");
        $txt = "end\n";
        fwrite($myfile, $txt);
        fclose($myfile);


        $insert = array(
            "fileSize" => $i,
            "module" => "POSTRAHEADER",
            "fileName" => $fileName,
            "status" => 1,
            "presence" => 1,
            "syncDate" => date("Y-m-d H:i:s"),
            "inputDate" => time(),
        );
        $this->db->insert("cso1_syncLog", $insert);
       // return "POSTRAHEADER CREATED " . $ymd;
       // return true;
    }

    function postrasalesitem($date)
    {
        $ymd = date("ymd", strtotime($date));
        $year = date("Y", strtotime($date));
        $month = date("m", strtotime($date));
        $day = date("d", strtotime($date));

        // $fileName = "POSTRASALESITEM$ymd.txt";
        $fileName = "SCOTRASALESITEM$ymd.txt";

        $myfile = fopen("../sync/transaction/$fileName", "w") or die("Unable to open file!");

        $sql = "SELECT   
                    t.id as 'PTSTXNUM', 
                    t.terminalId as 'PTSCR', 
                    t.storeOutlesId as 'PTSSITE', 
                    'SPVKSR' as 'PTSCASHIER',
                    d.transactionDate as 'PTSBUSDATE' , 
                    d.inputDate, '1' as 'PTSTYPE',
                    d.qty as 'PTSQTY', 
                    d.originPrice as 'PTSTOTALPRICE', 
                    d.discount as 'PTSTOTALDISC', 
                    d.barcode as 'PTSTILLCODE', 
                    d.promotionId as 'PTIPROMOCODE',
                    d.price as 'PTIUNITPRICE'
            from cso1_transaction as t 
            left join cso1_transactionDetail as d on d.transactionId = t.id
            where  t.presence = 1 and d.presence = 1 and d.void = 0 
           and ( year(t.startDate) = '$year' and  
             month(t.startDate) = '$month' and 
           day(t.startDate) = '$day')   
            ";

        //echo   "\n" . $sql . "\n" . "\n";
        //$PTSQTY = 1;
        $i = 0;
        $PTSCASHIER = 'SPVKSR';
        foreach ($this->model->sql($sql) as $row) {
            $i++;


            //$qty = $row['PTSQTY'];
            $barcode = $row['PTSTILLCODE'];
            // $arrItem = $this->model->barcode($row['PTSTILLCODE']); 
            // if ( $arrItem['prefix'] == '2') { 
            //     // BARCODE DINAMIC  
            //     $barcode = $arrItem['itemId']; 

            // } 

            $PTSBUSDATE = $row['PTSBUSDATE'] == '' ? date("d/m/Y H:i:s", $row['inputDate'] - rand(1, 99)) : date("d/m/Y H:i:s", strtotime($row['PTSBUSDATE']));

            $txt =
$i . '|' .      				//1 Kode unik untuk tiap baris transaksi (ID/no urut per baris transaksi)
$row['PTSTXNUM'] . '|' . 		//2 Nomor struk transaksi
'' . $row['PTSCR'] . '|' .   	//3 Kode PC untuk POS
'' . $row['PTSSITE'] . '|' . 	//4 Kode toko

$PTSCASHIER . '|' . 			//5 Kode kasir 
$PTSBUSDATE . '|' .  			//6 Tanggal transaksi dalam format date (DD/MM/YY,hh,mm,ss) 

'1' . '|' . 					//7 Type of sales item: 1=sales, 2=return
$row['PTSQTY'] . '|' . 			//8  Total barang yang terjual per item

($row['PTSQTY'] * $row['PTSTOTALPRICE']) . '|' . 	//9 Total harga barang yang terjual per item (Sebelum discount)
($row['PTIPROMOCODE'] != '' ? ($row['PTSQTY'] * $row['PTSTOTALDISC']) : ''). '|' . 	//10 Total diskon barang yang terjual per item (Dalam Rupiah)

'' . $barcode . '|' . 				//11 Barcode item
'' . $row['PTIPROMOCODE'] . '|' . 	//12 Kode promo (kode promo yang dari GOLD)
$row['PTIUNITPRICE'] . '|' . 		//13   Harga per item
'' . 								//14 Untuk Simpan ID SPG (Depstore)
                "\n";
            fwrite($myfile, $txt);
        }
        fclose($myfile);

        // $fileNameTrg = "postrasalesitem$ymd.trg";
        $fileNameTrg = "scotrasalesitem$ymd.trg";

        $myfile = fopen("../sync/transaction/$fileNameTrg", "w") or die("Unable to open file!");
        $txt = "end\n";
        fwrite($myfile, $txt);
        fclose($myfile);

        $insert = array(
            "fileSize" => $i,
            "module" => "POSTRASALESITEM",
            "fileName" => $fileName,
            "inputDate" => time(),
            "syncDate" => date("Y-m-d H:i:s"),
            "status" => 1,
            "presence" => 1,
        );
        $this->db->insert("cso1_syncLog", $insert);
        //return "POSTRASALESITEM CREATED " . $ymd;
       // return true;

    }
    function postratender($date)
    {
        $ymd = date("ymd", strtotime($date));
        $year = date("Y", strtotime($date));
        $month = date("m", strtotime($date));
        $day = date("d", strtotime($date));

        // $fileName = "POSTRATENDER$ymd.txt";
        $fileName = "SCOTRATENDER$ymd.txt";

        $myfile = fopen("../sync/transaction/$fileName", "w") or die("Unable to open file!");

        $sql = "SELECT *
                from cso1_transaction
                where  year(endDate) = '$year' and  month(endDate) = '$month' and day(endDate) = '$day'
                and presence = 1 
                ";

        //echo   "\n" . $sql . "\n" . "\n"; 
        $i = 0;
        $PTSCASHIER = 'SPVKSR';
        foreach ($this->model->sql($sql) as $row) {
            $i++;
            $QR = $this->model->select('qr', 'cso1_paymentType', "id = '" . $row['paymentTypeId'] . "' ");
            //$QR = $QR == '' ? '3':$QR;
            $txt =
                $i . '|' .      //1
                $row['id'] . '|' . //2
                '' . $row['terminalId'] . '|' .   //3
                '' . $row['storeOutlesId'] . '|' . //4
                '' . $PTSCASHIER . '|' . //5
                $QR . '|' .  //6
                date("d/m/Y H:i:s", $row['inputDate']) . '|' . //7
                $row['finalPrice'] . '|' . //8
                '0|' . //9
                '0|' . //10
                '0|' . //11
                '1' . //12 
                "\n";
            fwrite($myfile, $txt);
        }
        fclose($myfile);

        //$fileNameTrg = "postratender$ymd.trg";
        $fileNameTrg = "scotratender$ymd.trg";

        $myfile = fopen("../sync/transaction/$fileNameTrg", "w") or die("Unable to open file!");
        $txt = "end\n";
        fwrite($myfile, $txt);
        fclose($myfile);

        $insert = array(
            "fileSize" => $i,
            "module" => "POSTRATENDER",
            "fileName" => $fileName,
            "inputDate" => time(),
            "syncDate" => date("Y-m-d H:i:s"),
            "status" => 1,
            "presence" => 1,
        );
        $this->db->insert("cso1_syncLog", $insert);
       // return true;
        // return "POSTRATENDER CREATED " . $ymd;
    }
}
