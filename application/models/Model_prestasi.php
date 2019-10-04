<?php
class Model_prestasi extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->helper('string');
	}

	public function set_prestasi($title, $description, $nameimage, $content){

	    $data = array(
	        'title' 		=> $title,
	        'description'	=> $description,
	        'image' 		=> $nameimage,
	        'content' 		=> $content,
	        'link'			=> url_title($title, 'dash', TRUE),
	        'date'			=> date('Y-m-d h:i:s')
	    );

	    return $this->db->insert('prestasi', $data);
	}

	public function get_prestasi($link = FALSE)
	{
	    if ($link === FALSE){
		
			$query = $this->db->query("SELECT * FROM prestasi ORDER BY id DESC");
			return $query->result_array();
		
		}

		$query = $this->db->get_where('prestasi', array('link' => $link));
		return $query->row_array();
	}

	public function get_by_id($id)
	{
		$query = $this->db->get_where('prestasi', array('id' => $id));
		return $query->row_array();
	}

    public function delete($id)
    {
		$this->db->where('id', $id);
		$this->db->delete('prestasi');
    }

    public function update_image($id, $title, $description, $nameimage, $content)
    {
	    $data = array(
	        'title' 		=> $title,
	        'description'	=> $description,
	        'image' 		=> $nameimage,
	        'content' 		=> $content,
	        'link'			=> url_title($title, 'dash', TRUE)
	    );

		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('prestasi');
    }

    public function update_no_image($id, $title, $description, $content)
    {
	    $data = array(
	        'title' 		=> $title,
	        'description'	=> $description,
	        'content' 		=> $content,
	        'link'			=> url_title($title, 'dash', TRUE)
	    );

		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('prestasi');
		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('prestasi');
    }
}