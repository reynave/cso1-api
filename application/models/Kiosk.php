<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kiosk extends CI_Model
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
            return $row->$field;
        }
    }

    function outletId($getImei = "")
    {
        $data = false;
        $imei = str_replace(["'", '"'], "", $getImei);
        $outletId = self::select("storeOutlesId", "cso1_terminal", "token = '$imei' and status = 1 and presence = 1");
        if ($imei != "" && $outletId != "") {
            $data = $outletId;
        }
        return $data;
    }

    function id($getImei = "")
    {
        $imei = str_replace(["'", '"'], "", $getImei);
        return self::select("id", "cso1_terminal", "token = '$imei' and status = 1 and presence = 1");
    }
    function createLog($filePath = 'log.txt')
    {
        // Format pesan log dengan tanggal dan waktu
        $today = date("ymd");
        $message = 'ACTION ITEMID BARCODE PRICE X WEIGHT/QTY = FINALPRICE';
        $formattedMessage = "[" . date("Y-m-d H:i:s") . "] " . $message . PHP_EOL;

        // Cek apakah folder sudah ada, jika tidak maka buat folder baru
        if (!is_dir('logs/'.$today)) {
            mkdir('logs/'.$today, 0777, true); // Buat folder dengan izin baca-tulis penuh
        }


        // Cek apakah file ada, jika tidak maka buat file baru
        if (!file_exists('logs/' . $today . '/' . $filePath)) {
            // Buat file baru dan tambahkan pesan log
            file_put_contents('logs/' . $today . '/' . $filePath, $formattedMessage);
        }
    }
    function writeLog($message, $filePath = 'log.txt')
    {
        // Format pesan log dengan tanggal dan waktu
        $today = date("ymd");
        $formattedMessage = "[" . date("Y-m-d H:i:s") . "] " . $message . PHP_EOL;

        // Cek apakah file ada, jika tidak maka buat file baru
        if (!file_exists('logs/' . $today . '/' . $filePath)) {
            // Buat file baru dan tambahkan pesan log
            file_put_contents('logs/' . $today . '/' . $filePath, $formattedMessage);
        } else {
            // Tambahkan pesan baru ke akhir file log yang sudah ada
            file_put_contents('logs/' . $today . '/' . $filePath, $formattedMessage, FILE_APPEND);
        }
    }
}
