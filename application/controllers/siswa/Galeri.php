<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title'    => 'Galeri'
        );

        $this->load->view('siswa/dir/header', $data);
        $this->load->view('siswa/dir/navigation');
        $this->load->view('maintain');
        $this->load->view('siswa/dir/footer');
    }
}

/* End of file galeri.php */
/* Location: ./application/controllers/galeri.php */