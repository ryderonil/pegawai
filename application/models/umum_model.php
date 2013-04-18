<?php
class Umum_model extends CI_Model {
	
	function Umum_model(){
		parent::__construct();
	}
 function get_jamaah($perpage,$uri,$key){
	$id = from_session('id');
		$u=$this->db->query("SELECT * FROM kl WHERE `id_user`='$id'");
		$klnya=$u->row()->id_kl;
	    	
	$this->db->select('*');
	$this->db->from('jamaah');
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
	function nomor_jamaah_ueser(){
		$id = from_session('id');
		
    	$this->db->where('id_user', $id);
		return $this->db->get('jamaah');
    }
    function get_detail_jamaah($id){
    	$this->db->where('id_jamaah', $id);
		return $this->db->get('jamaah');
    }
	function update_jamaah($data){
    	$this->db->where('id_jamaah', $data['id_jamaah']);
		$this->db->update('jamaah', $data);
    }
    function save_kelengkapan($data){
    	$this->db->insert('kelengkapan', $data);
    }
	function get_detail_kelengkapan($id){
    	$this->db->where('id_jamaah', $id);
		return $this->db->get('kelengkapan');
    }
    function update_kelengkapan($data){
    	$this->db->where('id_jamaah', $data['id_jamaah']);
		$this->db->update('kelengkapan', $data);
    }
	function get_jamaah_user($perpage,$uri,$key,$id){
	
	$this->db->select('*');
	$this->db->from('jamaah');
	$this->db->where('id_kl',$id);
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
    function nomor_user($id){
		$u=$this->db->query("SELECT * FROM kl WHERE `id_kl`='$id'");
		$klnya=$u->row()->id_kl;
		
    	$this->db->where('id_kl', $klnya);
		return $this->db->get('jamaah');
    }
    //---------------------download excel----------------------------
    function ex_semua_jamaah(){
    	$this->db->select('*');
    	$this->db->from('jamaah');
    	$this->db->order_by('id_jamaah', 'desc');
    	return $this->db->get();
    }
	function ex_semua_jamaah_aktif(){
		$this->db->select('*');
		$this->db->from('jamaah');
		$this->db->join('paket', 'jamaah.id_paket = paket.id_paket');
		$this->db->where('paket.blokir', 'N'); 
		$this->db->order_by('id_jamaah', 'desc');
    	return $this->db->get();
    }
    function ex_per_paket($id){
    	$this->db->where('id_paket', $id);
		return $this->db->get('jamaah');
    }
    function ex_jamaah_user($id){
    	$this->db->where('id_user', $id);
		return $this->db->get('jamaah');
    }
    function ex_nomor_user($id){
    	$this->db->where('id_user', $id);
		return $this->db->get('user');
    }
    function ex_perpaket_user($id){
    	$ids = from_session('id');
		
    	$this->db->where('id_user', $ids);
    	$this->db->where('id_paket', $id);
		return $this->db->get('jamaah');
    }
    function ex_all_jamaah_user(){
    	$ids = from_session('id');
		
    	$this->db->where('id_user', $ids);
		return $this->db->get('jamaah');
    }
}
