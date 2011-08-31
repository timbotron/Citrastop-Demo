<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('print_error'))
{
	function error_text($errorcode)
	{
		if(!is_numeric($errorcode)) $errorcode = 100;
		switch($errorcode)
		{
		case 100:
			$returnme['title'] = "I'm afraid I can't do that.";
			$returnme['body'] = "I'm sorry, an error has occured. I can assure you that this is our most generic error, most others are much better.";
			break;
		case 101:
			$returnme['title'] = "No such person.";
			$returnme['body'] = "I'm sorry, apparently the url you are trying to use is not tied to any account. You should try logging in via the ".anchor('','front door').". If that is how you got here, then we have a serious problem. Please contact support and let me know what happened.";
			break;
		default:
			$returnme['title'] = "I'm afraid I can't do that.";
			$returnme['body'] = "I'm sorry, an error has occured. I can assure you that this is our most generic error, most others are much better.";
			break;

		}
		return $returnme;
	}
	
}



/* End of file access.php */
/* Location: ./system/application/helpers/access.php */
