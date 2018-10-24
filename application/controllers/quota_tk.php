<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class quota_tk extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		if($this->session->userdata () !=true){
			redirect('quota_tk');
		}
		$this->load->model('quotamodel');
		$this->load->model('Sekolahmodel');

	}

	public function index()
	{
		$data['quota_tk'] = $this->quotamodel->getAll();
		$this->template->admin('admin/quota',$data);
	}
	public function add()
	{
		$data['quota_tk'] = $this->quotamodel->getAll();
		$this->template->admin('admin/quotaform',$data);
	}
	
	public function save(){
		$this->quotamodel->save();
		$this->session->set_flashdata('success','Data Berhasil Disimpan!');
		redirect('quota_tk/index');
	}
	
	public function edit($id){
		$data['menu_setting']='active';
		$data['edit'] = 'edit';
		$data['quota_tk'] = $this->quotamodel->getAll();
		$data['row']= $this->quotamodel->getId($id);
		$this->template->admin('admin/quotaform',$data);
	}
	
	public function update(){
		$this->quotamodel->update(); 
		$this->session->set_flashdata('success','Data Berhasil Diperbaharui!');
		
		redirect('quota_tk/index');
	}
	
	public function del($id) {
		$this->quotamodel->delete($id);
		$this->session->set_flashdata('success','Data Berhasil Dihapus!');
		redirect('quota_tk/index');
	}
}
