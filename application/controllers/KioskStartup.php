<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KioskStartup extends CI_Controller
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

    function index(){ 
        $data = array( 
            "data" =>  $this->model->sql("SELECT * FROM cso1_terminal where presence = 1 order by inputDate ASC")
        );
        echo json_encode($data); 

    }

    function Account(){ 
  
        if($this->input->get('token') ){  
            $token = $this->input->get('token');
            $this->terminalId = $this->model->select("id", "cso1_terminal", "status = 1 and presence = 1 and token = '$token' ");
            $this->storeOutlesId = $this->model->select("storeOutlesId", "cso1_terminal", "status = 1 and presence = 1 and token = '$token'");

            $systemOnline = true;
            if($this->model->select("status","cso1_storeOutles","id='".$this->storeOutlesId."'") == 0){
                $systemOnline = false;
            }
    
            if($this->model->select("status","cso1_terminal","id='".$this->terminalId."'") == 0){
                $systemOnline = false;
            }

            $id = $this->model->select("id","cso1_terminal","token = '".$this->input->get('token')."'");
            $data = $id ?  array(
                "token" => $this->input->get('token'),
                "terminal" => $this->model->sql("select * from cso1_terminal where token = '".$this->input->get('token')."'")[0], 
                "note" => "",
                "error" => false, 
                "systemOnline" => $systemOnline,
            ) : array(
                "token" => "",
                "terminal" => [],
                "note" => "This terminial not register!",
                "error" => true,
                "systemOnline" => $systemOnline,
            );
          
        }else{
            $data = array(
                "error" => true, 
            );
        }

        echo json_encode($data); 
    }

    function login(){ 
        $post =   json_decode(file_get_contents('php://input'), true);
        $error = true;
        if ($post) {
            $update = array(
                "token" => $post['title'],
                "updateDate" => time(),
            );
            $this->db->update("cso1_terminal", $update," id = '".$post['id']."' "); 
        }
        echo   json_encode($post);

    }

    // function crytopjs()
    // {
    //     $this->load->library('cryptojsaes');
    //     echo "masuk Key : ". $this->keygen; 
        
    //     // decrypt
    //     $encrypted = "U2FsdGVkX1+bURcTZ5Yy1UVNv4XDzosWSHjtGGu7DoaOnih6KKk3/9LKCViBC5W9azp8Vjd2U8PNuCRWNiJKGZ++5ZK9OGExLd/93EDOA9Y9vbe/KKx+fKCzhwCvyQuATEwZnvUoUnahLmLEP6bp/niFFbh0JHdMJoOH6c51de7kJBmt18nLvoocvZ8CpWfGpbjnIx7aXdN615kSCHRQXO/kVFIiYjkXulJrMUcZFKq1DMguj6MqPynaC8Vn17g56TPvbrqYXE9xFA4Wwcr30SFerzxAdj96N5T6qWhCvsi0ZP4jbFsWRoiV+zl8n0XVdhXuMSOOKGbUTE1woEGeZApnC7yeYu+KSxccS8VlyAXURKHPm2FOJIp1rYNjhmgUFV93W/jRKAuEu8QFrVFVzuHOOHKdHgAJk4ZBw4YJIYbXoSEXVO6W6otBdsN1jmrpsFU4YJNxZ1Y/sDzeuurs1KKiuWdVgh1NJDhICyCxAXeF1qEmXzcy1J6gqg3oaUl6+8KqFuU1+7J1aqHo+Poci7u9oX9gFv9lzkWORetw/85viq7NBUsprsNpVtFYrdDjUKM4g+NeM2LfOUOcaEjZWd8U19yArLF4BBMt812c8HWrAh/mJYKG/BGPR8WuHV9VbnCjWTtbKR6ovqjkm2wxRN94M0fijXG+gsIAJY3bTGwUhZBxIy9AbIT+w0xbOO+pEAl7nhnh1xlrmlSaq6RfGSUhMyFaFNFQ80VGwIe/vGgftJyIfGxaeP73YTKRhwljgp7GEIHamjUibKOpCWI9GnFrRiF4m14M6ejEtpKS2pdwyH/ApoSdsXU7+B+TJeu68X6V8iRx60tbwj2pj+0ekKf44fj0ov2aMIhoxhylFsK2pOnAMEGSTyl1mbF8GmR9CY4j6aGA+5dg65yVGSHjN2RBYJchvbvHpJUUdi8Ihh1d+mmSatkAKFuyIhoF6d0V43heNvDzRS1I17/Kr7ioxlky9RNa9yzKoszBzeWKEqyY4WFGcqr9Pm8sZw4evGGkU527/GwWIIOS748KUmn9niadBGq1GmclNAwYbVAynTZanrDFShBsFxHxAGIdvF/GocYbQfyXgtw8sbzhABkhZSbvfawito8gE8jer5OkD9Q=";
    //     $password = $this->keygen;
    //     $decrypted = $this->cryptojsaes->decrypt($encrypted, $password);
 
    //     echo " \n\nDecrypted: \n\n" . print_r($decrypted, true) . "\n";

    // }
}
