<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa/model_login');
        $this->load->model('siswa/model_profil');
    }

    public function index()
    {
        $data = array(
            'title'    => 'Profil',
            'siswa' => $this->model_login->get_siswa($this->session->userdata('siswaid'))
        );

        $this->load->view('siswa/dir/header', $data);
        $this->load->view('siswa/dir/navigation');
        $this->load->view('siswa/profil/index');
        $this->load->view('siswa/dir/footer');
    }

    public function update()
    {
        $this->form_validation->set_rules('nik', 'Nomor NIK', 'trim|numeric|max_length[16]');
        $this->form_validation->set_rules('tmp_lahir', 'Tempat lahir', 'trim|max_length[30]');
        $this->form_validation->set_rules('email', 'Alamat email', 'valid_email');
        $this->form_validation->set_rules('telepon', 'Nomor telepon', 'numeric|max_length[15]');
        $this->form_validation->set_rules('telepon_ortu', 'Nomor telepon orangtua', 'numeric|max_length[15]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|htmlspecialchars|max_length[50]');
        $this->form_validation->set_rules('bio', 'Biodata', 'trim|htmlspecialchars|max_length[100]');
        $this->form_validation->set_rules('masuk', 'Tahun masuk', 'trim|max_length[4]');
        $this->form_validation->set_rules('lulus', 'Tahun lulus', 'trim|max_length[4]');

        if ($this->form_validation->run() === TRUE) {
            $nik            = $this->input->post('nik');
            $tmp_lahir        = $this->input->post('tmp_lahir');
            $tgl_lahir        = $this->input->post('tgl_lahir');
            $gender            = $this->input->post('gender');
            $agama            = $this->input->post('agama');
            $email            = $this->input->post('email');
            $telepon        = $this->input->post('telepon');
            $telepon_ortu    = $this->input->post('telepon_ortu');
            $alamat            = $this->input->post('alamat');
            $bio            = $this->input->post('bio');
            $masuk            = $this->input->post('masuk');
            $lulus            = $this->input->post('lulus');
            $status            = $this->input->post('status');

            $this->model_profil->update($nik, $tmp_lahir, $tgl_lahir, $gender, $agama, $email, $telepon, $telepon_ortu, $alamat, $bio, $masuk, $lulus, $status);

            $this->session->set_flashdata('success', 'Profil berhasil diupdate');
            redirect(base_url('siswa/profil/update'), 'refresh');
        } else {
            $data = array(
                'title'    => 'Update Profil',
                'siswa' => $this->model_login->get_siswa($this->session->userdata('siswaid'))
            );

            $this->load->view('siswa/dir/header', $data);
            $this->load->view('siswa/dir/navigation');
            $this->load->view('siswa/profil/update');
            $this->load->view('siswa/dir/footer');
        }
    }

    public function password()
    {
        $this->form_validation->set_rules(
            'passold',
            'Password lama',
            'trim|required',
            array(
                'required' => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'passnow',
            'Password baru',
            'trim|required|min_length[6]',
            array(
                'required'         => '%s tidak boleh kosong',
                'min_length'    => '%s minimal 6 karakter'
            )
        );

        $this->form_validation->set_rules(
            'passnew',
            'Konfirmasi Password',
            'trim|required|matches[passnow]',
            array(
                'required'     => '%s tidak boleh kosong',
                'matches'    => '%s tidak sama dengan password baru'
            )
        );

        if ($this->form_validation->run() == TRUE) {
            $data['siswa'] = $this->model_login->get_siswa($this->session->userdata('siswaid'));

            $passold = $this->input->post('passold');

            if ($this->model_login->login($data['siswa']->nisn, $passold)) {
                $passnow = $this->input->post('passnow');
                $passnew = $this->input->post('passnew');

                $this->model_login->renew_password($passnew);

                $this->session->set_flashdata('success', 'Password anda berhasil diperbarui');
                redirect(base_url('siswa/profil/password'), 'refresh');
            } else {
                $this->session->set_flashdata('error', 'Password lama yang anda masukan salah');
                redirect(base_url('siswa/profil/password'), 'refresh');
            }
        } else {
            $data = array(
                'title'    => 'Update Password',
                'siswa' => $this->model_login->get_siswa($this->session->userdata('siswaid'))
            );

            $this->load->view('siswa/dir/header', $data);
            $this->load->view('siswa/dir/navigation');
            $this->load->view('siswa/profil/password');
            $this->load->view('siswa/dir/footer');
        }
    }
}

/* End of file Profil.php */
/* Location: ./application/controllers/siswa/Profil.php */