<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_mojo extends CI_Model {
    
    function get_user_info($params)
    {
    	$this->db->select('iduser_info')->from('user_info')->where('unique_entry', $params['user_key']);
		$query = $this->db->get();		
		if($query->num_rows()==0) redirect('error/number/900','refresh');
		$row = $query->row_array();
		return $row['iduser_info'];
    }
    function get_users_systems($userid)
    {
    	#TODO
    }
   

}

/* End of file user_info.php */
