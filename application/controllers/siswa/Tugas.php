<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa/model_login');
        $this->load->model('siswa/model_tugas');
        $this->load->library('upload');
    }

    public function index()
    {
        $data = array(
            'title'    => 'Tugas',
            'siswa' => $this->model_login->get_siswa($this->session->userdata('siswaid'))
        );

        $kelas             = $data['siswa']->kelas;
        $jurusan         = $data['siswa']->jurusan;
        $data['tugass']    = $this->model_tugas->get_tugas($kelas, $jurusan);

        $this->load->view('siswa/dir/header', $data);
        $this->load->view('siswa/dir/navigation');
        $this->load->view('siswa/tugas/index');
        $this->load->view('siswa/dir/footer');
    }

    public function upload($id = 0)
    {
        if (empty($this->model_tugas->get_tugas_detail($id))) {
            echo show_404();
        }

        $this->form_validation->set_rules(
            'keterangan',
            'Keterangan',
            'trim|required',
            array(
                'required' => '%s tidak boleh kosong'
            )
        );

        $filename = $this->session->userdata('siswaid') . '_' . time() . '_' . uniqid() . '_' . date("Ymdhis") . '_n';

        $config['upload_path']      = './tugas/upload/';
        $config['allowed_types']    = 'zip|rar|xlsx|docx|pptx|pdf';
        $config['quality']          = '100%';
        $config['file_name']        = $filename;

        $this->upload->initialize($config);

        if ($this->form_validation->run() == TRUE) {
            if (!empty($_FILES['file']['name'])) {
                if ($this->upload->do_upload('file')) {
                    $file = $this->upload->data();

                    $fname         = $file['file_name'];
                    $guruid     = $this->input->post('guruid');
                    $keterangan = $this->input->post('keterangan');

                    $this->model_tugas->upload_image($id, $guruid, $keterangan, $fname);

                    $this->session->set_flashdata('success', 'Tugas berhasil ditambahkan');
                    redirect('siswa/tugas/upload/' . $id, 'refresh');
                } else {
                    $this->session->set_flashdata('success', 'Gambar gagal diupload');
                    redirect('siswa/tugas/upload/' . $id, 'refresh');
                }
            } else {
                $guruid     = $this->input->post('guruid');
                $keterangan = $this->input->post('keterangan');

                $this->model_tugas->upload_noimage($id, $guruid, $keterangan);

                $this->session->set_flashdata('success', 'Tugas berhasil ditambahkan');
                redirect('siswa/tugas/upload/' . $id, 'refresh');
            }
        } else {
            $data = array(
                'title'    => 'Upload Tugas',
                'siswa' => $this->model_login->get_siswa($this->session->userdata('siswaid')),
                'tugas' => $this->model_tugas->get_tugas_detail($id)
            );

            $this->load->view('siswa/dir/header', $data);
            $this->load->view('siswa/dir/navigation');
            $this->load->view('siswa/tugas/upload');
            $this->load->view('siswa/dir/footer');
        }
    }
}

/* End of file tugas.php */
/* Location: ./application/controllers/tugas.php */