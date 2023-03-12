<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
            //never load libraries or models in here.
        parent::__construct();
    }
        //load helpers
	public function index()
	{
        $this->load->helper('url');

        //declare page title
        $data['title'] = "Home";

		$this->load->view('include/header', $data);
        $this->load->view('include/sidebar_view');
        $this->load->view('pages/home_view');
        $this->load->view('include/footer');
	}
}
