<!DOCTYPE html> 
<html> 
	<head> 
	<title><?php echo $title; ?></title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b2/jquery.mobile-1.0b2.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
	<script src="<?php echo base_url();?>scripts/jqm_tweaks.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0b2/jquery.mobile-1.0b2.min.js"></script>
</head> 
<body> 

<div data-role="page" data-theme="a">
	<div data-role="header" data-position="inline">
	<a href="<?php echo base_url();?>login/">Login</a>
	<h1><?php echo $title; ?></h1>
	<a href="<?php echo base_url();?>support/">Support</a>
</div>
