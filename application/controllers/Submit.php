<?php
/**
 * Created by PhpStorm.
 */

class Submit extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        $this->load->library('session');
    }

    public function send($page) {
        if ($page==4) {
            if (!isset($_SESSION["page1"]["mobile"])) {
                echo json_encode(array("success" => false, "message" => "Please Enter Phone Number in 1st step"));
                die();
            }
            $phone = $_SESSION["page1"]["mobile"];
            $up="uploads/$phone/";
            if (!is_dir($up.DIRECTORY_SEPARATOR)) {
                mkdir($up.DIRECTORY_SEPARATOR, 0777, true);
            }
            $bool=true;
            $files_array=array();
            foreach ($_FILES as $key=>$value) {
                $files_array[$key]=true;
                $dest=$up.$key."__".$value['name'];
                if ($value["size"]==0) {
                    $files_array[$key]=false;
                }
                if (!move_uploaded_file($value['tmp_name'],$up.$key."__".$value['name'])) {
                    $bool=false;
                    $files_array[$key]=false;
                }
                else {
                    $files_array[$key]=strval(true)."::__::".$dest;
                }

            }
            if (!$bool) {
                echo json_encode(array("success"=>false));die();
            }
            $this->session->set_userdata( array("page4"=>$files_array));
            echo json_encode(array("success"=>true));
            return;
        }
        $this->session->set_userdata( array("page$page"=>$_POST));
        echo json_encode(array("success"=>true));
    }

    public function get() {
        header("Content-Type: text/plain");
        echo json_encode($_SESSION);
    }

    public function register() {
        $this->load->model("store");
        $this->store->store_applicant();
        echo json_encode(array("success"=>true));
    }


    public function demo() {
        $this->load->model("country");
        echo $this->country->getCode($_GET["code"]);
    }

}