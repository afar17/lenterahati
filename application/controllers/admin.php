<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('isLogin') !=true){
			redirect('Home');
		}
		$this->load->model('Auth_model');
		$this->load->model('Contact_model');
	}
	
	public function index()
	{
		$data['jumlahkomentar'] = $this->Contact_model->CountBelum();
		$this->template->admin('admin/dashboard',$data);
	}
        public function dashboard(){
			$this->template->admin('admin/dashboard');
	}

	public function data_user(){
			$this->template->admin('admin/data_user');
	}
        public function galeri(){
			$this->template->admin('admin/galeri');
	}
        public function informasi(){
			$this->template->admin('admin/informasi');
	}
        public function pendaftar(){
			$this->template->admin('admin/pendaftar');
	}
        public function pengumuman(){
			$this->template->admin('admin/pengumuman');
	}
}
