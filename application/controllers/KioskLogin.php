<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KioskLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->terminalId = "";
        $this->storeOutlesId = "";

        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: key, token,  Content-Type");
        header('Access-Control-Allow-Methods: GET, POST, PUT');
        header('Content-Type: application/json');
        date_default_timezone_set('Asia/Jakarta');
        // error_reporting(E_ALL);  
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

        if ($this->model->select("value", "cso1_account", "id=4") == 0) {
            echo $this->model->error("System Off");
            exit;
        } else {
            $token = $this->input->get("token");

            $terminalId = $this->input->get("terminalId");
            $storeOutlesId = $this->input->get("outletId");

            if ($this->model->select("status", "cso1_terminal", "id = '$terminalId'") == 0) {
                echo $this->model->error("System Off");
                exit;
            } else if ($this->model->select("status", "cso1_storeOutles", "id = '$storeOutlesId'") == 0) {
                echo $this->model->error("System Off");
                exit;
            } else {
                $data = array(
                    "error" => false,
                );
                echo json_encode($data);
            }
        }
    }

    function loginVisitor()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $kioskUuid = $this->model->number('kioskUuid');
            $insert = array(
                "photo" =>  $post['base64Images'] != false ? $this->model->cam_to_img($post['base64Images'], "./uploads/photo/visitor/",  $kioskUuid) : "",
                "kioskUuid" => $kioskUuid,
                "memberId" => 0,
                "terminalId" => $this->terminalId,
                "storeOutlesId" => $this->storeOutlesId,
                "startDate" => date("Y-m-d H:i:s"),
                "inputDate" => time(),
                "presence" => 1,
                "status" => 1,
            );
            $this->db->insert("cso1_kioskUuid", $insert);
            $data = array(
                "photoRequred" => (int)$this->model->select("value", "cso1_account", "id=16"),
                "post" => $post,
                "insert" => $insert,
            );
        }
        echo json_encode($data);
    }

    function takePhoto()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $update = array(
                "photo" =>  $post['base64Images'] != false ? $this->model->cam_to_img($post['base64Images'], "./uploads/photo/visitor/",  $post['kioskUuid']) : "",
            );
            $this->db->update("cso1_kioskUuid", $update, "kioskUuid = '" . $post['kioskUuid'] . "'");
            $data = array(
                "error" => false,
                "photoRequred" => (int)$this->model->select("value", "cso1_account", "id=16"),
                "post" => $post,
            );
        } else {
            $data = array(
                "error" => true,
                "post" => $post,
            );
        }
        echo json_encode($data);
    }

    function loginMember_API()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
  
        if ($post) {
            
            $member = [];
            $insert  = []; 
            $name  = "";
            $memberId = false;

            // $oauth = "https://app.chandrasuperstore.co.id/rest/deploy/oauth/token";
            // $fields = array(
                // "client_id" => "19e8fgtc2a204226a5da987197c1a8b2",
                // "client_secret" => "tteKPMVPWfiKjxfD",
            // );
            // $fields = json_encode($fields);
            // $ch = curl_init();
            // curl_setopt($ch, CURLOPT_URL, $oauth);
            // curl_setopt($ch, CURLOPT_POST, 1);
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            // curl_setopt($ch, CURLOPT_POSTFIELDS,   $fields);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // $server_output = curl_exec($ch);
            // curl_close($ch);
         
            //$token = (array)json_decode($server_output);
          

            // VIP member
            // 67670202
            // 88888888
            // 99999999
            $memberId =  $post['memberId'];
            $url_vip = "http://192.168.202.111:8080/uploads/android/getpoint.php?txtPoint=".$memberId;

           // $headers[] = 'Content-Type:application/json';
           // $headers[] = "Authorization: Bearer " . $token['access_token'];
           // $headers[] = "vipno: " . $memberId;


            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url_vip);
           // curl_setopt($ch, CURLOPT_HTTPHEADER,  $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $member = curl_exec($ch); 
            curl_close($ch);
            
          
            $memberInsert = false;
            if ($member != 'gagal') {
				$member = (array)json_decode($member, true);
				//print_r($member);
                $error = false;
                $kioskUuid = $this->model->number('kioskUuid');
                $insert = array(
                    "kioskUuid" 	=> $kioskUuid,
                    "memberId"  	=> $memberId,
                    "terminalId" 	=> $this->terminalId,
                    "storeOutlesId" => $this->storeOutlesId,
                    "inputDate" 	=> time(),
                    "startDate" 	=> date("Y-m-d H:i:s"),
                    "presence" 		=> 1,
                    "status" 		=> 1,
                );
                $this->db->insert("cso1_kioskUuid", $insert);

                $this->db->delete("cso1_member","id='". $memberId."'");


                $memberInsert = array(
                    "firstName" =>  $member[0]['name'],
                    "id" =>  $memberId,
                    "inputDate" => time(),
                    "status" => 1,
                    "presence" => 1,
                );
                $this->db->insert("cso1_member", $memberInsert);

                $name = $member[0]['name'];
                $branches = $this->model->sql("SELECT t.storeOutlesId, o.name as 'outlet', b.name as 'branches'
                                                FROM cso1_terminal as  t 
                                                join cso1_storeOutles as o on o.id = t.storeOutlesId
                                                join cso1_storeBranches as b on b.id = o.storeBranchesId
                                                WHERE t.id='" . $this->terminalId . "'")[0]['branches'];

                $data = array(
                    "token" => "",
                    "welcomeMember" => $name ? "Welcome " . ucwords($name) . " <br>Ke cabang kami $branches" : 'Member not found',
                    "photoRequred" => (int)$this->model->select("value", "cso1_account", "id=15"),
                    "memberId" => $post['memberId'],
                    "member" => $memberInsert,
                    "error" => $error,
                    "post" => $post,
                    "insert" => $insert,
                    "date" => date("H:i:s"),
                );
            }
        }
        echo json_encode($data);
    }

    function loginMemberOFFLINE()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
  
        if ($post) {
            
            $member = [];
            $insert  = []; 
            $name  = "";
            $memberId = false;

            $memberInsert = array(
                "firstName" => "OFFLINE",
                "id" =>  $memberId,
                "inputDate" => time(),
                "status" => 1,
                "presence" => 1,
            );
            $memberId =  $post['memberId'];
          
            $data = array(
                "token" => "",
                "welcomeMember" => 'Member sedang offline',
                "photoRequred" => (int)$this->model->select("value", "cso1_account", "id=15"),
                "memberId" => $post['memberId'],
                "member" => $memberInsert,
                "error" => $error,
                "post" => $post,
                "insert" => $insert,
                "date" => date("H:i:s"),
            );
            
        }
        echo json_encode($data);
    }

    function loginMember()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
  
        if ($post) {
            $memberId =  $post['memberId'];
            $member = [];
            $insert  = []; 
            $name  = ""; 

            $data = array(
                "token" => "",
                "welcomeMember" => 'Member tidak ditemukan',
                "photoRequred" => (int)$this->model->select("value", "cso1_account", "id=15"),
                "memberId" => $post['memberId'],
                "member" => [],
                "error" => $error,
                "post" => $post,
                "insert" => $insert,
                "date" => date("H:i:s"),
            );

            $FKODE = $this->model->select("FKODE", "cso1_memberVip", "FKODE = '" .$memberId . "' ");
            if ( $FKODE != ''  ) {
				$member = $this->model->sql(" SELECT * 
                FROM cso1_memberVip
                WHERE FKODE ='" . $memberId . "'");
				

                $error = false;
                $kioskUuid = $this->model->number('kioskUuid');
                $insert = array(
                    "kioskUuid" 	=> $kioskUuid,
                    "memberId"  	=> $memberId,
                    "terminalId" 	=> $this->terminalId,
                    "storeOutlesId" => $this->storeOutlesId,
                    "inputDate" 	=> time(),
                    "startDate" 	=> date("Y-m-d H:i:s"),
                    "presence" 		=> 1,
                    "status" 		=> 1,
                );
                $this->db->insert("cso1_kioskUuid", $insert);

                $this->db->delete("cso1_member","id='". $memberId."'");

                $name = $member[0]['FNAME'];
                $memberInsert = array(
                    "firstName" =>   $name ,
                    "id" =>  $memberId,
                    "inputDate" => time(),
                    "status" => 1,
                    "presence" => 1,
                );
                $this->db->insert("cso1_member", $memberInsert); 
                $branches = $this->model->sql("SELECT t.storeOutlesId, o.name as 'outlet', b.name as 'branches'
                                                FROM cso1_terminal as  t 
                                                join cso1_storeOutles as o on o.id = t.storeOutlesId
                                                join cso1_storeBranches as b on b.id = o.storeBranchesId
                                                WHERE t.id='" . $this->terminalId . "'")[0]['branches'];

                $data = array(
                    "token" => "",
                    "welcomeMember" => $name ? "Welcome " . ucwords($name) . " <br>Ke cabang kami $branches" : 'Member not found',
                    "photoRequred" => (int)$this->model->select("value", "cso1_account", "id=15"),
                    "memberId" => $post['memberId'],
                    "memberVIP" => $member,
                    "member" => $memberInsert,
                    "error" => $error,
                    "insert" => $insert,
                    "post" => $post,  
                );
            }
            
        }
        echo json_encode($data);
    }


    function loginMemberDEL()
    {
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        $member = [];
        $insert  = [];
        $data = [];
        // if ($post) {
        $name  = "";
        $memberId = false;
        /*
            ver JAVASCRIPT
            const body = {
                client_id: "19e8fgtc2a204226a5da987197c1a8b2",
                client_secret: "tteKPMVPWfiKjxfD"
            }    
            */
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://app.chandrasuperstore.co.id/rest/deploy/oauth/token");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            "client_id=19e8fgtc2a204226a5da987197c1a8b2&client_secret=tteKPMVPWfiKjxfD"
        );

        // In real life you should use something like:
        // curl_setopt($ch, CURLOPT_POSTFIELDS, 
        //          http_build_query(array('postvar1' => 'value1')));

        // Receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close($ch);

        // Further processing ...
        print_r($server_output);


        if ($memberId) {
            $name = $this->model->sql(" SELECT concat(firstname,' ',lastname) as 'name' FROM cso1_member  WHERE id='" . $post['memberId'] . "'  ")[0]['name'];
            $error = false;
            $kioskUuid = $this->model->number('kioskUuid');
            $insert = array(
                "kioskUuid" => $kioskUuid,
                "memberId" =>  $post['memberId'],
                "terminalId" => $this->terminalId,
                "storeOutlesId" => $this->storeOutlesId,

                "inputDate" => time(),
                "startDate" => date("Y-m-d H:i:s"),
                "presence" => 1,
                "status" => 1,
            );
            $this->db->insert("cso1_kioskUuid", $insert);
            $member = $this->model->sql("SELECT * from cso1_member where presence = 1 AND status = 1 AND id='$memberId' ")[0];

            $branches = $this->model->sql("SELECT t.storeOutlesId, o.name as 'outlet', b.name as 'branches'
                FROM cso1_terminal as  t 
                join cso1_storeOutles as o on o.id = t.storeOutlesId
                join cso1_storeBranches as b on b.id = o.storeBranchesId
                WHERE t.id='" . $this->terminalId . "'")[0]['branches'];
        }

        $data = array(
            "welcomeMember" => $name ? "Welcome " . ucwords($name) . " <br>Ke cabang kami $branches" : 'Member not found',
            "photoRequred" => (int)$this->model->select("value", "cso1_account", "id=15"),
            "memberId" => $post['memberId'],
            "member" => $member,
            "error" => $error,
            "post" => $post,
            "insert" => $insert,
            "date" => date("H:i:s"),
        );
        //}
        echo json_encode($data);
    }


    function getInfo()
    {
        if ($this->model->select("kioskUuid", "cso1_kioskUuid", "kioskUuid = '" . $this->input->get('kioskUuid') . "' ")) {
            $memberId  = $this->model->select("memberId", "cso1_kioskUuid", "kioskUuid = '" . $this->input->get('kioskUuid') . "' ");
            $terminalId  = $this->model->select("terminalId", "cso1_kioskUuid", "kioskUuid = '" . $this->input->get('kioskUuid') . "' ");

            $name =  $memberId ? $this->model->sql(" SELECT concat(firstname,' ',lastname) as 'name' FROM cso1_member  WHERE id='" . $memberId . "'  ")[0]['name'] : '';
            $tnc = $this->model->sql(" SELECT * from cso1_account where id >= 1101  and id <= 1199 ");

            $branches = $this->model->sql("SELECT t.storeOutlesId, o.name as 'outlet', b.name as 'branches'
            FROM cso1_terminal as  t 
            join cso1_storeOutles as o on o.id = t.storeOutlesId
            join cso1_storeBranches as b on b.id = o.storeBranchesId
            WHERE t.id='" .   $terminalId . "'")[0]['branches'];


            $data = array(
                "tnc" =>   $tnc,
                "kioskUuid" =>  $this->input->get('kioskUuid'),
                "welcomeMember" => $name ? "Welcome " . ucwords($name) . " <br>Ke cabang kami $branches" : 'Member not found',
                "name" => $name,
                "memberId" => $memberId,
            );
        } else {
            $data = array(
                "kioskUuid" =>  $this->input->get('kioskUuid'),
                "error" => true,
            );
        }

        echo json_encode($data);
    }

    function checkSession()
    {

        $kioskUuid  = $this->model->select("kioskUuid", "cso1_kioskUuid", "kioskUuid = '" . $this->input->get('t') . "' ");
        $data = array(
            "kioskUuid" => $kioskUuid,
            "error" => $kioskUuid == null ? true : false,
            "greeting" =>  !$this->model->sql("SELECT  * FROM cso1_greeting  where presence = 1 and status = 1 and 
            CAST(publishDate AS DATE) = CAST( getdate() AS DATE)")  ? "" : $this->model->sql("SELECT top 1 * FROM cso1_greeting  where presence = 1 and status = 1 and 
            CAST(publishDate AS DATE) = CAST( getdate() AS DATE)")[0]['message'],
            "terminalId" => $this->terminalId,
            "storeOutlesId" => $this->storeOutlesId,

        );


        echo json_encode($data);
    }
}
