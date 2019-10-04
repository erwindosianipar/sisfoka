<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_counter');
	}

	public function kontak($id = FALSE)
	{
		$this->load->model('model_kontak');

		$data = array(
			'title' 		=> 'Kontak',
			'count_contact' => $this->model_counter->count_contact(),
			'count_comment' => $this->model_counter->count_comment()
		);

        $data['kontak'] 	= $this->model_kontak->get_kontak();

		$this->load->view('admin/dir/header', $data);
		$this->load->view('admin/dir/navigation');
		$this->load->view('admin/view/kontak');
		$this->load->view('admin/dir/footer');

		if ($this->uri->segment(4) != '')
		{
			$this->model_kontak->set_dilihat($this->uri->segment(4));
			redirect('admin/view/kontak', 'refresh');
		}
	}

	public function komentar($id = FALSE)
	{
		$this->load->model('model_komentar');

		$data = array(
			'title' 		=> 'Komentar',
			'count_contact' => $this->model_counter->count_contact(),
			'count_comment' => $this->model_counter->count_comment()
		);

        $data['komentar'] = $this->model_komentar->get_komentar();

		$this->load->view('admin/dir/header', $data);
		$this->load->view('admin/dir/navigation');
		$this->load->view('admin/view/komentar');
		$this->load->view('admin/dir/footer');
	
		if ($this->uri->segment(4) != '')
		{
			$this->model_komentar->set_dilihat($this->uri->segment(4));
			redirect('admin/view/komentar', 'refresh');
		}
	}
}