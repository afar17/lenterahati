<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Contact_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
	function getAll(){
		$query = $this->db->get('sekolah');
		return $query->result();
	}	
	
	function save(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$isipesan = $this->input->post('isipesan');
		
		$data = array("namapengunjung"=>$nama,
					  "emailpengunjung"=>$email,
					  "isikomentar"=>$isipesan,
					  "statusdibaca"=>"belum");
		
		$this->db->insert('komentarpengunjung',$data);
	}
	
	function CountBelum(){
		$this->db->where('statusdibaca','belum');
		$this->db->from('komentarpengunjung');
		$data = $this->db->get();
		
		return $data->num_rows();
	}
}

/* End of file */
