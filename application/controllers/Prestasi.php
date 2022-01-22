<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_prestasi');
    }

    public function index()
    {
        $data['title']         = 'Daftar Prestasi - SMK Pelita Pematangsiantar';
        $data['prestasi']   = $this->model_prestasi->get_prestasi();

        $this->load->view('dir/header', $data);
        $this->load->view('public/prestasi/index', $data);
        $this->load->view('dir/footer');
    }

    public function view($link = NULL)
    {
        $data['prestasi_item'] = $this->model_prestasi->get_prestasi($link);

        if (empty($data['prestasi_item'])) {
            show_404();
        }

        $data['title']         = 'Prestasi ' . $data['prestasi_item']['title'] . ' - SMK Pelita Pematangsiantar';
        $data['prestasi']      = $this->model_prestasi->get_prestasi();

        $this->load->view('dir/header', $data);
        $this->load->view('public/prestasi/view');
        $this->load->view('dir/footer');
    }
}

/* End of file Prestasi.php */
/* Location: ./application/controllers/Prestasi.php */