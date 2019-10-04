<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('public/model_jurusan');
	}

	public function index()
	{
		$data['title'] 		= 'Jurusan - SMK Pelita Pematangsiantar';
        $data['jurusans']   = $this->model_jurusan->jurusan();

		$this->load->view('dir/header', $data);
		$this->load->view('public/jurusan/index', $data);
		$this->load->view('dir/footer');
	}

	public function view($link = NULL)
	{
        $data['jurusan'] = $this->model_jurusan->jurusan($link);

        if (empty($data['jurusan']))
        {
            show_404();
        }

        $data['title'] 		= 'Jurusan '.$data['jurusan']['name'].' - SMK Pelita Pematangsiantar';
        $data['jurusan']  	= $this->model_jurusan->jurusan($link);

        $this->load->view('dir/header', $data);
        $this->load->view('public/jurusan/view', $data);
        $this->load->view('dir/footer');
	}
}