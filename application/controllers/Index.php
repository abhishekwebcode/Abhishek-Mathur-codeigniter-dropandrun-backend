<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
        define("RBASE","http://13.127.138.244/dropandrun/apply/");
        $this->load->library('session');
    }

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($page=1)
	{
	    if ($page==5) {
            $this->load->view("page$page",
                array("RBASE"=>RBASE,"SESSION"=>$_SESSION)
            );
            return;
        }
		$this->load->view("page$page",array("RBASE"=>RBASE));
	}
}
