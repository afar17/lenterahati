<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->template->admin('admin/dashboard');
	}
        public function dashboard(){
			$this->template->admin('admin/dashboard');
	}

	public function process(){
		// $this->load->view('vendor/autoload.php');


	 //  $options = array(
	 //    'cluster' => 'mt1',
	 //    'useTLS' => true
	 //  );
	 //  $pusher = new Pusher\Pusher(
	 //    '6a70096610193504c420',
	 //    'da27d05401340a57546e',
	 //    '407698',
	 //    $options
	 //  );

	 //  $data['message'] = $this->input->post('message');
	 //  echo $this->input->post('message');
	 //  // $pusher->trigger('my-channel', 'my-event', $data);
		// echo json_encode($this->input->post('msg'));
		echo $this->input->post('msg');

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
