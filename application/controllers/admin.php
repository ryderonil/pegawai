<?php
class Admin extends  CI_Controller{
	
	function Admin(){
		parent::__construct();
		$this->load->model('admin_model');
		
		if(from_session('logged_in') == FALSE && from_session('level') != 'admin'){
		redirect('login');	
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
	}
	
	function index(){
		$nilai['isi'] = 'admin/home';
		$this->load->view('admin/index', $nilai);
	}
	function list_paket(){
		
		
		$data="";
		$this->db->like('nama_paket',$data);
		$this->db->from('paket');
		
		$config['base_url'] = base_url().'admin/list_paket/page/';
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = '10';
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_paket($config['per_page'],$this->uri->segment(4),$data);
			
		$nilai['isi'] = 'admin/list_paket';
		
		$this->load->view('admin/index', $nilai);
	}
	function add_paket(){
		$nilai['isi'] = 'admin/tambah_paket';
		$this->load->view('admin/index', $nilai);
	}
	function disable_paket($id){
	$data = array(
			'id_paket' => $id,
			'blokir' => 'Y',
			);		
			$this->admin_model->update_paket($data);
			redirect('admin/list_paket');	
	}
	function unable_paket($id){
	$data = array(
			'id_paket' => $id,
			'blokir' => 'N',
			);		
			$this->admin_model->update_paket($data);
			redirect('admin/list_paket');	
	}
	
	function save_paket(){
		
		$data = array(
		
			'nama_paket' => $this->input->post('nama_paket'),
			'jadwal_awal' => $this->input->post('tgl_brngkt'),
			'jadwal_akhir' => $this->input->post('tgl_plg'),
			'harga_qrd' => $this->input->post('harga_qrd'),
			'harga_tpl' => $this->input->post('harga_tpl'),
			'harga_dbl' => $this->input->post('harga_dbl'),
			'jumlah_max' => $this->input->post('jumlah'),
			'ket' => $this->input->post('ket')
			);
			
			$this->admin_model->save_paket($data);
			redirect('admin/list_paket');	
	}
	function hapus_paket($id){
		$this->admin_model->del_paket($id);
		redirect('admin/list_paket');
	}
	function edit_paket($id){
		$nilai['isi'] = 'admin/form_edit_paket';
		
		$nilai['hasilnya'] = $this->admin_model->get_paket_edit($id);
		$this->load->view('admin/index', $nilai);
	}
	function update_paket(){
		$data = array(
			'id_paket' => $this->input->post('id'),
			'nama_paket' => $this->input->post('nama_paket'),
			'jadwal_awal' => $this->input->post('tgl_brngkt'),
			'jadwal_akhir' => $this->input->post('tgl_plg'),
			'harga_qrd' => $this->input->post('harga_qrd'),
			'harga_tpl' => $this->input->post('harga_tpl'),
			'harga_dbl' => $this->input->post('harga_dbl'),
			'jumlah_max' => $this->input->post('jumlah'),
			'ket' => $this->input->post('ket')
			);
			
			$this->admin_model->update_paket($data);
			redirect('admin/list_paket');
	}
	function pendaftaran(){
		
		$data="";
		$this->db->like('nama_paket',$data);
		$this->db->from('paket');
		
		$config['base_url'] = base_url().'admin/pendaftaran/page/';
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = '10';
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_paket_daftar($config['per_page'],$this->uri->segment(4),$data);
			
		$nilai['isi'] = 'admin/pendaftaran';
		
		$this->load->view('admin/index', $nilai);
	}
	function isi_pendaftaran($id,$harga){
		$nilai['isi'] = 'admin/form_pendaftaran';
		$nilai['harga'] = $harga;
		$nilai['hasilnya'] = $this->admin_model->get_paket_edit($id);
		$this->load->view('admin/index', $nilai);
	}
	function save_jamaah(){
		$tgl = $this->input->post('tgl');
		$bln = $this->input->post('bln');
		$thn = $this->input->post('thn');
		$tgl_lahir = $tgl.' '.$bln.' '.$thn;	
		//echo $tgl_lahir;
		$pas1 =  $this->input->post('pas_awal');
		$pas2 = $this->input->post('pas_akhir');
		$paspor = $pas1.' '.$pas2;
		//echo $paspor;
		$tlp1 = $this->input->post('t1');
		$tlp2 = $this->input->post('t2');
		$tlp = $tlp1.'-'.$tlp2;
		//echo $tlp;
		if($this->input->post('pekerjaan')=='0'){
			$pekerjaan = $this->input->post('pekerjaan_lain');
		}
		if($this->input->post('pekerjaan')!='0'){
			$pekerjaan = $this->input->post('pekerjaan');
		}
		if($this->input->post('baju')!= '0'){
			$baju = $this->input->post('baju');
		}
		if($this->input->post('baju')== '0'){
			$baju = $this->input->post('baju_lain');
		} 
		$data = array(
			'id_paket' => $this->input->post('id_paket'),
			'id_user' => $this->input->post('id'),
			'harga' => $this->input->post('harga'),
			'nama' => $this->input->post('nama_lengkap'),
			'bin' => $this->input->post('bin'),
			'kel' => $this->input->post('kel'),
			'tempat_lahir' => $this->input->post('tempat'),
			'tgl_lahir' => $tgl_lahir,
			'no_ktp' => $this->input->post('no_ktp'),
			'alamat_ktp' => $this->input->post('alamat_ktp'),
			'no_rumah' => $this->input->post('no_alamat'),
			'rt' => $this->input->post('rt'),
			'rw' => $this->input->post('rw'),
			'desa' => $this->input->post('desa'),
			'kec' => $this->input->post('kecamatan'),
			'kab' => $this->input->post('kabupaten'),
			'prof' => $this->input->post('propinsi'),
			'pos_ktp' => $this->input->post('kode_pos'),
			'no_paspor' => $paspor,	
			'tempat_paspor' => $this->input->post('tempat_dikeluarkan'),
			'alamat_rumah' => $this->input->post('alamat_rumah'),
			'pos' => $this->input->post('kode_pos_rumah'),
			'tlp' => $tlp,
			'hp' => $this->input->post('hp'),	
			'pendidikan' => $this->input->post('pendidikan'),
			'pekerjaan' => $pekerjaan,
			'pembayaran' => $this->input->post('pembayaran'),
			'cara_bayar' => $this->input->post('keterangan'),
			'mahram' => $this->input->post('mahram'),
			'hub' => $this->input->post('hub'),
			'muka' => $this->input->post('muka'),
			'rambut' => $this->input->post('rambut'),
			'alis' => $this->input->post('alis'),
			'hidung' => $this->input->post('hidung'),
			'tanda_lain' => $this->input->post('lain'),
			'gol_darah' => $this->input->post('gol_darah'),
			'tinggi' => $this->input->post('tinggi'),
			'berat' => $this->input->post('berat'),
			'baju' => $baju,
		
		);
		$this->admin_model->save_jamaah($data);
		redirect('admin/pendaftaran');
	}
	function list_jamaah(){
		if(isset($_POST['submit'])){
			$data['peg']=$this->input->post('cari');
			$this->session->set_userdata('peg',$data['peg']);
		}
		else{
			$data['peg']= $this->session->userdata('peg');
		}
		$this->db->like('nama',$data['peg']);
		$this->db->from('jamaah');
		
		$config['base_url'] = base_url().'admin/list_jamaah/page/';//set base url for pagination
		$config['total_rows'] = $this->db->count_all_results();//$jml;	
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_jamaah($config['per_page'],$this->uri->segment(4),$data['peg']);
			
		$nilai['isi'] = 'admin/list_jamaah';
		//$nilai['hasilnya'] = $this->admin_model->get_pegawai();
		
		$this->load->view('admin/index', $nilai);
	}
	function list_user(){
		if(isset($_POST['submit'])){
			$data['peg']=$this->input->post('cari');
			$this->session->set_userdata('peg',$data['peg']);
		}
		else{
			$data['peg']= $this->session->userdata('peg');
		}
		$this->db->like('nama',$data['peg']);
		$this->db->from('user');
		
		$config['base_url'] = base_url().'admin/list_user/page/';//set base url for pagination
		$config['total_rows'] = $this->db->count_all_results();//$jml;	
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_user($config['per_page'],$this->uri->segment(4),$data['peg']);
			
		$nilai['isi'] = 'admin/list_user';
		//$nilai['hasilnya'] = $this->admin_model->get_pegawai();
		
		$this->load->view('admin/index', $nilai);
	}
	function list_kl(){
		if(isset($_POST['submit'])){
			$data['peg']=$this->input->post('cari');
			$this->session->set_userdata('peg',$data['peg']);
		}
		else{
			$data['peg']= $this->session->userdata('peg');
		}
		$this->db->like('nama_kl',$data['peg']);
		$this->db->from('kl');
		
		$config['base_url'] = base_url().'admin/list_user/page/';//set base url for pagination
		$config['total_rows'] = $this->db->count_all_results();//$jml;	
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_kl($config['per_page'],$this->uri->segment(4),$data['peg']);
			
		$nilai['isi'] = 'admin/list_kl';
		//$nilai['hasilnya'] = $this->admin_model->get_pegawai();
		
		$this->load->view('admin/index', $nilai);
	}
	function add_user(){
		$nilai['isi'] = 'admin/tambah_user';
		$this->load->view('admin/index', $nilai);
	}
	function add_kl(){
		$nilai['isi'] = 'admin/tambah_kl';
		$nilai['hasilnya'] = $this->admin_model->get_kl2();
		$this->load->view('admin/index', $nilai);
	}
	function save_user(){
		
		$passwordx = md5($this->input->post('password'));
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $passwordx,
			'nama' => $this->input->post('nama'),
			'no_telp' => $this->input->post('no_tlp'),
			'level' => $this->input->post('level'),
		'kota' => $this->input->post('kota')
			);
			
			$this->admin_model->save_user($data);
			redirect('admin/list_user');
	}
	function save_kl(){
		$data = array(
			'id_user' => $this->input->post('jawab'),
			'nama_kl' => $this->input->post('nama_kl'),
			'alamat' => $this->input->post('kota')
			);
			
			$this->admin_model->save_kl($data);
			redirect('admin/list_kl');
	}
	function edit_user($id){
		$nilai['isi'] = 'admin/form_edit_user';
		
		$nilai['hasilnya'] = $this->admin_model->get_user_edit($id);
		$this->load->view('admin/index', $nilai);
	}
	function update_user(){
		if ($this->input->post('pass_baru') == null){
			$passwordx = $this->input->post('pass_lama');
		}
		else {
		$passwordx = md5($this->input->post('pass_baru'));}
		$data = array(
			'id_user' => $this->input->post('id'),
			'username' => $this->input->post('username'),
			'password' => $passwordx,
			'nama' => $this->input->post('nama'),
			'no_telp' => $this->input->post('no_telp'),
			'blokir' => $this->input->post('blokir'),
		'kota' => $this->input->post('kota')
			);
			
			$this->admin_model->update_user($data);
			redirect('admin/list_user');
	}
	function penjualan(){
		if(isset($_POST['submit'])){
			$data['peg']=$this->input->post('cari');
			$this->session->set_userdata('peg',$data['peg']);
		}
		else{
			$data['peg']= $this->session->userdata('peg');
		}
		$this->db->like('nama_paket',$data['peg']);
		//$this->db->group_by('tgl_berangkat');
		$this->db->from('paket');
		
		
		$config['base_url'] = base_url().'admin/penjualan/page/';//set base url for pagination
		$config['total_rows'] = $this->db->count_all_results();//$jml;	
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_penjualan($config['per_page'],$this->uri->segment(4),$data['peg']);
			
		$nilai['isi'] = 'admin/list_penjualan';
		//$nilai['hasilnya'] = $this->admin_model->get_pegawai();
		
		$this->load->view('admin/index', $nilai);
	}
	function penjualan_user(){
		if(isset($_POST['submit'])){
			$data['peg']=$this->input->post('cari');
			$this->session->set_userdata('peg',$data['peg']);
		}
		else{
			$data['peg']= $this->session->userdata('peg');
		}
		$this->db->like('nama_kl',$data['peg']);
		$this->db->from('kl');
		
		$config['base_url'] = base_url().'umum/penjualan_user/page/';//set base url for pagination
		$config['total_rows'] = $this->db->count_all_results();//$jml;	

		$config['per_page'] = '10';
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_kl($config['per_page'],$this->uri->segment(4),$data['peg']);
			
		$nilai['isi'] = 'admin/list_penjualan_user';
		//$nilai['hasilnya'] = $this->admin_model->get_pegawai();
		
		$this->load->view('admin/index', $nilai);
	}
	function download(){
		$data['paket']=$this->admin_model->download();
		$this->load->view('admin/download_excel', $data);
	}
	function download2(){
		$nilai['paket']=$this->admin_model->download();
		$nilai['isi'] = 'admin/download_excel';
		
		$this->load->view('admin/index', $nilai);
	}
}