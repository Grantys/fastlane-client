<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
        public function __construct() {
                parent::__construct();   	 
                // load a language
                $this->lang->load("login","english");
    }
    
    
	public function index()
	{
                // load header
                $this->load->view('common/header');
                //load page
		$this->load->view('home');
                // load footer
                $this->load->view('common/footer');
	}
}
