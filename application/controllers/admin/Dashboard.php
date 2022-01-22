<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/model_login');
        $this->load->model('model_counter');
    }

    public function index()
    {
        $data = array(
            'title'         => 'Dashboard',
            'count_contact' => $this->model_counter->count_contact(),
            'count_comment' => $this->model_counter->count_comment(),
            'item'             => $this->model_login->get_admin($this->session->userdata('adminid'))
        );

        $this->load->view('admin/dir/header', $data);
        $this->load->view('admin/dir/navigation');
        $this->load->view('admin/index');
        $this->load->view('admin/dir/footer');
    }
}
