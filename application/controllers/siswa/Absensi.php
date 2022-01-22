<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title'    => 'Absensi'
        );

        $this->load->view('siswa/dir/header', $data);
        $this->load->view('siswa/dir/navigation');
        $this->load->view('maintain');
        $this->load->view('siswa/dir/footer');
    }
}

/* End of file absensi.php */
/* Location: ./application/controllers/absensi.php */