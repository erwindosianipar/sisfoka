<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_sitemap extends CI_Model {

	public function jurusan()
	{
		return $this->db->get('jurusan')->result();
	}

	public function prestasi()
	{
		return $this->db->get('prestasi')->result();
	}

	public function galeri()
	{
		return $this->db->get('galeri')->result();
	}

	public function ekskul()
	{
		return $this->db->get('ekstrakurikuler')->result();
	}

	public function artikel()
	{
		return $this->db->get('articles')->result();
	}
}

/* End of file model_sitemap.php */
/* Location: ./application/models/model_sitemap.php */