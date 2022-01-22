<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->form_validation->set_rules(
            'name',
            'Nama',
            'trim|htmlspecialchars|required|callback_alpha_space|min_length[3]',
            array(
                'required'      => '%s tidak boleh kosong',
                'callback_alpha_space' => '%s hanya boleh huruf dan spasi',
                'min_length'    => '%s minimal 3 karakter'
            )
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|htmlspecialchars|required|valid_email',
            array(
                'required'      => '%s tidak boleh kosong',
                'valid_email'    => '%s tidak valid'
            )
        );

        $this->form_validation->set_rules(
            'about',
            'Subjek',
            'trim|htmlspecialchars|required|min_length[3]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal 3 karakter'
            )
        );

        $this->form_validation->set_rules(
            'phone',
            'Nomor telepon',
            'trim|htmlspecialchars|required|min_length[6]|max_length[15]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal 6 karakter',
                'max_length'    => '%s maksimal 15 karakter'
            )
        );

        $this->form_validation->set_rules(
            'message',
            'Pesan',
            'trim|htmlspecialchars|required|min_length[6]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal 6 karakter'
            )
        );

        if ($this->form_validation->run() === FALSE) {
            $data['title'] = 'Kontak - SMK Pelita Pematangsiantar';
            $this->load->view('dir/header', $data);
            $this->load->view('public/kontak');
            $this->load->view('dir/footer');
        } else {
            $this->load->model('model_kontak');

            $name         = $this->input->post('name');
            $email         = $this->input->post('email');
            $about         = $this->input->post('about');
            $phone         = $this->input->post('phone');
            $message     = $this->input->post('message');

            $this->model_kontak->set_kontak($name, $email, $about, $phone, $message);

            $this->session->set_flashdata('success', 'Pesan Anda telah terkirim');
            redirect('kontak', 'refresh');
        }
    }

    public function alpha_space($name)
    {
        if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            $this->form_validation->set_message('alpha_space', 'Nama hanya boleh huruf dan spasi');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */