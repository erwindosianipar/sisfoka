<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap extends CI_Controller
{

    public function index()
    {
        $this->load->model('public/model_sitemap');

        $data = array(
            'jurusans'    => $this->model_sitemap->jurusan(),
            'prestasis'    => $this->model_sitemap->prestasi(),
            'galeris'    => $this->model_sitemap->galeri(),
            'ekskuls'    => $this->model_sitemap->ekskul(),
            'articles'    => $this->model_sitemap->artikel()
        );

        $this->output->set_content_type('text/xml');
        $this->load->view('public/sitemap', $data);
    }
}

/* End of file Sitemap.php */
/* Location: ./application/controllers/Sitemap.php */