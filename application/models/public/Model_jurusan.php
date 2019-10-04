<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jurusan extends CI_Model {

	public function jurusan($link = FALSE)
	{
		if (!$link)
		{
			return $this->db->get('jurusan');
		}
		else
		{
			return $this->db->get_where('jurusan', array('link' => $link))->row_array();
		}
	}
}

/* End of file Model_jurusan.php */
/* Location: ./application/models/public/Model_jurusan.php */