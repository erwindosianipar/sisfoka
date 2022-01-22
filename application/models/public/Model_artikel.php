<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_artikel extends CI_Model
{

    public function artikel($link = FALSE)
    {
        if (!$link) {
            return $this->db->get('articles');
        } else {
            return $this->db->get_where('articles', array('link' => $link))->row_array();
        }
    }

    public function komentar($articleid)
    {
        return $this->db->get_where('comments', array('articleid' => $articleid));
    }

    public function komentari($articleid, $name, $email, $comment, $direct)
    {
        $data = array(
            'articleid' => $articleid,
            'name'         => $name,
            'email'     => $email,
            'comment'    => $comment,
            'created'     => date("Y-m-d h:i:s"),
            'link'        => $direct,
            'ipaddress' => $this->input->ip_address()
        );

        return $this->db->insert('comments', $data);
    }
}

/* End of file Model_artikel.php */
/* Location: ./application/models/public/Model_artikel.php */