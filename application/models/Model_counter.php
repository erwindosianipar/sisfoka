<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_counter extends CI_Model
{

    public function count_contact()
    {
        return $this->db->get_where('contacts', array('see' => '0'))->num_rows();
    }

    public function count_comment($articleid = FALSE)
    {
        if ($articleid === FALSE) {
            return $this->db->get_where('comments', array('see' => '0'))->num_rows();
        }

        return $this->db->get_where('comments', array('articleid' => $articleid))->num_rows();
    }
}

/* End of file Model_counter.php */
/* Location: ./application/models/Model_counter.php */