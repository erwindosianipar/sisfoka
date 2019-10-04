<?php
class Model_kontak extends CI_Model {

    public function get_kontak(){
		
		$query = $this->db->query("SELECT * FROM contacts ORDER BY id DESC");
		return $query->result_array();	
	
	}

	public function set_kontak($name, $email, $about, $phone, $message){

		$this->load->helper('date');

	    $data = array(
	    	'name'		=> $name,
	    	'email'		=> $email,
	    	'about'		=> $about,
	    	'phone'		=> $phone,
	    	'message'	=> $message,
	    	'ipaddress'	=> $this->input->ip_address(),
	    	'created' 	=> unix_to_human(now("Asia/Jakarta"), TRUE, 'eu')
	    );

		return $this->db->insert('contacts', $data);
	
	}

	public function set_dilihat($id){
	
		$data = array(
			'see' => 1
		); 

		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('contacts');

	}

}