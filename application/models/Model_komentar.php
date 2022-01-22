<?php
class Model_komentar extends CI_Model
{

    public function get_komentar($articleid = FALSE)
    {

        if ($articleid === FALSE) {

            $query = $this->db->query("SELECT * FROM comments ORDER BY id DESC");
            return $query->result_array();
        }

        $query = $this->db->query("SELECT * FROM article WHERE id = '$articleid'");
        $this->db->get()->ressult_array();
    }

    public function set_dilihat($id)
    {

        $data = array(
            'see' => 1
        );

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('comments');
    }
}
