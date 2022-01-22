<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('guru/model_login');
    }

    public function index()
    {
        $data = array(
            'title'    => 'Artikel',
            'guru'    => $this->model_login->get_guru($this->session->userdata('guruid'))
        );

        $this->load->view('guru/dir/header', $data);
        $this->load->view('guru/dir/navigation');
        $this->load->view('maintain');
        $this->load->view('guru/dir/footer');
    }
}

/* End of file artikel.php */
/* Location: ./application/controllers/artikel.php */