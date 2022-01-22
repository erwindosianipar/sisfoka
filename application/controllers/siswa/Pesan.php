<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title'    => 'Pesan'
        );

        $this->load->view('siswa/dir/header', $data);
        $this->load->view('siswa/dir/navigation');
        $this->load->view('maintain');
        $this->load->view('siswa/dir/footer');
    }
}

/* End of file pesan.php */
/* Location: ./application/controllers/pesan.php */