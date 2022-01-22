<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('public/model_data');
    }

    public function guru()
    {
        $data = array(
            'title'        => 'Data Guru - SMK Pelita Pematangsiantar',
            'gurus'     => $this->model_data->guru()
        );

        $this->load->view('dir/header', $data);
        $this->load->view('public/data/guru/index');
        $this->load->view('dir/footer');
    }

    public function siswa()
    {
        $data['title'] = 'Data Siswa - SMK Pelita Pematangsiantar';

        if (empty($this->input->get('kelas')) && empty($this->input->get('jurusan'))) {
            $data['siswas'] = $this->model_data->siswa_kelas_jurusan('X', 'RPL');
        } else {
            $kelas             = $this->input->get('kelas');
            $jurusan         = $this->input->get('jurusan');
            $data['siswas']    = $this->model_data->siswa_kelas_jurusan($kelas, $jurusan);
        }

        $this->load->view('dir/header', $data);
        $this->load->view('public/data/siswa/index');
        $this->load->view('dir/footer');
    }

    public function alumni()
    {
        $data['title'] = 'Data Alumni - SMK Pelita Pematangsiantar';

        if (!empty($this->input->get('jurusan')) && !empty($this->input->get('lulusan'))) {
            $jurusan = $this->input->get('jurusan');
            $lulusan = $this->input->get('lulusan');
            $data['alumnis'] = $this->model_data->alumni_jurusan_lulusan($jurusan, $lulusan);
        } elseif (!empty($this->input->get('nama'))) {
            $nama = $this->input->get('nama');
            $data['alumnis'] = $this->model_data->alumni_nama($nama);
        } else {
            $data['alumnis'] = $this->model_data->alumni_jurusan_lulusan('RPL', date("Y") - 1);
        }

        $this->load->view('dir/header', $data);
        $this->load->view('public/data/alumni/index');
        $this->load->view('dir/footer');
    }
}

/* End of file Data.php */
/* Location: ./application/controllers/Data.php */