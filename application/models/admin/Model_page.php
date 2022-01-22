<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_page extends CI_Model
{

    public function sejarah()
    {
        return $this->db->get('histories')->row_array();
    }

    public function visimisi()
    {
        return $this->db->get('visimisi')->row_array();
    }

    public function logomotto()
    {
        return $this->db->get('logomotto')->row_array();
    }

    public function struktur()
    {
        return $this->db->get('struktur')->row_array();
    }

    public function sambutan_yayasan()
    {
        return $this->db->get('yayasan')->row_array();
    }

    public function sambutan_kepsek()
    {
        return $this->db->get('impressium')->row_array();
    }

    // Update for table histories, visimisi, logomotto, yayasan
    public function update($table, $description, $content)
    {
        $data = array(
            'description'    => $description,
            'content'         => $content,
            'modified'         => date("Y-m-d h:i:s")
        );

        $this->db->set($data);
        $this->db->where('id', 1);
        $this->db->update($table);
    }

    public function update_struktur($nameimage, $description, $content)
    {
        $data = array(
            'image'            => $nameimage,
            'description'    => $description,
            'content'         => $content,
            'modified'         => date("Y-m-d h:i:s")
        );

        $this->db->set($data);
        $this->db->where('id', 1);
        $this->db->update('struktur');
    }

    public function update_kepsek($name, $content, $nameimage)
    {
        $data = array(
            'name'        => $name,
            'image'        => $nameimage,
            'content'     => $content,
            'modified'     => date("Y-m-d h:i:s")
        );

        $this->db->set($data);
        $this->db->where('id', 1);
        $this->db->update('impressium');
    }
}

/* End of file Model_page.php */
/* Location: ./application/models/admin/Model_page.php */
