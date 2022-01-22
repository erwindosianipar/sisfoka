<?php
class Model_ekstrakurikuler extends CI_Model
{

    public function get_ekstrakurikuler($link = FALSE)
    {
        if ($link === FALSE) {
            $query = $this->db->query("SELECT * FROM ekstrakurikuler");
            return $query->result_array();
        }

        $query = $this->db->get_where('ekstrakurikuler', array('link' => $link));
        return $query->row_array();
    }

    public function get_by_id($id)
    {
        $query = $this->db->get_where('ekstrakurikuler', array('id' => $id));
        return $query->row_array();
    }

    public function create($name, $nameimage, $description, $lead)
    {

        $this->load->helper('string');

        $data = array(
            'name'             => $name,
            'image'         => $nameimage,
            'description'     => $description,
            'lead'             => $lead,
            'link'             => url_title($name, 'dash', TRUE),
        );

        return $this->db->insert('ekstrakurikuler', $data);
    }

    public function update_image($id, $name, $nameimage, $description, $lead)
    {
        $data = array(
            'name'            => $name,
            'image'         => $nameimage,
            'description'     => $description,
            'lead'            => $lead,
            'link'            => url_title($name, 'dash', TRUE)
        );

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('ekstrakurikuler');
    }

    public function update_no_image($id, $name, $description, $lead)
    {
        $data = array(
            'name'            => $name,
            'description'     => $description,
            'lead'            => $lead,
            'link'            => url_title($name, 'dash', TRUE)
        );

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('ekstrakurikuler');
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('ekstrakurikuler');
    }
}
