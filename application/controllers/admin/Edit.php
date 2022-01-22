<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_counter');
        $this->load->model('admin/model_page');
    }

    public function sejarah()
    {
        $this->form_validation->set_rules(
            'description',
            'Deskripsi',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'content',
            'Content',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        if ($this->form_validation->run() === TRUE) {
            $description = $this->input->post('description');
            $content      = $this->input->post('content');

            $this->model_page->update('histories', $description, $content);

            $this->session->set_flashdata('success', 'Berhasil diperbarui');
            redirect('admin/edit/sejarah', 'refresh');
        } else {
            $data = array(
                'title'         => 'Edit Sejarah',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'sejarah'         => $this->model_page->sejarah()
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/edit/sejarah');
            $this->load->view('admin/dir/footer');
        }
    }

    public function visimisi()
    {
        $this->form_validation->set_rules(
            'description',
            'Deskripsi',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'content',
            'Content',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        if ($this->form_validation->run() === TRUE) {
            $description = $this->input->post('description');
            $content      = $this->input->post('content');

            $this->model_page->update('visimisi', $description, $content);

            $this->session->set_flashdata('success', 'Berhasil diperbarui');
            redirect('admin/edit/visimisi', 'refresh');
        } else {
            $data = array(
                'title'         => 'Edit Visi dan Misi',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'visimisi'         => $this->model_page->visimisi()
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/edit/visimisi');
            $this->load->view('admin/dir/footer');
        }
    }

    public function logomotto()
    {
        $this->form_validation->set_rules(
            'description',
            'Deskripsi',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'content',
            'Content',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        if ($this->form_validation->run() === TRUE) {
            $description = $this->input->post('description');
            $content      = $this->input->post('content');

            $this->model_page->update('logomotto', $description, $content);

            $this->session->set_flashdata('success', 'Berhasil diperbarui');
            redirect('admin/edit/logomotto', 'refresh');
        } else {
            $data = array(
                'title'         => 'Edit Logo dan Motto',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'logomotto'        => $this->model_page->logomotto()
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/edit/logomotto');
            $this->load->view('admin/dir/footer');
        }
    }

    public function struktur()
    {
        $this->load->library('upload');

        $this->form_validation->set_rules(
            'description',
            'Deskripsi',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'content',
            'Content',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $nameimg = $this->session->userdata('adminid') . '_' . time() . '_' . uniqid() . '_' . date("Ymdhis") . '_n';

        $config['upload_path']      = './images/struktur/';
        $config['allowed_types']    = 'jpg|jpeg|png|gif';
        $config['quality']          = '100%';
        $config['file_name']        = $nameimg;

        $this->upload->initialize($config);

        if ($this->form_validation->run() === TRUE) {
            if (!empty($_FILES['image']['name'])) {
                if ($this->upload->do_upload('image')) {
                    $gambar = $this->upload->data();

                    $nameimage  = $gambar['file_name'];
                    $description = $this->input->post('description');
                    $content      = $this->input->post('content');

                    $this->model_page->update_struktur($nameimage, $description, $content);

                    $this->session->set_flashdata('success', 'Berhasil diperbarui');
                    redirect('admin/edit/struktur', 'refresh');
                } else {
                    $this->session->set_flashdata('success', 'Gambar gagal diupload');
                    redirect('admin/edit/struktur', 'refresh');
                }
            } else {
                $this->session->set_flashdata('success', 'Gambar tidak boleh kosong');
                redirect('admin/edit/struktur', 'refresh');
            }
        } else {
            $data = array(
                'title'            => 'Edit Struktur Organisasi',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'struktur'        => $this->model_page->struktur()
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/edit/struktur');
            $this->load->view('admin/dir/footer');
        }
    }

    public function sambutan_yayasan()
    {

        $this->form_validation->set_rules(
            'description',
            'Deskripsi',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'content',
            'Content',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        if ($this->form_validation->run() === TRUE) {
            $description = $this->input->post('description');
            $content      = $this->input->post('content');

            $this->model_page->update('yayasan', $description, $content);

            $this->session->set_flashdata('success', 'Berhasil diperbarui');
            redirect('admin/edit/sambutan_yayasan', 'refresh');
        } else {
            $data = array(
                'title'         => 'Edit Kata Sambutan Yayasan',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'sambutan'        => $this->model_page->sambutan_yayasan()
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/edit/sambutan_yayasan');
            $this->load->view('admin/dir/footer');
        }
    }

    public function sambutan_kepsek()
    {
        $this->load->library('upload');

        $this->form_validation->set_rules(
            'name',
            'Nama',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'content',
            'Content',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $nameimg = $this->session->userdata('adminid') . '_' . time() . '_' . uniqid() . '_' . date("Ymdhis") . '_n';

        $config['upload_path']      = './images/kepsek/';
        $config['allowed_types']    = 'jpg|jpeg|png|gif';
        $config['file_name']        = $nameimg;

        $this->upload->initialize($config);

        if ($this->form_validation->run() === TRUE) {
            if (!empty($_FILES['image']['name'])) {
                if ($this->upload->do_upload('image')) {
                    $gambar = $this->upload->data();

                    $nameimage  = $gambar['file_name'];
                    $name         = $this->input->post('name');
                    $content     = $this->input->post('content');

                    $this->model_page->update_kepsek($name, $content, $nameimage);

                    $this->session->set_flashdata('success', 'Berhasil diperbarui');
                    redirect('admin/edit/sambutan_kepsek', 'refresh');
                } else {
                    $this->session->set_flashdata('success', 'Gambar gagal diupload');
                    redirect('admin/edit/sambutan_kepsek', 'refresh');
                }
            } else {
                $this->session->set_flashdata('success', 'Gambar kosong atau tipe tidak diijinkan');
                redirect('admin/edit/sambutan_kepsek', 'refresh');
            }
        } else {
            $data = array(
                'title'         => 'Edit Kata Sambutan Kepala Sekolah',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'sambutan'        => $this->model_page->sambutan_kepsek()
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/edit/sambutan_kepsek');
            $this->load->view('admin/dir/footer');
        }
    }
}
