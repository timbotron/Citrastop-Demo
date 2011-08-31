<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Commute extends CI_Controller {

	public function __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');

            
    }

	public function index()
	{
		
		redirect('', 'refresh');
	}
	
	public function usr($user_key=FALSE)
	{
		if(!$user_key) redirect('', 'refresh');
		$this->load->library('User_info',array('user_key'=>$user_key));
		echo $this->user_info->user_id; //temporary, for testing purposes
		
		/*	How we'll get all the system info, and loop through it
		$atest[0] = 'bart';
		$this->load->library($atest[0]);
		$this->$atest[0]->test();
		*/
	}
	
	# A test to get the jQuery working properly, then we'll make it dynamic based on users stops
	public function test()
	{
		$this->load->view('header',array('title'=>'Citrastop'));
		$this->load->view('test_view');
		$this->load->view('footer');
	}

}

/* End of file commute.php */
/* Location: ./application/controllers/commute.php */
