<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->helper(array('url','error'));            
    }

	public function index()
	{		
		redirect('error/number/100','refresh');	
	}	
	public function number($error_code)
	{
		$error_data = error_text($error_code);
		$this->load->view('header',array('title'=>'Citrastop'));
		$this->load->view('error_page',$error_data);
		$this->load->view('footer');		
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
