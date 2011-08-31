<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Credits extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');            
    }

	public function index()
	{
		
		$this->load->view('header',array('title'=>'Citrastop'));
		$this->load->view('the_credits');
		$this->load->view('footer');
		
	}

}

/* End of file credits.php */
/* Location: ./application/controllers/credits.php */