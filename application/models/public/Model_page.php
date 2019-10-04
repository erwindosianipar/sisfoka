<?php
class Model_page extends CI_Model {

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
}