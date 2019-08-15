<?php
/**
 * Created by PhpStorm.
 */

class Store extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model("country");
    }


    public function store_applicant() {
        $ins=array();
        foreach ($_SESSION as $key=>$value) {
            if (strpos($key, 'page') !== false) {
                foreach ($value as $k=>$v) {
                    $ins[$k]=$v;
                }
            }
        }
        $this->db->insert(
            "submissions",$ins
        );
        return true;
    }

}