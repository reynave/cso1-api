<?php
defined('BASEPATH') or exit('No direct script access allowed');
class CmdMember extends CI_Controller
{
    // FOR php7 : C:\xampp7433\php\php.exe index.php Cmd promo
    // FULL LINK PS C:\xampp7433\htdocs\app\cso1-api> C:\xampp7433\php\php.exe index.php Cmd promo

    public function __construct()
    {
        parent::__construct();
        $this->file = 'C:\xampp7433\htdocs\app\sync\KMEMBER2.DBF';
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
        // Pastikan ekstensi dbase aktif di PHP
        $file =  $this->file;
        $data = [];
        // Buka file DBF dalam mode baca (0 = read-only)
        $db = dbase_open($file, 0);

        if ($db) {
            // Dapatkan jumlah record dalam file
            $recordCount = dbase_numrecords($db);

            //  echo "Total Records: $recordCount\n";

            // Loop untuk membaca semua record
            for ($i = 1; $i <= $recordCount; $i++) {
                // for ($i = 1; $i <= 100; $i++) {

                // Membaca record dengan nama kolom
                $row = dbase_get_record_with_names($db, $i);

                // Hapus karakter kosong (karena DBF menyimpan string dengan padding)
                array_walk($row, function (&$value) {
                    $value = trim($value);
                }); 
                $fkode = $row['FKODE'] ? $row['FKODE'] : $row['fkode'];
                $this->db->delete("cso1_memberVip", "FKODE = '$fkode' ");
                $insert = array(
                    "FKODE" => $row['FKODE'] ? $row['FKODE'] : $row['fkode'],
                    "FNAME" =>  $row['FNAME'] ?  $row['FNAME']:  $row['fname'] ,
                    "FSTATUS" =>  $row['FSTATUS'] ?  $row['FSTATUS'] : $row['fstatus'],
                    "FEXPD" =>  $row['FEXPD'] ?  $row['FEXPD'] : $row['fexpd'],
                    "deleted" =>  $row['deleted'],

                );
                $this->db->insert("cso1_memberVip", $insert);
                print_r($insert);
            }

            // Tutup file DBF
            dbase_close($db);
            ///echo json_encode($data);
        } else {
            echo "Gagal membuka file DBF.";
        }

    }

    function view()
    {
        
           // Pastikan ekstensi dbase aktif di PHP
        $file =  $this->file;
        $data = [];
        // Buka file DBF dalam mode baca (0 = read-only)
        $db = dbase_open($file, 0);

        if ($db) {
            // Dapatkan jumlah record dalam file
            $recordCount = dbase_numrecords($db);

            //  echo "Total Records: $recordCount\n";

            // Loop untuk membaca semua record
            for ($i = 1; $i <= 20; $i++) {
                // for ($i = 1; $i <= 100; $i++) {

                // Membaca record dengan nama kolom
                $row = dbase_get_record_with_names($db, $i);

                // Hapus karakter kosong (karena DBF menyimpan string dengan padding)
                array_walk($row, function (&$value) {
                    $value = trim($value);
                }); 
              //  $this->db->delete("cso1_memberVip", "FKODE = '".$row['FKODE']."' ");
                $insert = array(
                    "FKODE" => $row['FKODE'] ? $row['FKODE'] : $row['fkode'],
                    "FNAME" =>  $row['FNAME'] ?  $row['FNAME']:  $row['fname'] ,
                    "FSTATUS" =>  $row['FSTATUS'] ?  $row['FSTATUS'] : $row['fstatus'],
                    "FEXPD" =>  $row['FEXPD'] ?  $row['FEXPD'] : $row['fexpd'],
                    "deleted" =>  $row['deleted'],

                );
               // $this->db->insert("cso1_memberVip", $insert);
                print_r($insert);
            }

            // Tutup file DBF
            dbase_close($db);
            ///echo json_encode($data);
        } else {
            echo "Gagal membuka file DBF.";
        }
        

    }
}