<?php
class Manager extends  CI_Controller{
	
	function Manager(){
		parent::__construct();
		if(from_session('logged_in') == FALSE && from_session('level') != 'manager'){
			redirect('login');
		}
		elseif($this->session->userdata('logged_in') == TRUE && from_session('level') == 'admin'){
			redirect('admin');
		}
		elseif($this->session->userdata('logged_in') == TRUE && from_session('level') == 'kl'){
			redirect('kl');
		}
		elseif($this->session->userdata('logged_in') == TRUE && from_session('level') == 'bpw'){
			redirect('bpw');
		}	
	}
	
	function index(){
		$nilai['isi'] = 'manager/home';
		$this->load->view('manager/index', $nilai);
	}
	
	
}