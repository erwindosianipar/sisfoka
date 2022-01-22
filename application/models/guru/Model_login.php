<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{

    public function login($nip, $password)
    {
        $this->db->select('password');
        $this->db->from('guru');
        $this->db->where('nip', $nip);
        $hash = $this->db->get()->row('password');

        return $this->verify($password, $hash);
    }

    public function get_guruid($nip)
    {
        $this->db->select('id');
        $this->db->from('guru');
        $this->db->where('nip', $nip);

        return $this->db->get()->row('id');
    }

    public function get_guru($guruid)
    {
        $this->db->from('guru');
        $this->db->where('id', $guruid);

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
        $this->db->where('id', $this->session->userdata('guruid'));
        $this->db->update('guru');
    }
}

/* End of file Model_login.php */
/* Location: ./application/models/guru/Model_login.php */