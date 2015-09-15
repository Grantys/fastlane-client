<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Garage extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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
		$this->load->view('garage');
                // load footer
                $this->load->view('common/footer');
	}
}
