<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{

    public function login($nisn, $password)
    {
        $this->db->select('password');
        $this->db->from('siswa');
        $this->db->where('nisn', $nisn);
        $hash = $this->db->get()->row('password');

        return $this->verify($password, $hash);
    }

    public function get_siswaid($nisn)
    {
        $this->db->select('id');
        $this->db->from('siswa');
        $this->db->where('nisn', $nisn);

        return $this->db->get()->row('id');
    }

    public function get_siswa($siswaid)
    {
        $this->db->from('siswa');
        $this->db->where('id', $siswaid);

        return $this->db->get()->row();
    }

    private function verify($password, $hash)
    {
        return password_verify($password, $hash);
    }

    public function renew_password($password)
    {
        $data = array(
            'password' => password_hash($password, PASSWORD_DEFAULT),
        );

        $this->db->set($data);
        $this->db->where('id', $this->session->userdata('siswaid'));
        $this->db->update('siswa');
    }
}

/* End of file Model_login.php */
/* Location: ./application/models/siswa/Model_login.php */