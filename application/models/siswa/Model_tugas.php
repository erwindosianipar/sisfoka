<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_tugas extends CI_Model
{

    public function get_tugas($kelas, $jurusan)
    {
        return $this->db->get_where('mapel', array('kelas' => $kelas, 'jurusan' => $jurusan));
    }

    public function get_tugas_detail($id)
    {
        return $this->db->get_where('mapel', array('id' => $id))->row_array();
    }

    public function upload_image($id, $guruid, $keterangan, $fname)
    {
        $data = array(
            'mapelid'     => $id,
            'guruid'    => $guruid,
            'siswaid'    => $this->session->userdata('siswaid'),
            'keterangan' => $keterangan,
            'file'        => $fname,
            'date'        => date("Y-m-d h:i:s")
        );

        return $this->db->insert('tugas', $data);
    }

    public function upload_noimage($id, $guruid, $keterangan)
    {
        $data = array(
            'mapelid'     => $id,
            'guruid'    => $guruid,
            'siswaid'    => $this->session->userdata('siswaid'),
            'keterangan'    => $keterangan,
            'date'        => date("Y-m-d h:i:s")
        );

        return $this->db->insert('tugas', $data);
    }
}

/* End of file model_tugas.php */
/* Location: ./application/models/model_tugas.php */