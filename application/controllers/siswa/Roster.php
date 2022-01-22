<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Roster extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title'    => 'Roster'
        );

        $this->load->view('siswa/dir/header', $data);
        $this->load->view('siswa/dir/navigation');
        $this->load->view('maintain');
        $this->load->view('siswa/dir/footer');
    }
}

/* End of file jadwal.php */
/* Location: ./application/controllers/jadwal.php */