<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_jurusan extends CI_Model
{

    public function jurusan($link = FALSE)
    {
        if (!$link) {
            return $this->db->get('jurusan');
        } else {
            return $this->db->get_where('jurusan', array('link' => $link))->row_array();
        }
    }

    public function update($idjurusan, $name, $description)
    {
        $data = array(
            'name'             => $name,
            'description'     => $description,
            'lastmod'        => date('Y-m-d h:i:s')
        );

        $this->db->set($data);
        $this->db->where('id', $idjurusan);
        $this->db->update('jurusan');
    }
}

/* End of file Model_jurusan.php */
/* Location: ./application/models/admin/Model_jurusan.php */