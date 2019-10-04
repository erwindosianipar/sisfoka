<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function login($username, $password)
	{
		$this->db->select('password');
		$this->db->from('admin');
		$this->db->where('username', $username);
		$hash = $this->db->get()->row('password');

		return $this->verify($password, $hash);
	}

	public function get_adminid($username)
	{
		$this->db->select('id');
		$this->db->from('admin');
		$this->db->where('username', $username);

		return $this->db->get()->row('id');
	}

	public function get_admin($adminid)
	{
		$this->db->from('admin');
		$this->db->where('id', $adminid);

		return $this->db->get()->row();
	}

	private function verify($password, $hash){

		return password_verify($password, $hash);
	}
}

/* End of file model_login.php */
/* Location: ./application/models/model_login.php */