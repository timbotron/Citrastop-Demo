<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_info {
	public $user_key;
	public $user_id;
	public $used_systems;
	
	public function __construct($passed_key)
    {
        $CI =& get_instance();
        $this->user_key=$passed_key;
        $CI->load->database();
        $CI->load->model('User_mojo');
        $this->user_id = $CI->User_mojo->get_user_info($passed_key);       
        
        
    }

    public function set_key($passed_key)
    {
    	$this->user_key=$passed_key;
    }
}

/* End of file user_info.php */
