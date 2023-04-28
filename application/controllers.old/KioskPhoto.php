<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KioskPhoto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->keygen = "t3XsTuq9aCvNxCkNXPEyvvGejhKBHumxVbv6fJ6aGeCPg83hzVGBYDFd6H8u";
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        date_default_timezone_set('Asia/Jakarta');

        // if (!$this->model->header($this->openAPI)) {
        //     echo $this->model->error("Error auth");
        //     exit;
        // }
    }

    function index()
    {
        $data = array(
            "error" => false,
        );
        echo json_encode($data);
    }


    function member()
    {
        $data = array(
            "uuid" => $this->input->get("uuid"),
            "memberId" => $this->model->select("memberId","cso1_kioskUuid","kioskUuid='".$this->input->get("uuid")."' "), 
        );
        echo json_encode($data);
    }



    function uploadPhoto()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $img = $post['webcamImage']['_imageAsDataUrl'];
            $img = str_replace('data:image/jpeg;base64,', '', $img);
            $img = str_replace(' ', '+', $img);
            $data = base64_decode($img);
            if ($post['memberId'] != 0 || $post['memberId'] != '' ) {
                file_put_contents('./uploads/photo/member/' . $post['kioskUuid'] . '.jpeg', $data);
            } else {
                file_put_contents('./uploads/photo/visitor/' . $post['kioskUuid'] . '.jpeg', $data);
            }

            $data = array(
                "error" => false,
                // "post" => $post,
            );
        }
        echo json_encode($data);
    }
}
