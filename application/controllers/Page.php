<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('public/model_page');
    }

    public function sejarah()
    {
        $data = array(
            'title'        => 'Sejarah - SMK Pelita Pematangsiantar',
            'sejarah'     => $this->model_page->sejarah()
        );

        $this->load->view('dir/header', $data);
        $this->load->view('public/page/sejarah');
        $this->load->view('dir/footer');
    }

    public function visimisi()
    {
        $data = array(
            'title'        => 'Visi dan Misi - SMK Pelita Pematangsiantar',
            'visimisi'     => $this->model_page->visimisi()
        );

        $this->load->view('dir/header', $data);
        $this->load->view('public/page/visimisi');
        $this->load->view('dir/footer');
    }

    public function logomotto()
    {
        $data = array(
            'title'        => 'Logo dan Motto - SMK Pelita Pematangsiantar',
            'logomotto' => $this->model_page->logomotto()
        );

        $this->load->view('dir/header', $data);
        $this->load->view('public/page/logomotto');
        $this->load->view('dir/footer');
    }

    public function struktur()
    {
        $data = array(
            'title'        => 'Struktur Organisasi - SMK Pelita Pematangsiantar',
            'struktur'     => $this->model_page->struktur()
        );

        $this->load->view('dir/header', $data);
        $this->load->view('public/page/struktur');
        $this->load->view('dir/footer');
    }

    public function yayasan()
    {
        $data = array(
            'title'        => 'Kata Sambutan Ketua Yayasan - SMK Pelita Pematangsiantar',
            'yayasan'     => $this->model_page->sambutan_yayasan()
        );

        $this->load->view('dir/header', $data);
        $this->load->view('public/page/yayasan');
        $this->load->view('dir/footer');
    }

    public function lokasi()
    {
        $data['title'] = 'Lokasi - SMK Pelita Pematangsiantar';

        $this->load->view('dir/header', $data);
        $this->load->view('public/page/lokasi');
        $this->load->view('dir/footer');
    }

    public function error()
    {
        $data['title'] = 'Halaman Tidak Ditemukan - SMK Pelita Pematangsiantar';

        $this->load->view('dir/header', $data);
        $this->load->view('public/page/error');
        $this->load->view('dir/footer');
    }
}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */