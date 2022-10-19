<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lead extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->key = $this->db->key;
        $this->openAPI = $this->db->openAPI;
        header('Access-Control-Allow-Origin: *');
        //header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
        header("Access-Control-Allow-Headers: key, token,  Content-Type");

        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        // error_reporting(E_ALL);
        date_default_timezone_set('Asia/Jakarta');
        $this->db->query("SET time_zone = '+07:00'");
        //  $this->core->https();

        if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
        }
    }


    function index()
    {

        $this->load->library('ssp');
        // DB table to use
        //$table = 'crm3_company';
        $currency = $this->model->currency();
        $table = <<<EOT
 (
    SELECT  c.id, lst.name as 'lead_status', lst.value,
    CONCAT(  c.first_name,' ',c.last_name) AS 'name', lst.color,
    c.company, c.website, 
    IFNULL(i.name,'Undefined') AS 'industry', 
    IFNULL(ls.name,'Undefined') AS 'lead_source',  
    IFNULL(concat(u.first_name,' ',u.last_name),'unsigned')  AS 'user'

    FROM crm3_lead AS c 
    LEFT JOIN crm3_industry AS i ON i.id = c.id_industry
    LEFT JOIN crm3_title AS t ON t.id = c.id_title
    LEFT JOIN crm3_lead_source AS ls ON ls.id = c.id_lead_source
    LEFT JOIN crm3_lead_status AS lst ON lst.id = c.id_lead_status
    LEFT JOIN crm3_user AS u ON u.id = c.id_user
    WHERE c.presence = 1 and c.convert = 0
    {$this->model->user_group('c.id_user')['query']} 
 ) temp
EOT;
        //  

        // Table's primary key
        $primaryKey = 'id';

        // Array of database columns which should be read and sent back to DataTables.
        // The `db` parameter represents the column name in the database, while the `dt`
        // parameter represents the DataTables column identifier. In this case simple
        // indexes
        $columns = array(
            array('db' => 'id', 'dt' => 0),
            array('db' => 'lead_status',  'dt' => 1),
            array('db' => 'name',  'dt' => 2),
            array('db' => 'company',  'dt' => 3),

            array('db' => 'website',  'dt' => 4),
            array('db' => 'industry',  'dt' => 5),
            array('db' => 'lead_source',  'dt' => 6),
            array('db' => 'user',  'dt' => 7),

            array('db' => 'color',  'dt' => 8),
        );

        // SQL server connection information
        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db'   => $this->db->database,
            'host' => $this->db->hostname
        );

        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
        * If you just want to use the basic configuration for DataTables with PHP
        * server-side, there is no need to edit below this line.
        */
        //require('ssp.class.php');

        echo json_encode(
            $this->ssp->simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    } 
}
