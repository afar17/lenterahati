<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata() !=true){
			redirect('users');
		}
		$this->load->model('Sekolahmodel');

	}

	public function index()
	{
		$data['sekolah'] = $this->Sekolahmodel->getAll();
		$this->template->admin('admin/sekolah',$data);
	}
	public function add()
	{
		$this->template->admin('admin/sekolahform');
	}
	
	public function save(){
		$this->Sekolahmodel->save();
		$this->session->set_flashdata('success','Data Berhasil Disimpan!');
		redirect('Sekolah/index');
	}
	
	public function edit($id){
		$data['menu_setting']='active';
		$data['edit'] = 'edit';
		$data['row']= $this->Sekolahmodel->getId($id);
		$this->template->admin('admin/sekolahform',$data);
		
	}
	
	public function update(){
		$this->Sekolahmodel->update(); 
		$this->session->set_flashdata('success','Data Berhasil Diperbaharui!');
		
		redirect('Sekolah/index');
	}
	
	public function del($id) {
		$this->Sekolahmodel->delete($id);
		$this->session->set_flashdata('success','Data Berhasil Dihapus!');
		redirect('Sekolah/index');
	}
}
