<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
            //never load libraries or models in here.
        parent::__construct();
    }
        //load helpers
	public function index()
	{
        $this->load->helper('url');

        $data['title'] = "Dashboard";
// declare the echo this variable for the hello_world view
        $data['echo_this'] = "Hello im from the home controller";
        
		$this->load->view('include/header', $data);
        $this->load->view('pages/hello_world', $data);
        $this->load->view('include/footer');
	}
}
