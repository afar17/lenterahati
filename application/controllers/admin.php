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
		$data='title';
		$this->template->admin('admin/dashboard',$data);
	}
    
    public function dashboard(){
		$this->template->admin('admin/dashboard');
	}

	public function pendaftar() {
		$this->template->admin('admin/psb/pendaftar');
	}
}
