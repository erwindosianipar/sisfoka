<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('siswa/model_login');
	}

	public function index()
	{
		$data = array(
			'title'	=> 'Portal Akademik Siswa',
			'siswa' => $this->model_login->get_siswa($this->session->userdata('siswaid'))
		);

		$this->load->view('siswa/dir/header', $data);
		$this->load->view('siswa/dir/navigation');
		$this->load->view('siswa/index');
		$this->load->view('siswa/dir/footer');
	}
}