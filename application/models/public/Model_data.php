<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_data extends CI_Model
{

    // Guru
    public function guru()
    {
        return $this->db->get_where('guru', array('status' => 'aktif'));
    }

    // Siswa
    public function siswa()
    {
        return $this->db->get_where('siswa', array('status' => 'aktif'));
    }

    public function siswa_kelas_jurusan($kelas, $jurusan)
    {
        return $this->db->get_where('siswa', array('status' => 'aktif', 'kelas' => $kelas, 'jurusan' => $jurusan));
    }

    // Alumni
    public function alumni()
    {
        return $this->db->get_where('siswa', array('status' => 'alumni'));
    }

    public function alumni_jurusan_lulusan($jurusan, $lulusan)
    {
        return $this->db->get_where('siswa', array('status' => 'alumni', 'jurusan' => $jurusan, 'lulus' => $lulusan));
    }

    public function alumni_nama($nama)
    {
        $this->db->like('nama', $nama);
        return $this->db->get('siswa');
    }
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */