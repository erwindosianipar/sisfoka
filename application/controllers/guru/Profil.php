<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('guru/model_login');
    }

    public function index()
    {
        $data = array(
            'title'    => 'Profil',
            'guru'    => $this->model_login->get_guru($this->session->userdata('guruid'))
        );

        $this->load->view('guru/dir/header', $data);
        $this->load->view('guru/dir/navigation');
        $this->load->view('maintain');
        $this->load->view('guru/dir/footer');
    }

    public function update($value = '')
    {
        $data = array(
            'title'    => 'Update Profil',
            'guru'    => $this->model_login->get_guru($this->session->userdata('guruid'))
        );

        $this->load->view('guru/dir/header', $data);
        $this->load->view('guru/dir/navigation');
        $this->load->view('maintain');
        $this->load->view('guru/dir/footer');
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
            $data['guru'] = $this->model_login->get_guru($this->session->userdata('guruid'));

            $passold = $this->input->post('passold');

            if ($this->model_login->login($data['guru']->nip, $passold)) {
                $passnow = $this->input->post('passnow');
                $passnew = $this->input->post('passnew');

                $this->model_login->renew_password($passnew);

                $this->session->set_flashdata('success', 'Password anda berhasil diperbarui');
                redirect(base_url('guru/profil/password'), 'refresh');
            } else {
                $this->session->set_flashdata('error', 'Password lama yang anda masukan salah');
                redirect(base_url('guru/profil/password'), 'refresh');
            }
        } else {
            $data = array(
                'title'    => 'Update Password',
                'guru'    => $this->model_login->get_guru($this->session->userdata('guruid'))
            );

            $this->load->view('guru/dir/header', $data);
            $this->load->view('guru/dir/navigation');
            $this->load->view('guru/profil/password');
            $this->load->view('guru/dir/footer');
        }
    }
}

/* End of file profil.php */
/* Location: ./application/controllers/profil.php */