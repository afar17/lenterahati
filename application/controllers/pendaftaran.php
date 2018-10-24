<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('pendaftaran_model');
		$this->load->model('Infomodel');
		$this->load->model('quotamodel');

	}

	public function index()
	{
		$data['pendaftaran'] = $this->pendaftaran_model->getAll();
		$data['informasi'] = $this->Infomodel->getAll();
		$data['jumlahquota'] = $this->quotamodel->batas();
		$data['menupendaftaran']='active';
		$this->template->isi('halaman/psb/pendaftaran',$data);
	}
        public function lihat()
	{
		$data['pendaftaran'] = $this->pendaftaran_model->getAll();
		$this->template->isi('halaman/psb/lihatpendaftaran',$data);
	}
	public function formdaftar($id=null)
	{
		if($id == "tkit") {
			$data['sekolah'] = "TKIT";
			$data['judulform']= "TK-IT";
		}
		else if($id ="sdit"){
			$data['sekolah'] = "SDIT";
			$data['judulform']= "SD-IT";
		}
		else{
			$data['sekolah'] = "SMPIT";
			$data['judulform']= "SMP-IT";
		}
		$this->template->isi('halaman/psb/formpendaftaran',$data);
	}
	
	public function save(){
		$id = $this->pendaftaran_model->save();
		$this->session->set_flashdata('success',"Data Berhasil Disimpan! <a href='".site_url('home/cetak/'.$id)."' target='blank'><button class='btn btn-info'><i class='fa fa-print'></i> Print</button></a>");
		redirect('pendaftaran/formdaftar');
	}
	
	public function edit($id){
		$data['menu_setting']='active';
		$data['edit'] = 'edit';
		$data['row']= $this->Pendaftaran_model->getId($id);
		$this->template->isi('halaman/psb/pendaftaranform',$data);
		
	}
	
	public function update(){
		$this->Pendaftaran_model->update(); 
		$this->session->set_flashdata('success','Data Berhasil Diperbaharui!');
		
		redirect('pendaftaran/index');
	}
	
	
}