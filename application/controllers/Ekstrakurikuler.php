<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekstrakurikuler extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_ekstrakurikuler');
    }

    public function index()
    {
        $data['title'] = 'Ekstrakurikuler - SMK Pelita Pematangsiantar';
        $data['ekstrakurikuler']   = $this->model_ekstrakurikuler->get_ekstrakurikuler();

        $this->load->view('dir/header', $data);
        $this->load->view('public/ekstrakurikuler/index');
        $this->load->view('dir/footer');
    }

    public function view($link = NULL)
    {
        $data['ekstrakurikuler_item'] = $this->model_ekstrakurikuler->get_ekstrakurikuler($link);

        if (empty($data['ekstrakurikuler_item'])) {
            show_404();
        }

        $data['title'] = 'Ekstrakurikuler ' . $data['ekstrakurikuler_item']['name'] . ' - SMK Pelita Pematangsiantar';
        $data['ekstrakurikuler']  = $this->model_ekstrakurikuler->get_ekstrakurikuler();

        $this->load->view('dir/header', $data);
        $this->load->view('public/ekstrakurikuler/view');
        $this->load->view('dir/footer');
    }
}

/* End of file Ekstrakurikuler.php */
/* Location: ./application/controllers/Ekstrakurikuler.php */