<?php
class Model_article extends CI_Model
{

    public function get_news($link = FALSE)
    {
        if (!$link) {
            $query = $this->db->query("SELECT * FROM articles ORDER BY id DESC");
            return $query->result_array();
        }

        return $this->db->get_where('articles', array('link' => $link))->row_array();
    }

    public function get_artikel($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->query("SELECT * FROM articles ORDER BY id DESC");
            return $query->result_array();
        }

        $query = $this->db->get_where('articles', array('id' => $id));
        return $query->row_array();
    }

    public function get_news_lim5()
    {
        $query = $this->db->query("SELECT * FROM articles ORDER BY id DESC LIMIT 5");
        return $query->result_array();
    }

    public function any_news()
    {
        $query = $this->db->query("SELECT * FROM articles");

        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_idnews($direct)
    {
        return $this->db->query("SELECT id FROM articles WHERE link='$direct'");
    }

    public function get_comments($articleid)
    {
        $query = $this->db->query("SELECT * FROM comments WHERE articleid = '$articleid'");
        return $query->result_array();
    }

    public function create($title, $nameimage, $article)
    {
        $this->load->helper('string');
        $link = url_title($title, 'dash', TRUE);
        $data = array(
            'adminid'    => $this->session->userdata('adminid'),
            'created'     => date("Y-m-d h:i:s"),
            'modified'     => date("Y-m-d h:i:s"),
            'title'     => $title,
            'image'        => $nameimage,
            'article'     => $article,
            'link'         => $link,
            'shorten'    => random_string('alnum', 6)
        );

        return $this->db->insert('articles', $data);
    }

    public function update_image($id, $title, $nameimage, $article)
    {
        $data = array(
            'adminid'    => $this->session->userdata('adminid'),
            'modified'     => date('Y-m-d h:i:s'),
            'title'     => $title,
            'image'        => $nameimage,
            'article'    => $article,
            'link'        => url_title($title, 'dash', TRUE)
        );

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('articles');
    }

    public function update_no_image($id, $title, $article)
    {
        $data = array(
            'adminid'    => $this->session->userdata('adminid'),
            'modified'     => date('Y-m-d h:i:s'),
            'title'     => $title,
            'article'    => $article,
            'link'        => url_title($title, 'dash', TRUE)
        );

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('articles');
    }

    public function delete($id)
    {
        $this->db->where('articleid', $id);
        $this->db->delete('comments');

        $this->db->where('id', $id);
        $this->db->delete('articles');
    }
}
