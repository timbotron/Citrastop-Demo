<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');

            
    }

	public function index()
	{
		$this->load->view('header',array('title'=>'Citrastop'));
		$this->load->view('log_me_in');
		$this->load->view('footer');		
		
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
