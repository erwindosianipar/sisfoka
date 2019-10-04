<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_testimoni extends CI_Model {

	public function testimoni()
	{
		return $this->db->get('testimonials')->result_array();
	}

	public function create($name, $stambuk, $testimoni, $whois)
	{
		$data = array(
			'name' 		=> $name,
			'stambuk' 	=> $stambuk,
			'testimoni'	=> $testimoni,
			'whois'		=> $whois
		);

	    return $this->db->insert('testimonials', $data);
	}

    public function read($id)
    {
		return $this->db->get_where('testimonials', array('id' => $id))->row_array();
	}

	public function update($id, $name, $stambuk, $testimoni, $whois)
	{
		$data = array(
			'name' 		=> $name,
			'stambuk' 	=> $stambuk,
			'testimoni'	=> $testimoni,
			'whois'		=> $whois
		);

		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('testimonials');
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('testimonials');
	}
}

/* End of file Model_testimoni.php */
/* Location: ./application/models/admin/Model_testimoni.php */