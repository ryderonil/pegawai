<?php
class Umum extends  CI_Controller{
	
	function Umum(){
		parent::__construct();
		//$this->load->model('admin_model');
		$this->load->model('umum_model');
		$this->load->model('admin_model');
		
		
		if(from_session('logged_in') == FALSE) {
		redirect('login');	
		}
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
		//$this->db->from('jamaah');
		
		$id = from_session('id');
		$jml = $this->umum_model->nomor_user($id)->num_rows(); 
		$config['base_url'] = base_url().'umum/list_jamaah/page/';//set base url for pagination
		$config['total_rows'] = $jml;//$this->db->count_all_results();//	
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->umum_model->get_jamaah($config['per_page'],$this->uri->segment(4),$data['peg']);
			
		$nilai['isi'] = 'umum/list_jamaah';
		//$nilai['hasilnya'] = $this->admin_model->get_pegawai();
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
			
	}
	function list_jamaah_semua(){
		if(isset($_POST['submit'])){
			$data['peg']=$this->input->post('cari');
			$this->session->set_userdata('peg',$data['peg']);
		}
		else{
			$data['peg']= $this->session->userdata('peg');
		}
		$this->db->like('nama',$data['peg']);
		$this->db->from('jamaah');
		
		$config['base_url'] = base_url().'umum/list_jamaah_semua/page/';//set base url for pagination
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
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function lihat_jamaah($id){
		
		$nilai['hasilnya'] = $this->umum_model->get_detail_jamaah($id);
		$nilai['isi'] = 'umum/lihat_jamaah';
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function edit($id){
		
		$nilai['hasilnya'] = $this->umum_model->get_detail_jamaah($id);
		$nilai['isi'] = 'umum/edit_jamaah';
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function update_jamaah(){
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
			'id_jamaah' => $this->input->post('id'),
			
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
		$this->umum_model->update_jamaah($data);
		
		if(from_session('level') == 'bpw'){
			redirect('umum/lihat_jamaah/'.$this->input->post('id'));
		}
		elseif(from_session('level') == 'kl'){
			redirect('umum/lihat_jamaah/'.$this->input->post('id'));
		}
		else {
		redirect('umum/lihat_jamaah/'.$this->input->post('id'));}
		
	}
	function kelengkapan($id){
		$nilai['hasilnya'] = $this->umum_model->get_detail_jamaah($id);
		$nilai['lengkap'] = $this->umum_model->get_detail_kelengkapan($id);
		$nilai['isi'] = 'umum/kelengkapan';
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function isi_kelengkapan($id){
		$nilai['hasilnya'] = $this->umum_model->get_detail_jamaah($id);
		$nilai['isi'] = 'umum/form_kelengkapan';
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function save_kelengkapan() {
		$data = array(
			'id_jamaah' => $this->input->post('id'),
			'buku_k' => $this->input->post('bk'),
			'ktp' => $this->input->post('ktp'),
			'npwp' => $this->input->post('npwp'),
			'kk' => $this->input->post('kk'),
			'poto' => $this->input->post('foto'),
		);
		$this->umum_model->save_kelengkapan($data);
		redirect('umum/kelengkapan/'.$this->input->post('id'));
	}
	function edit_kelengkapan($id){
		$nilai['hasilnya'] = $this->umum_model->get_detail_kelengkapan($id);
		$nilai['nama'] = $this->umum_model->get_detail_jamaah($id);
		$nilai['isi'] = 'umum/form_edit_kelengkapan';
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function update_kelengkapan(){
		$data = array(
			'id_jamaah' => $this->input->post('id'),
			'buku_k' => $this->input->post('bk'),
			'ktp' => $this->input->post('ktp'),
			'npwp' => $this->input->post('npwp'),
			'kk' => $this->input->post('kk'),
			'poto' => $this->input->post('foto'),
		);
		$this->umum_model->update_kelengkapan($data);
		redirect('umum/kelengkapan/'.$this->input->post('id'));
	}
	function editprofil(){
		$nilai['isi'] = 'umum/form_edit_user';
		$id = from_session('id');
		$nilai['hasilnya'] = $this->admin_model->get_user_edit($id);
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		elseif(from_session('level') == 'manager'){
			$this->load->view('manager/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function update_user(){
		
		$pass_lama = md5($this->input->post('pass'));
		$pass_baru = md5($this->input->post('pass_baru'));
		$pass_baru2 = md5($this->input->post('pass_baru2'));
		
	if($this->input->post('pass_lama')==$pass_lama){
			if($pass_baru==$pass_baru2){
				$data = array(
				'id_user' => $this->input->post('id'),
				'username' => $this->input->post('username'),
				'password' => $pass_baru2,
				'nama' => $this->input->post('nama'),
				'no_telp' => $this->input->post('no_telp')
					);
				$this->admin_model->update_user($data);
			if(from_session('level') == 'bpw'){
			redirect('bpw');
			}
			elseif(from_session('level') == 'kl'){
				redirect('kl');
			}
			elseif(from_session('level') == 'manager'){
				redirect('manager');
			}
			else {
			redirect('admin');}
			}
			else{
			echo '<script languange="javascript">
                alert("password baru tidak sama");
                window.history.back(-1);
            </script>';	
			}	
		}
		else{
			echo '<script languange="javascript">
                alert("password lama salah");
                window.history.back(-1);
            </script>';
		}
	}
	function edit_bayar($id){
		$nilai['hasilnya'] = $this->umum_model->get_detail_jamaah($id);
		$nilai['isi'] = 'umum/form_edit_bayar';
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function save_bayar(){
		$bayar = $this->input->post('bayar_baru');
		$cicil = $this->input->post('cicil');
		
		$baru = $bayar + $cicil;
		$data = array(
			'id_jamaah' => $this->input->post('id'),
			'pembayaran' => $baru,
			'cara_bayar' => $this->input->post('keterangan'),
			
		);
		$this->umum_model->update_jamaah($data);
		redirect('umum/kelengkapan/'.$this->input->post('id'));
	}
	function edit_paspor($id){
		$nilai['hasilnya'] = $this->umum_model->get_detail_jamaah($id);
		$nilai['isi'] = 'umum/form_edit_paspor';
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function save_paspor(){
		$pas1 =  $this->input->post('pas_awal');
		$pas2 = $this->input->post('pas_akhir');
		$paspor = $pas1.' '.$pas2;
		
		$baru = $bayar + $cicil;
		$data = array(
			'id_jamaah' => $this->input->post('id'),
			'no_paspor' => $paspor,	
			'tempat_paspor' => $this->input->post('tempat_dikeluarkan'),
			
		);
		$this->umum_model->update_jamaah($data);
		redirect('umum/kelengkapan/'.$this->input->post('id'));
	}
	function jumlah_jamaah($id){
		if(isset($_POST['submit'])){
			$data['peg']=$this->input->post('cari');
			$this->session->set_userdata('peg',$data['peg']);
		}
		else{
			$data['peg']= $this->session->userdata('peg');
		}
		$this->db->like('nama',$data['peg']);
		$this->db->from('jamaah');
		$this->db->where('id_paket', $id);
		
		$config['base_url'] = base_url().'umum/jumlah_jamaah/'.$id.'/page/';//set base url for pagination
		$config['total_rows'] = $this->db->count_all_results();//$jml;	
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 5;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_jamaah_jml($config['per_page'],$this->uri->segment(5),$data['peg'],$id);
		
		$nilai['nomor_paket'] = $this->admin_model->get_jamaah_id($id);
		$nilai['isi'] = 'admin/per_paket';
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function jumlah_jamaah_user($id){
		if(isset($_POST['submit'])){
			$data['peg']=$this->input->post('cari');
			$this->session->set_userdata('peg',$data['peg']);
		}
		else{
			$data['peg']= $this->session->userdata('peg');
		}
		$this->db->like('nama',$data['peg']);
		//$this->db->from('jamaah');
				
		$jml = $this->umum_model->nomor_user($id)->num_rows();
		$config['base_url'] = base_url().'umum/jumlah_jamaah_user/'.$id.'/page/';//set base url for pagination
		$config['total_rows'] = $jml;//$this->db->count_all_results();//$jml;	
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 5;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->umum_model->get_jamaah_user($config['per_page'],$this->uri->segment(5),$data['peg'],$id);

		$nilai['nomor_user'] = $this->umum_model->nomor_user($id);
		$nilai['isi'] = 'umum/list_jamaah_user';
		//$nilai['hasilnya'] = $this->admin_model->get_pegawai();
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function data_jamaah(){
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
		
		
		$config['base_url'] = base_url().'umum/data_jamaah/page/';//set base url for pagination
		$config['total_rows'] = $this->db->count_all_results();//$jml;	
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_data_penjualan($config['per_page'],$this->uri->segment(4),$data['peg']);
			
		$nilai['isi'] = 'umum/list_data_jamaah_awal';
		//$nilai['hasilnya'] = $this->admin_model->get_pegawai();
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function jumlah_jamaah_paket($id){
		if(isset($_POST['submit'])){
			$data['peg']=$this->input->post('cari');
			$this->session->set_userdata('peg',$data['peg']);
		}
		else{
			$data['peg']= $this->session->userdata('peg');
		}
		$this->db->like('nama',$data['peg']);
		$this->db->from('jamaah');
		$this->db->where('id_paket', $id);
		
		$config['base_url'] = base_url().'umum/jumlah_jamaah_paket/'.$id.'/page/';//set base url for pagination
		$config['total_rows'] = $this->db->count_all_results();//$jml;	
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 5;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_jamaah_jml($config['per_page'],$this->uri->segment(5),$data['peg'],$id);
		
		$nilai['nomor_paket'] = $this->admin_model->get_jamaah_id($id);
		$nilai['noperpage'] = array();
		
		$nilai['isi'] = 'umum/per_paket';
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function berdasarkan_paket(){
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
		
		
		$config['base_url'] = base_url().'umum/berdasarkan_paket/page/';//set base url for pagination
		$config['total_rows'] = $this->db->count_all_results();//$jml;	
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_open'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_paket_daftar($config['per_page'],$this->uri->segment(4),$data['peg']);
			
		$nilai['isi'] = 'umum/list_data_tiappaket_awal';
		//$nilai['hasilnya'] = $this->admin_model->get_pegawai();
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function berdasarkan_paket_all(){
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
		
		
		$config['base_url'] = base_url().'umum/berdasarkan_paket_all/page/';//set base url for pagination
		$config['total_rows'] = $this->db->count_all_results();//$jml;	
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_open'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_paket($config['per_page'],$this->uri->segment(4),$data['peg']);
			
		$nilai['isi'] = 'umum/list_data_tiappaket_awal';
		//$nilai['hasilnya'] = $this->admin_model->get_pegawai();
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	function jumlah_jamaah_paket_user($id){
		if(isset($_POST['submit'])){
			$data['peg']=$this->input->post('cari');
			$this->session->set_userdata('peg',$data['peg']);
		}
		else{
			$data['peg']= $this->session->userdata('peg');
		}
		$this->db->like('nama',$data['peg']);
		//$this->db->from('jamaah');
		//$this->db->where('id_paket', $id);
		
		$jml = $this->admin_model->nomor_jamaah_ueser($id)->num_rows();
		$config['base_url'] = base_url().'umum/jumlah_jamaah_paket_user/'.$id.'/page/';//set base url for pagination
		$config['total_rows'] = $jml;//$this->db->count_all_results();//$jml;	
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 5;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_jamaah_jml_user($config['per_page'],$this->uri->segment(5),$data['peg'],$id);
		
		$nilai['nomor_paket'] = $this->admin_model->get_jamaah_id($id);
		$nilai['isi'] = 'umum/per_paket_user';
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
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
		
		
		$config['base_url'] = base_url().'umum/penjualan/page/';//set base url for pagination
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
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
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
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
	//-----------------download excel------------------------------
	function ex_semua_jamaah(){
		$data['hasilnya']=$this->umum_model->ex_semua_jamaah();
		$this->load->view('download/semua_jamaah', $data);
	}
	function ex_semua_jamaah_aktif(){
		$data['hasilnya']=$this->umum_model->ex_semua_jamaah_aktif();
		$this->load->view('download/semua_jamaah_aktif', $data);
	}
	function ex_per_paket($id){
		$data['nomor_paket'] = $this->admin_model->get_jamaah_id($id);
		$data['hasilnya']=$this->umum_model->ex_per_paket($id);
		$this->load->view('download/ex_per_paket', $data);
	}
	function ex_jamaah_user($id){
		$data['hasilnya']=$this->umum_model->ex_jamaah_user($id);
		$data['nomor_user'] = $this->umum_model->ex_nomor_user($id);
		$this->load->view('download/ex_jamaah_user', $data);
	}
	function ex_perpaket_user($id){
		$data['hasilnya']=$this->umum_model->ex_perpaket_user($id);
		$data['nomor_paket'] = $this->admin_model->get_jamaah_id($id);
		$this->load->view('download/ex_perpaket_user', $data);
	}
	function ex_all_jamaah(){
		$data['hasilnya']=$this->umum_model->ex_all_jamaah_user();
		$this->load->view('download/ex_all_jamaah', $data);	
	}
	function list_penjualan(){
		if(isset($_POST['submit'])){
			$data['peg']=$this->input->post('cari');
			$this->session->set_userdata('peg',$data['peg']);
		}
		else{
			$data['peg']= $this->session->userdata('peg');
		}
		$this->db->like('nama',$data['peg']);
		$this->db->from('jamaah');
		$this->db->join('paket', 'jamaah.id_paket = paket.id_paket');
		$this->db->where('paket.blokir', 'N');
		
		$config['base_url'] = base_url().'umum/list_penjualan/page/';//set base url for pagination
		$config['total_rows'] = $this->db->count_all_results();//$jml;	
		
		$config['per_page'] = '10';
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_jamaah2($config['per_page'],$this->uri->segment(4),$data['peg']);
			
		$nilai['isi'] = 'umum/list_jamaah_aktif';
		//$nilai['hasilnya'] = $this->admin_model->get_pegawai();
		
		if(from_session('level') == 'bpw'){
		$this->load->view('bpw/index', $nilai);
		}
		elseif(from_session('level') == 'kl'){
			$this->load->view('kl/index', $nilai);
		}
		else {
		$this->load->view('admin/index', $nilai);}
	}
}