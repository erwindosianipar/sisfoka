<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_tugas extends CI_Model
{

    public function tugas()
    {
        return $this->db->get_where(
            'mapel',
            array(
                'guruid' => $this->session->userdata('guruid')
            )
        );
    }

    public function tambah($nama, $keterangan, $kelas, $jurusan)
    {
        $data = array(
            'nama'             => $nama,
            'keterangan'    => $keterangan,
            'guruid'        => $this->session->userdata('guruid'),
            'kelas'            => $kelas,
            'jurusan'        => $jurusan,
            'date'            => date("Y-m-d h:i:s")
        );

        return $this->db->insert('mapel', $data);
    }

    public function get_tugas($id)
    {
        return $this->db->get_where('mapel', array('id' => $id))->row_array();
    }

    public function get_guruid($id)
    {
        $this->db->select('guruid');
        $this->db->from('mapel');
        $this->db->where('id', $id);

        return $this->db->get()->row('guruid');
    }

    public function update($id, $nama, $keterangan, $kelas, $jurusan, $aktif)
    {
        $data = array(
            'nama'             => $nama,
            'keterangan'    => $keterangan,
            'guruid'        => $this->session->userdata('guruid'),
            'kelas'            => $kelas,
            'jurusan'        => $jurusan,
            'date'            => date("Y-m-d h:i:s"),
            'aktif'            => $aktif
        );

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('mapel');
    }

    public function get_jawaban($id)
    {
        return $this->db->query("SELECT * FROM tugas INNER JOIN siswa ON tugas.siswaid = siswa.id WHERE tugas.mapelid='$id'");
        // return $this->db->get_where('tugas', array('mapelid' => $id));
    }
}

/* End of file model_tugas.php */
/* Location: ./application/models/model_tugas.php */