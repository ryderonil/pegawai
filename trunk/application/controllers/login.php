<?php
class Login extends CI_Controller{
	var $CI=NULL;
	function Login(){
		parent::__construct();
	}
	function index(){
		if($this->session->userdata('logged_in') == TRUE && from_session('level') == 'admin'){
			redirect('admin');	
		}
		elseif($this->session->userdata('logged_in') == TRUE && from_session('level') == 'manager'){
			redirect('manager');
		}
		elseif($this->session->userdata('logged_in') == TRUE && from_session('level') == 'kl'){
			redirect('kl');
		}
		elseif($this->session->userdata('logged_in') == TRUE && from_session('level') == 'bpw'){
			redirect('bpw');
		}
		else{
			$this->load->view('login/login');
		}
		
	}
	function masuk(){
		$this->load->model('login_model');
		$username=$this->input->post('username');
		$password=$this->input->post('password');	
		$passwordx = md5($password);
		$sukses=$this->login_model->login($username,$passwordx)->num_rows();
		
		if($sukses > 0){
			$new_data=array(
				'username'=>$this->login_model->login($username,$passwordx)->row()->username,
				'password'=>$this->login_model->login($username,$passwordx)->row()->password,
				'id'=>$this->login_model->login($username,$passwordx)->row()->id_user,
				'nama'=>$this->login_model->login($username,$passwordx)->row()->nama,
				//'nama_kl'=>$this->login_model->login($username,$passwordx)->row()->nama_kl,
				'level'=>$this->login_model->login($username,$passwordx)->row()->level,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($new_data);
			if(from_session('level') == 'admin'){
				redirect('admin');
			}
			elseif(from_session('level') == 'manager'){
				redirect('manager');
			}
			elseif(from_session('level') == 'bpw'){
				redirect('bpw');
			}
			else{
				redirect('kl');
			}
		}
		else{
			
			//redirect('home');
			echo '<script languange="javascript">
                alert("password / username salah atau ada field yang kosong. Mungkin anda diblokir");
                window.history.back(-1);
            </script>';
		}
	}
	function keluar(){
	
		$this->session->sess_destroy();
		redirect('login');
	}
}