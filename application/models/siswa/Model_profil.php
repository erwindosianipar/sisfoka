<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_profil extends CI_Model
{

    public function update($nik, $tmp_lahir, $tgl_lahir, $gender, $agama, $email, $telepon, $telepon_ortu, $alamat, $bio, $masuk, $lulus, $status)
    {
        $data = array(
            'nik'             => $nik,
            'tmp_lahir'     => $tmp_lahir,
            'tgl_lahir'        => $tgl_lahir,
            'gender'        => $gender,
            'agama'            => $agama,
            'email'            => $email,
            'telepon'        => $telepon,
            'telepon_ortu'    => $telepon_ortu,
            'alamat'        => $alamat,
            'bio'            => $bio,
            'masuk'            => $masuk,
            'lulus'            => $lulus,
            'status'        => $status
        );

        $this->db->set($data);
        $this->db->where('id', $this->session->userdata('siswaid'));
        $this->db->update('siswa');
    }
}

/* End of file Model_profil.php */
/* Location: ./application/models/siswa/Model_profil.php */