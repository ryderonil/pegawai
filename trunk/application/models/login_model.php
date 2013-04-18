<?php
class Login_model extends CI_Model{
	function Login_model(){
		parent::__construct();
	}
	function login($username,$passwordx){
		$query =$this->db->get_where('user',array('username'=>$username,'password'=>$passwordx, 'blokir' => 'N'));
		return $query;
	}
}