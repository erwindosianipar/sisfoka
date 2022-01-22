<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('guru/model_login');
    }

    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'guru'     => $this->model_login->get_guru($this->session->userdata('guruid'))
        );

        $this->load->view('guru/dir/header', $data);
        $this->load->view('guru/dir/navigation', $data);
        $this->load->view('guru/dashboard');
        $this->load->view('guru/dir/footer');
    }
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/guru/Dashboard.php */