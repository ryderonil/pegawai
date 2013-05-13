<?php
class Bpw extends  CI_Controller{
	
	function Bpw(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('umum_model');
		
		if(from_session('logged_in') == FALSE && from_session('level') != 'bpw'){
			redirect('login');
		}
		elseif($this->session->userdata('logged_in') == TRUE && from_session('level') == 'admin'){
			redirect('admin');
		}
		elseif($this->session->userdata('logged_in') == TRUE && from_session('level') == 'kl'){
			redirect('kl');
		}
		elseif($this->session->userdata('logged_in') == TRUE && from_session('level') == 'manager'){
			redirect('manager');
		}	
	}
	
	function index(){
		$nilai['isi'] = 'bpw/home';
		$this->load->view('bpw/index', $nilai);
	}
	function pendaftaran(){
		
		$data="";
		$this->db->like('nama_paket',$data);
		$this->db->from('paket');
		
		$config['base_url'] = base_url().'bpw/pendaftaran/page/';
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = '10';
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div>';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 1;
		
		$this->pagination->initialize($config); 
		$nilai['hasilnya'] = $this->admin_model->get_paket_daftar($config['per_page'],$this->uri->segment(4),$data);
			
		$nilai['isi'] = 'bpw/pendaftaran';
		
		$this->load->view('bpw/index', $nilai);
	}
	function isi_pendaftaran($id,$harga){
		$nilai['isi'] = 'bpw/form_pendaftaran';
		$nilai['harga'] = $harga;
		
		$nilai['hasilnya'] = $this->admin_model->get_paket_edit($id);
		$nilai['klnya'] = $this->admin_model->get_kl_daftar();
		$this->load->view('bpw/index', $nilai);
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
		if($this->input->post('pekerjaan')==0){
			$pekerjaan = $this->input->post('pekerjaan_lain');
		}
		if($this->input->post('pekerjaan')!=0){
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
			'id_kl' => $this->input->post('kl'),
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
		
		$result = $this->admin_model->listbayar($data);
		redirect('umum/bayar/'.$result[0]->id_jamaah);
	}
	function paket(){
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
			
		$nilai['isi'] = 'bpw/list_paket';
		
		$this->load->view('bpw/index', $nilai);
	}
	function add_paket(){
		$nilai['isi'] = 'bpw/tambah_paket';
		$this->load->view('bpw/index', $nilai);
	}
	
	
	function disable_paket($id){
	$data = array(
			'id_paket' => $id,
			'blokir' => 'Y',
			);		
			$this->admin_model->update_paket($data);
			redirect('bpw/paket');	
	}
	function unable_paket($id){
	$data = array(
			'id_paket' => $id,
			'blokir' => 'N',
			);		
			$this->admin_model->update_paket($data);
			redirect('bpw/paket');	
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
			redirect('bpw/paket');	
	}
	function hapus_paket($id){
		$this->admin_model->del_paket($id);
		redirect('bpw/paket');
	}
	function edit_paket($id){
		$nilai['isi'] = 'bpw/form_edit_paket';
		
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
			redirect('bpw/paket');
	}
	
}