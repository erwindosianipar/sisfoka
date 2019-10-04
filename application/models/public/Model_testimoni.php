<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_testimoni extends CI_Model {

    public function get_testimoni()
    {
    	return $this->db->get('testimonials');
	}
}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */