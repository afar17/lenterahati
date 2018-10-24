<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){ //fungsi yang otomatis jalan saat class dipanggil.
		parent::__construct();
		$this->load->model('Infomodel');
		$this->load->model('pendaftaran_model');
	}

	public function index()
	{
		$data['menuhome']='active';
		$this->template->full('halaman/dashboard',$data);
	}

	public function process(){
	  $this->load->view('vendor/autoload.php');

	  $options = array(
	    'cluster' => 'mt1',
	    'useTLS' => true
	  );
	  $pusher = new Pusher\Pusher(
	    '6a70096610193504c420',
	    'da27d05401340a57546e',
	    '407698',
	    $options
	  );	

	  $data['message'] = 'hello world';
	  $pusher->trigger('my-channel', 'my-event', $data);
	}
	
	public function cetak($id){
		$data['peserta']= $this->pendaftaran_model->cetakId($id);
		$this->template->isi('halaman/cetakbiodata',$data);
		// print_r ($data);
	}
	
	public function profilesmp(){
		$this->template->isi('halaman/profil/profil_smpit');
	}
        public function profilesd(){
		$this->template->isi('halaman/profil/profil_sdit');
	}
        public function profiletk(){
		$this->template->isi('halaman/profil/profil_tkit');
	}
        public function psb_tkit(){
		$this->template->isi('halaman/psb/psb_tkit');
	}
        public function psb_sdit(){
		$this->template->isi('halaman/psb/psb_sdit');
	}
        public function psb_smpit(){
		$this->template->isi('halaman/psb/psb_smpit');
	}
        public function informasi(){
		$this->template->full('halaman/informasi');
	}
        public function galeri(){
		$this->template->isi('halaman/galeri');
	}
        public function contact(){
		$this->template->isi('halaman/contact');
	}
        
    public function infodetail($id) {
		$data['row']=$this->Infomodel->getId($id);
		$this->template->isi('halaman/detailinformasi',$data);
	}
}
