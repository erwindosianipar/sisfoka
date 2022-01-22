<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_guru extends CI_Model
{

    public function get_guru($nama, $nip)
    {
        if ($nama != '' or $nip != '') {
            $this->db->like('nama', $nama);
            $this->db->or_like('nip', $nip);
            return $this->db->get('guru');
        } else {
            return $this->db->get('guru');
        }
    }

    public function detail_guru($id)
    {
        return $this->db->get_where('guru', array('id' => $id));
    }

    public function add($nip, $nama, $divisi, $wali, $kelas, $jurusan)
    {
        $data = array(
            'nip'         => $nip,
            'nama'        => $nama,
            'divisi'    => $divisi,
            'wali'        => $wali,
            'kelas'        => $kelas,
            'jurusan'    => $jurusan
        );

        return $this->db->insert('guru', $data);
    }

    public function update($id, $nama, $divisi, $wali, $kelas, $jurusan)
    {
        $data = array(
            'nama'        => $nama,
            'divisi'    => $divisi,
            'wali'        => $wali,
            'kelas'        => $kelas,
            'jurusan'    => $jurusan
        );

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('guru');
    }

    public function deletes($nip)
    {
        $this->db->where_in('nip', $nip);
        $this->db->delete('guru');
    }
}

/* End of file model_guru.php */
/* Location: ./application/models/model_guru.php */