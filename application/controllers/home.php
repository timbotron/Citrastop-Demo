<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');            
    }

	public function index()
	{
		
		$this->load->view('header',array('title'=>'Citrastop'));
		$this->load->view('hi_there');
		$this->load->view('footer');		
	}	

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
