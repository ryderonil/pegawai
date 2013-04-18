<?php
class Admin_model extends CI_Model {
	
	function Admin_model(){
		parent::__construct();
	}
	function get_paket($perpage,$uri,$key){

	$this->db->select('*');
	$this->db->from('paket');
	$this->db->order_by("blokir", 'desc'); 
	if(!empty($key)){
		$this->db->like('id_paket',$key);
		}	
	$this->db->order_by('id_paket');
	
	$kirim=$this->db->get('',$perpage,$uri);
	if($kirim->num_rows()>0)
		return $kirim->result_array();	
		else
		return null;
	}
	function get_paket_daftar($perpage,$uri,$key){
	$this->db->select('*');
	$this->db->from('paket');
	$this->db->where('blokir', 'N');

	if(!empty($key)){
		$this->db->like('id_paket',$key);
		}	
	$this->db->order_by('id_paket');
	
	$kirim=$this->db->get('',$perpage,$uri);
	if($kirim->num_rows()>0)
		return $kirim->result_array();	
		else
		return null;
	}
	
	function save_paket($data){
    	$this->db->insert('paket', $data);
    }
    function del_paket($id){
    	$this->db->where('id_paket', $id);
		$this->db->delete('paket');
    }
    function get_paket_edit($id){
    	$this->db->where('id_paket', $id);
		return $this->db->get('paket');
    }
    function update_paket($data){
    	$this->db->where('id_paket', $data['id_paket']);
		$this->db->update('paket', $data);
    }
	function save_jamaah($data){
    	$this->db->insert('jamaah', $data);
    }
    function get_jamaah($perpage,$uri,$key){
	    	
	$this->db->select('*');
	$this->db->from('jamaah');
	$this->db->order_by('id_jamaah', 'desc');
	if(!empty($key)){
		$this->db->like('nama',$key);
		}	
	$this->db->order_by('id_jamaah');
	$kirim=$this->db->get('',$perpage,$uri);
	if($kirim->num_rows()>0)
		return $kirim->result_array();	
		else
		return null;
    }
	function get_jamaah2($perpage,$uri,$key){
	    	
	$this->db->select('*');
	$this->db->from('jamaah');
	$this->db->join('paket', 'jamaah.id_paket = paket.id_paket');
	$this->db->where('paket.blokir', 'N');
	$this->db->order_by('id_jamaah', 'desc');
	
	if(!empty($key)){
		$this->db->like('nama',$key);
		}	
	$this->db->order_by('id_jamaah');
	$kirim=$this->db->get('',$perpage,$uri);
	if($kirim->num_rows()>0)
		return $kirim->result_array();	
		else
		return null;
    }
    
	function get_klxx($perpage,$uri,$key){
    $this->db->select('*');
	$this->db->from('kl');
	if(!empty($key)){
		$this->db->like('nama_kl',$key);
		}	
	$this->db->order_by('id_kl');
	$kirim=$this->db->get('',$perpage,$uri);
	if($kirim->num_rows()>0)
		return $kirim->result_array();	
		else
		return null;
    }
    
	function get_user($perpage,$uri,$key){
    $this->db->select('*');
	$this->db->from('user');
	if(!empty($key)){
		$this->db->like('nama',$key);
		}	
	$this->db->order_by('id_user');
	$kirim=$this->db->get('',$perpage,$uri);
	if($kirim->num_rows()>0)
		return $kirim->result_array();	
		else
		return null;
    }
    
	function get_kl($perpage,$uri,$key){
    $this->db->select('*');
	$this->db->from('kl');
	if(!empty($key)){
		$this->db->like('nama_kl',$key);
		}	
	$this->db->order_by('id_kl');
	$kirim=$this->db->get('',$perpage,$uri);
	if($kirim->num_rows()>0)
		return $kirim->result_array();	
		else
		return null;
    }
    function get_kl2(){
    	return $this->db->get('user');
    }
    function save_user($data){
   		$this->db->insert('user', $data);	
    }
	function save_kl($data){
   		$this->db->insert('kl', $data);	
    }
    function get_user_edit($id){
    	$this->db->where('id_user', $id);
		return $this->db->get('user');
    }
    function update_user($data){
    	$this->db->where('id_user', $data['id_user']);
		$this->db->update('user', $data);	
    }
	function get_penjualan($perpage,$uri,$key){
    $this->db->select('*');
	$this->db->from('paket');
	$this->db->where('blokir', 'N');
	if(!empty($key)){
		$this->db->like('nama_paket',$key);
			
		}
	//$this->db->group_by('tgl_berangkat');	
	$this->db->order_by('nama_paket');
	$kirim=$this->db->get('',$perpage,$uri);
	if($kirim->num_rows()>0)
		return $kirim->result_array();	
		else
		return null;
    }
    function get_jamaah_jml($perpage,$uri,$key,$id){
    $this->db->select('*');
	$this->db->from('jamaah');
	$this->db->where('id_paket', $id);
	
	if(!empty($key)){
		$this->db->like('nama',$key);
		}	
	$this->db->order_by('id_jamaah');
	$kirim=$this->db->get('',$perpage,$uri);
	if($kirim->num_rows()>0)
		return $kirim->result_array();	
		else
		return null;
    }
    function get_jamaah_id($id){
    	$this->db->where('id_paket', $id);
		return $this->db->get('jamaah');
    }
	function get_data_penjualan($perpage,$uri,$key){
    $this->db->select('*');
	$this->db->from('paket');
	if(!empty($key)){
		$this->db->like('nama_paket',$key);
			
		}
	//$this->db->group_by('tgl_berangkat');	
	$this->db->order_by('nama_paket');
	$kirim=$this->db->get('',$perpage,$uri);
	if($kirim->num_rows()>0)
		return $kirim->result_array();	
		else
		return null;
    }
	function get_jamaah_jml_user($perpage,$uri,$key,$id){
		$idx = from_session('id');
		$u=$this->db->query("SELECT * FROM kl WHERE `id_user`='$idx'");
		$klnya=$u->row()->id_kl;
		
    $this->db->select('*');
	$this->db->from('jamaah');
	$this->db->where('id_paket', $id);
	$this->db->where('id_kl',$klnya);
	if(!empty($key)){
		$this->db->like('nama',$key);
		}	
	$this->db->order_by('id_jamaah');
	$kirim=$this->db->get('',$perpage,$uri);
	if($kirim->num_rows()>0)
		return $kirim->result_array();	
		else
		return null;
    }
	function nomor_jamaah_ueser($id){
		$idx = from_session('id');
		$u=$this->db->query("SELECT * FROM kl WHERE `id_user`='$idx'");
		$klnya=$u->row()->id_kl;
		
    	$this->db->where('id_paket', $id);
		$this->db->where('id_kl',$klnya);
		return $this->db->get('jamaah');
    }
    function download(){
    $data=$this->db->query("select * from paket");
	return $data;
    }
    function get_kl_daftar(){
    	$data=$this->db->query("select * from kl");
	return $data;
    }
}