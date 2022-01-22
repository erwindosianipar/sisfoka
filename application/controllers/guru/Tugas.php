<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('guru/model_login');
        $this->load->model('guru/model_tugas');
    }

    public function index()
    {
        $data = array(
            'title'        => 'Tugas',
            'guru'        => $this->model_login->get_guru($this->session->userdata('guruid')),
            'tugass'    => $this->model_tugas->tugas()
        );

        $this->load->view('guru/dir/header', $data);
        $this->load->view('guru/dir/navigation');
        $this->load->view('guru/tugas/index');
        $this->load->view('guru/dir/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Tugas',
            'trim|required|htmlspecialchars|min_length[5]|max_length[30]',
            array(
                'required'        => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang teks 5 karakter',
                'max_length'    => '%s maksimal 30 karakter'
            )
        );

        $this->form_validation->set_rules(
            'keterangan',
            'Keterangan',
            'trim|required',
            array('required' => '%s tidak boleh kosong')
        );

        if ($this->form_validation->run() == TRUE) {
            $nama         = $this->input->post('nama');
            $keterangan = $this->input->post('keterangan');
            $kelas         = $this->input->post('kelas');
            $jurusan     = $this->input->post('jurusan');

            $this->model_tugas->tambah($nama, $keterangan, $kelas, $jurusan);

            $this->session->set_flashdata('success', 'Tugas berhasil ditambah');
            redirect(base_url('guru/tugas/tambah'), 'refresh');
        } else {
            $data = array(
                'title'    => 'Tambah Tugas',
                'guru'    => $this->model_login->get_guru($this->session->userdata('guruid'))
            );

            $this->load->view('guru/dir/header', $data);
            $this->load->view('guru/dir/navigation');
            $this->load->view('guru/tugas/tambah');
            $this->load->view('guru/dir/footer');
        }
    }

    public function lihat($id = 0)
    {
        if (empty($this->model_tugas->get_tugas($id))) {
            echo show_404();
            die;
        }

        if ($this->model_tugas->get_guruid($id) != $this->session->userdata('guruid')) {
            echo 'Anda tidak memiliki akses';
            die;
        }

        $data = array(
            'title'        => 'Lihat Tugas Siswa',
            'guru'        => $this->model_login->get_guru($this->session->userdata('guruid')),
            'tugas'        => $this->model_tugas->get_tugas($id),
            'jawabans'    => $this->model_tugas->get_jawaban($id)
        );

        $this->load->view('guru/dir/header', $data);
        $this->load->view('guru/dir/navigation');
        $this->load->view('guru/tugas/lihat');
        $this->load->view('guru/dir/footer');
    }

    public function update($id = 0)
    {
        if (empty($this->model_tugas->get_tugas($id))) {
            echo show_404();
            die;
        }

        if ($this->model_tugas->get_guruid($id) != $this->session->userdata('guruid')) {
            echo 'Anda tidak memiliki akses';
            die;
        }

        $this->form_validation->set_rules(
            'nama',
            'Nama Tugas',
            'trim|required|htmlspecialchars|min_length[5]|max_length[100]',
            array(
                'required'        => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang teks 5 karakter',
                'max_length'    => '%s maksimal 100 karakter'
            )
        );

        $this->form_validation->set_rules(
            'keterangan',
            'Keterangan',
            'trim|required',
            array('required' => '%s tidak boleh kosong')
        );

        if ($this->form_validation->run() == TRUE) {
            $nama         = $this->input->post('nama');
            $keterangan = $this->input->post('keterangan');
            $kelas         = $this->input->post('kelas');
            $jurusan     = $this->input->post('jurusan');
            $aktif         = $this->input->post('aktif');

            $this->model_tugas->update($id, $nama, $keterangan, $kelas, $jurusan, $aktif);

            $this->session->set_flashdata('success', 'Tugas berhasil diupdate');
            redirect(base_url('guru/tugas/update/' . $id), 'refresh');
        } else {
            $data = array(
                'title'    => 'Update Tugas',
                'guru'    => $this->model_login->get_guru($this->session->userdata('guruid')),
                'tugas'    => $this->model_tugas->get_tugas($id)
            );

            $this->load->view('guru/dir/header', $data);
            $this->load->view('guru/dir/navigation');
            $this->load->view('guru/tugas/update');
            $this->load->view('guru/dir/footer');
        }
    }
}

/* End of file tugas.php */
/* Location: ./application/controllers/tugas.php */