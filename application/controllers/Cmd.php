<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cmd extends CI_Controller
{
    // FOR php7 : C:\xampp7433\php\php.exe index.php Cmd promo

    public function __construct()
    {
        parent::__construct();
        $this->item = "item.txt";
        $this->barcode = "barcode.txt";
        $this->file = 'C:/xampp7433/htdocs/app/sync';
       // $this->file = 'E:/xampp/htdocs/sync';
        $this->promo_header = "promo_header.txt";
        $this->promo_detail = "promo_detail.txt";
        $this->promo_free = "promo_free.txt";
        date_default_timezone_set('Asia/Jakarta');
        error_reporting(E_ERROR | E_PARSE);
        $this->time = array(
            "promo" => "04:00:10",
            "item" => "05:00:10",
            "transaction" => "01:00:10",
        );
    }
    // CALL cmd : php index.php Cmd
    function index()
    {
        echo "\n" . "Server Run ver 1.0.3" . "\n \n";
        $i = 0;
        do {
            $i++;
            echo $i . ' ' . date("D Y-m-d H:i:s") . "  | Next Schadule " . " \n";
            print_r($this->time);
            echo "\n\n";


            if ($this->time['promo'] == date("H:i:s")) {
                echo $this->time['promo'];
                self::promoHeader();
                self::promoDetail();
                self::promoFree();
            }

            if ($this->time['item'] == date("H:i:s")) {
                echo $this->time['item'];
                self::cso1_itemBarcode();
                self::cso1_item();
            }

            if ($this->time['transaction'] == date("H:i:s")) {
                echo $this->time['transaction'];
                self::transaction();
            }

            sleep(1);
        } while (true);
    }


    private function editBarcode()
    {
        // Nama file input dan output
        $inputFile = '../sync/' . $this->barcode;
        $outputFile = '../sync/gold_barcode.txt';

        // Baca isi file input ke dalam array
        $lines = file($inputFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if ($lines === false) {
            die("Gagal membaca file input");
        }

        // Iterasi melalui setiap baris dan mengubahnya
        foreach ($lines as &$line) {
            $parts = explode('|', $line);
            if (count($parts) == 2) {
                // Mengganti nilai kedua dengan nilai pertama jika hanya terdapat dua nilai
                $line = '|' . $parts[0] . '|' . $parts[1];
            }
        }

        // Menyimpan hasil ke dalam file output
        $result = file_put_contents($outputFile, implode("\n", $lines));

        if ($result === false) {
            die("Gagal menyimpan file output");
        }

        echo " :: Konversi selesai. Hasil disimpan dalam $outputFile\n";
    }

    function cso1_itemBarcode()
    {
        echo "START SYNC BARCODE";

        $file = $this->file;
        self::editBarcode();
        sleep(1);
        $this->db->query("Truncate table gold_barcode");
        $this->db->query("
        BULK INSERT gold_barcode  
        FROM '$file/gold_barcode.txt' 
        WITH (FIELDTERMINATOR = '|' , ROWTERMINATOR = '\n');
        ");
        sleep(1);
        $this->db->query("Truncate table cso1_itemBarcode");
        $this->db->query("INSERT INTO cso1_itemBarcode (itemId, barcode)
        SELECT itemId, barcode FROM gold_barcode;");

    }
	function test()
	{ 
		echo "Items :: DONE";
	}
    function runPromo()
    {
        self::promoHeader();
        self::promoDetail();
        self::promoFree();
        echo "runPromo :: DONE";
    }

    function runItem()
    {
        self::cso1_itemBarcode();
        self::cso1_item();
        echo "Items :: DONE";
    }

    function runTransaction()
    {
        //self::transaction();
		$date = date("Y-m-d");
		$this->transaction->sync(date('Y-m-d', strtotime($date. ' - 1 days')));
        echo "runTransaction :: DONE";
    }


    //php index.php Cmd item
    function item()
    {
        self::cso1_itemBarcode();
        self::cso1_item();
    }

    function promo()
    {
        /// C:\xampp7433\php\php.exe index.php Cmd promo
        self::promoHeader();
        self::promoDetail();
        self::promoFree();
    }

    //php index.php Cmd syncTransactionManual
    function syncTransactionManual()
    {
        $this->load->model('transaction');
        // $startDate = '2024-01-01';
        // $endDate = '2024-02-03';
        // $dateRange = self::createDateRangeArray($startDate, $endDate);
        // foreach ($dateRange as $date) {
            // echo $date . '<br>';
            // $this->transaction->sync($date);
        // }
		
		$startDate = '2024-02-01';
		$endDate = '2024-02-04';

		// Konversi string tanggal menjadi objek DateTime
		$start = new DateTime($startDate);
		$end = new DateTime($endDate);

		// Tambahkan 1 hari ke tanggal end untuk mengikutsertakan tanggal tersebut
		$end->modify('+1 day');

		// Loop untuk menghasilkan tanggal-tanggal di antara dua tanggal
		$dateRange = [];
		while ($start < $end) {
			$dateRange[] = $start->format('Y-m-d');
			$start->modify('+1 day');
		}

		// Tampilkan hasil
		foreach ($dateRange as $date) {
			echo $date . "\n";
			$this->transaction->sync($date);
		}

       
    }

     
    //php index.php Cmd syncTransactionManual
    function transactionAll()
    {
        $this->load->model('transaction');
        // echo $this->transaction->sync( $date );
        $q = "SELECT  FORMAT (endDate, 'yyyy-MM-dd') as date from cso1_transaction 
        where presence = 1 and locked = 1
        group by FORMAT (endDate, 'yyyy-MM-dd')";

        foreach ($this->model->sql($q) as $row) {
            echo $this->transaction->sync($row['date']);
            // echo $row['date']."\n";

        }

    }

    function transaction()
    {
        $this->load->model('transaction');
        echo $this->transaction->sync(date("Y-m-d"));
    }

    function total()
    {
        $fileName = $this->promo_detail;
        $file = new SplFileObject("../sync/$fileName", 'r');
        $file->seek(PHP_INT_MAX);
        echo $file->key();
        ;
    }



    function editItem()
    {
        // Nama file input dan output
        $inputFile = '../sync/' . $this->item;
        $outputFile = '../sync/edit_' . $this->item;


        // Baca isi file input ke dalam array
        $lines = file($inputFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        if ($lines === false) {
            die("Gagal membaca file input");
        }

        // Iterasi melalui setiap baris dan menambahkan nilai di belakangnya
        foreach ($lines as &$line) {
            // Tambahkan nilai di belakang setiap baris
            $line .= '|||1|1|1|' . time() . '|1|' . time() . '|';
        }
		$lines[] = "0000000000001|null|null|0||||||||||181|680037|0||||1|1|1|1708941755|1|1708941755|";

        // Menyimpan hasil ke dalam file output
        $result = file_put_contents($outputFile, implode("\n", $lines));

        if ($result === false) {
            die("Gagal menyimpan file output");
        }

        echo " :: Penambahan nilai selesai. Hasil disimpan dalam $outputFile\n";

    }

    function cso1_item()
    {
        echo "START SYNC ITEM";

        $file = $this->file;
        self::editItem();
        sleep(1);
        $this->db->query("Truncate table cso1_item");
        $this->db->query("
        BULK INSERT cso1_item  
        FROM '$file/edit_item.txt' 
        WITH (FIELDTERMINATOR = '|' , ROWTERMINATOR = '\n');
        ");


    }



    function promoHeader()
    {
        $i = 0;
        $fileName = $this->promo_header;
        $handle = fopen("../sync/$fileName", "r");
        if ($handle) {
            $this->db->query("Truncate table cso1_promotion");
            while (($line = fgets($handle)) !== false) {
                $i++;
                $ar = explode("|", $line);
                //  $this->db->delete("cso1_promotion", "id='$ar[0]'");
                $insert = array(
                    "id" => $ar[0],
                    "typeOfPromotion" => (int) $ar[1],
                    "storeOutlesId" => $ar[2],
                    "code" => $ar[3],
                    "description" => $ar[4],
                    "startDate" => (int) $ar[5],
                    "endDate" => (int) $ar[6],
                    "discountPercent" => (float) $ar[7],
                    "discountAmount" => (float) $ar[8],
                    "status" => (int) $ar[9],

                    "Mon" => (int) $ar[10],
                    "Tue" => (int) $ar[11],
                    "Wed" => (int) $ar[12],
                    "Thu" => (int) $ar[13],
                    "Fri" => (int) $ar[14],
                    "Sat" => (int) $ar[15],
                    "Sun" => (int) $ar[16],
                    "presence" => 1,

                    "inputDate" => time(),

                );
                $this->db->insert("cso1_promotion", $insert);
                echo "promoHeader INSERT " . $ar[0] . "\n";
            }

            $insert = array(
                "fileName" => $fileName,
                "totalInsert" => $i,
                "lastSycn" => date("Y-m-d H:i:s"),
                "inputDate" => time(),
            );
            $this->db->insert("cso1_sync", $insert);

            fclose($handle);
        }
    }

    function promoDetail()
    {
        $i = 0;
        $fileName = $this->promo_detail;
        $handle = fopen("../sync/$fileName", "r");
        if ($handle) {
            $this->db->query("Truncate table cso1_promotionItem");
            while (($line = fgets($handle)) !== false) {
                $i++;
                $ar = explode("|", $line);
                //   $this->db->delete("cso1_promotionItem", "promotionId='$ar[0]' and itemId = '$ar[1]' ");
                $insert = array(
                    "promotionId" => $ar[0],
                    "itemId" => $ar[1],
                    "qtyFrom" => (int) $ar[2],
                    "qtyTo" => (int) $ar[3],
                    "specialPrice" => (float) $ar[4],
                    "disc1" => (float) $ar[5],
                    "disc2" => (float) $ar[6],
                    "disc3" => (float) $ar[7],
                    "discountPrice" => (float) $ar[8],
                    "status" => (int) $ar[9],
                    "presence" => 1,
                    "inputDate" => time(),

                );
                $this->db->insert("cso1_promotionItem", $insert);
                echo "promoDetail INSERT " . $ar[0] . "\n";
            }

            $insert = array(
                "fileName" => $fileName,
                "totalInsert" => $i,
                "lastSycn" => date("Y-m-d H:i:s"),
                "inputDate" => time(),
            );
            $this->db->insert("cso1_sync", $insert);

            fclose($handle);
        }
    }

    function promoFree()
    {
        $i = 0;
        $fileName = $this->promo_free;
        $handle = fopen("../sync/$fileName", "r");
        if ($handle) {
            $this->db->query("Truncate table cso1_promotionFree");
            while (($line = fgets($handle)) !== false) {
                $i++;
                $ar = explode("|", $line);
                //  $this->db->delete("cso1_promotionFree", "promotionId='$ar[0]' and itemId = '$ar[1]' ");
                $insert = array(
                    "promotionId" => $ar[0],
                    "itemId" => $ar[1],
                    "qty" => (int) $ar[2],
                    "freeItemId" => $ar[3],
                    "freeQty" => (int) $ar[4],
                    "applyMultiply" => (int) $ar[5],
                    "scanFree" => (int) $ar[6],
                    "printOnBill" => (int) $ar[7],
                    "status" => (int) $ar[8],
                    "presence" => 1,
                    "inputDate" => time(),

                );
                $this->db->insert("cso1_promotionFree", $insert);
                echo " promoFree INSERT " . $ar[0] . "\n";
            }

            $insert = array(
                "fileName" => $fileName,
                "totalInsert" => $i,
                "lastSycn" => date("Y-m-d H:i:s"),
                "inputDate" => time(),
            );
            $this->db->insert("cso1_sync", $insert);

            fclose($handle);
        }
    }

    // function transactionConvert()
    // {
    //     $sql = "SELECT   *
    //     FROM cso1_transactionDetail
    //     WHERE barcode IS NOT NULL
    //     ORDER BY id DESC
    //     OFFSET 0 ROWS
    //     FETCH NEXT 1000 ROWS ONLY ";
    //     foreach ($this->model->sql($sql) as $row) {
             
    //         $qty = 1;
    //         $barcode = str_split($row['barcode']);
    //         $arrItem = $this->model->barcode($row['barcode']);
    //         if (count($barcode) >= 13 && $arrItem['prefix'] == 2) {
              
    //             // BARCODE DINAMIC  
    //             $barcode =  $arrItem['itemId'];
    //             $qty = $arrItem['weight'];  
    //         }else{
    //             $barcode = $row['barcode'];
    //         }  


    //         $insertDetail = array( 
    //             "transactionId" => $row['transactionId'],
    //             "promotionId" => $row['promotionId'],
    //             "promotionItemId" => $row['promotionItemId'],
    //             "barcode" => $barcode,
    //             "itemId" => $row['itemId'],
    //             "originPrice" => $row['originPrice'],
    //             "price" => $row['price'],
    //             "discount" => $row['discount'],
    //             "isPriceEdit" => $row['isPriceEdit'],
    //             "isFreeItem" => $row['isFreeItem'],
    //             "isSpecialPrice" => $row['isSpecialPrice'],
    //             "isPrintOnBill" => $row['isPrintOnBill'],
    //             "note" => $row['note'],
    //             "void" => $row['void'],
    //             "presence" => 1,
    //             "inputDate" => $row['inputDate'],
    //             "updateDate" => $row['updateDate'],
    //             "updateBy" => $row['updateBy'],

    //             "qty" => $qty,
    //         );
    //         $this->db->insert('cso2_transactionDetail', $insertDetail);
    //         print_r( $insertDetail);
    //     }
    // }
}