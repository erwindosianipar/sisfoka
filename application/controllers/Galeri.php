<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('model_galeri');
        $this->load->model('public/model_data');
	}

	public function index()
	{
		$data['title']	= 'Galeri - SMK Pelita Pematangsiantar';
        $data['galeri']	= $this->model_galeri->get_galeri();

        $data['siswa']	= $this->model_data->siswa();
        $data['alumni']	= $this->model_data->alumni();
        $data['guru']	= $this->model_data->guru();

		$this->load->view('dir/header', $data);
		$this->load->view('public/galeri/index', $data);
		$this->load->view('dir/footer');
	}

	public function p($link = NULL)
	{
        $data['galeri_item'] = $this->model_galeri->get_galeri($link);

        if (empty($data['galeri_item']))
        {
            show_404();
        }

        $data['title'] 		= 'Foto '.$data['galeri_item']['title'].' - SMK Pelita Pematangsiantar';
        $data['jurusan']  	= $this->model_galeri->get_galeri();

        $this->load->view('dir/header', $data);
        $this->load->view('public/galeri/view', $data);
        $this->load->view('dir/footer');
	}
}
