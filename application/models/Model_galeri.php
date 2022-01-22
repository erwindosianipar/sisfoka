<?php
class Model_galeri extends CI_Model
{

    public function create($title, $description, $nameimage)
    {
        $this->load->helper('string');
        $this->load->helper('date');

        $time = unix_to_human(now("Asia/Jakarta"), TRUE, 'eu');

        $data = array(
            'link'            => random_string('alnum', 11),
            'title'         => $title,
            'image'         => $nameimage,
            'description'    => $description,
            'tampilkan'        => 1,
            'date'            => $time
        );

        return $this->db->insert('galeri', $data);
    }

    public function read()
    {
        $query = $this->db->query("SELECT * FROM galeri ORDER BY id DESC");
        return $query->result_array();
    }

    public function get_galeri($link = FALSE)
    {
        if ($link === FALSE) {

            $query = $this->db->query("SELECT * FROM galeri WHERE tampilkan=1 ORDER BY id DESC");
            return $query->result_array();
        }

        $query = $this->db->get_where('galeri', array('link' => $link));
        return $query->row_array();
    }

    public function get_by_id($id)
    {
        $query = $this->db->get_where('galeri', array('id' => $id));
        return $query->row_array();
    }

    public function update_image($id, $title, $description, $nameimage, $tampilkan)
    {
        $data = array(
            'title'         => $title,
            'image'         => $nameimage,
            'description'    => $description,
            'tampilkan'        => $tampilkan
        );

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('galeri');
    }

    public function update_no_image($id, $title, $description, $tampilkan)
    {
        $data = array(
            'title'         => $title,
            'description'    => $description,
            'tampilkan'        => $tampilkan
        );

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('galeri');
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('galeri');
    }
}
