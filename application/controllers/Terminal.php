<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Terminal extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->openAPI = $this->db->openAPI;
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        // error_reporting(E_ALL);  
        if (!$this->model->header($this->openAPI)) {
            echo $this->model->error("Error auth");
            exit;
        }
    }


    function index()
    {

        $data = array(
            "items" => $this->model->sql("SELECT t.*, so.description
                FROM cso1_terminal as t 
                left join cso1_storeOutles as so on t.storeOutlesId = so.id
                WHERE  t.presence = 1 order by t.id ASC"),

            "storeOutles" =>  $this->model->sql("SELECT *  FROM cso1_storeOutles  WHERE  status = 1 and presence = 1 order by id ASC"),

        );
        echo   json_encode($data);
    }

    function insert()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $insert = array(
                "status" => 0,
                "name" => "Terminal",
                "id" =>  $this->model->number('terminal'),
                "storeOutlesId" => $this->model->select("id", "cso1_storeOutles", "presence = 1 order by id asc"),
                "presence" => 1,
                "inputDate" => time(),
                "inputBy" => $this->model->userId(),
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->insert('cso1_terminal', $insert);
            $data = array(
                "items" =>  $insert,
            );
        }
        echo   json_encode($data);
    }

    function update()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "name" => $post['item']['name'] ? $post['item']['name'] : 'Terminal',
                "storeOutlesId" => $post['item']['storeOutlesId'],
                "status" => $post['item']['status'],
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_terminal', $update, "id = '" . $post['item']['id'] . "' ");

            $data = array(
                "items" =>  $post,
            );
        }
        echo   json_encode($data);
    }

    function delete()
    {

        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $error = true;
            $update = array(
                "presence" => 0,
                "updateDate" => time(),
                "updateBy" => $this->model->userId(),
            );
            $this->db->update('cso1_terminal', $update, "id = '" . $post['item']['id'] . "' ");

            $data = array(
                "items" =>  $update,
            );
        }
        echo   json_encode($data);
    }
}
