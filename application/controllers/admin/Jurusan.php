<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_counter');
        $this->load->model('admin/model_jurusan');
    }

    public function rpl()
    {
        $this->form_validation->set_rules(
            'name',
            'Nama Jurusan',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'description',
            'Konten',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        if ($this->form_validation->run() === TRUE) {
            $name              = $this->input->post('name');
            $description     = $this->input->post('description');

            $this->model_jurusan->update(1, $name, $description);

            $this->session->set_flashdata('success', 'Berhasil diperbarui');
            redirect('admin/jurusan/rpl', 'refresh');
        } else {
            $data = array(
                'title'         => 'Edit Jurusan RPL',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'rpl'             => $this->model_jurusan->jurusan('rekayasa-perangkat-lunak')
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/edit/jurusan/rpl');
            $this->load->view('admin/dir/footer');
        }
    }

    public function tkj()
    {
        $this->form_validation->set_rules(
            'name',
            'Nama Jurusan',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'description',
            'Konten',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        if ($this->form_validation->run() === TRUE) {
            $name              = $this->input->post('name');
            $description     = $this->input->post('description');

            $this->model_jurusan->update(2, $name, $description);

            $this->session->set_flashdata('success', 'Berhasil diperbarui');
            redirect('admin/jurusan/tkj', 'refresh');
        } else {
            $data = array(
                'title'         => 'Edit Jurusan TKJ',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'tkj'             => $this->model_jurusan->jurusan('teknik-komputer-dan-jaringan')
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/edit/jurusan/tkj');
            $this->load->view('admin/dir/footer');
        }
    }

    public function ak()
    {
        $this->form_validation->set_rules(
            'name',
            'Nama Jurusan',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'description',
            'Konten',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        if ($this->form_validation->run() === TRUE) {
            $name              = $this->input->post('name');
            $description     = $this->input->post('description');

            $this->model_jurusan->update(3, $name, $description);

            $this->session->set_flashdata('success', 'Berhasil diperbarui');
            redirect('admin/jurusan/ak', 'refresh');
        } else {
            $data = array(
                'title'         => 'Edit Jurusan AK',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'ak'             => $this->model_jurusan->jurusan('akuntansi')
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/edit/jurusan/ak');
            $this->load->view('admin/dir/footer');
        }
    }

    public function ap()
    {
        $this->form_validation->set_rules(
            'name',
            'Nama Jurusan',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'description',
            'Konten',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        if ($this->form_validation->run() === TRUE) {
            $name              = $this->input->post('name');
            $description     = $this->input->post('description');

            $this->model_jurusan->update(4, $name, $description);

            $this->session->set_flashdata('success', 'Berhasil diperbarui');
            redirect('admin/jurusan/ap', 'refresh');
        } else {
            $data = array(
                'title'         => 'Edit Jurusan AP',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'ap'             => $this->model_jurusan->jurusan('administrasi-perkantoran')
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/edit/jurusan/ap');
            $this->load->view('admin/dir/footer');
        }
    }
}
