<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		if($this->session->userdata('level')!='Admin' AND $this->session->userdata('isLogin')==true){
			redirect('dashboard');
		}
		if($this->session->userdata()!=true){
			redirect('users');
		}
		$this->load->model('User_model');
	}
	
	public function index()
	{
		$data['menu_setting'] = 'active';
		$data['changePassword'] = 'change';
		$this->template->admin('Page/user', $data);
	}
	
	public function changePass(){
		if($this->input->post('save')=='ganti'){
			$passlama = $this->input->post('passlama');
			

			if($this->User_model->cekPassword($passlama)){
				$pass1 = $this->input->post('password');
				$pass2 = $this->input->post('password2');
				if($pass1 == $pass2){
					$this->User_model->gantiPassword($pass1);
					$this->session->set_flashdata('success',"Password Anda Behasil Dirubah!");
					redirect('User/index');
				}
				else {
					$this->session->set_flashdata('error',"Password Anda Berbeda 1");
					redirect('User/index');
				}
			}
			else {
				$this->session->set_flashdata('error',"Password Anda Berbeda 2");
				redirect('User/index');
			}
		}
	}
	
	public function foto(){
		$data['menu_setting'] = 'active';
		$data['uploadfoto'] = 'uploadfoto';
		$this->template->admin('form/uploadfoto',$data);
	}
	
	public function upload(){
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']     = '5000';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';
		$config['file_name'] = $this->session->userdata('nama');
		
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload('file')){
			$error = array('error'=>$this->upload->display_errors());
			echo "<div class='alert alert-danger'>". $error['error'] ."</div>";
		}
		else {
			//simpan ke database
			$upload = $this->upload->data();
			$data = array('profil'=>$upload['file_name']);
			
			$this->db->where('idusers',$this->session->userdata('id'));
			$this->db->set($data);
			$this->db->update('users');
			
			echo "<center><h3>Suksess </h3><small>Silahkan Refresh Halaman untuk merubah foto </small><br><img src='".base_url('upload/'.$upload['file_name'])."' width='250' height='250' class='img-responsive img-circle' /><br></center>";
		}
	}
	
	public function daftar(){
		$data['users'] = $this->User_model->getAll();
		$this->template->admin('admin/Users',$data);	
	}
	
	public function tambah(){
		$this->template->admin('admin/Usersform');	
	}
	
	public function save(){
		$pass1 = $this->input->post('password');
		$pass2 = $this->input->post('confirmpassword');
		if($pass1 == $pass2){
					$this->User_model->save($pass1);
					$this->session->set_flashdata('success',"Data berhasil disimpan!");
		}
		
		else {
			$this->session->set_flashdata('error',"Password Anda Berbeda 1");
		}
		redirect('Users/daftar');
	}
	
	public function remove($id){
		$this->User_model->delete($id);
		$this->session->set_flashdata('success','Data Berhasil Dihapus!');
		redirect('Users/daftar');
	}
}
