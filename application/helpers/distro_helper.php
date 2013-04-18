<?php
function from_session($kunci){
	$CI =& get_instance();
	
	$hasil=$CI->session->userdata($kunci);
	return $hasil;
}