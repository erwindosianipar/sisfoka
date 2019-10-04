<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_siswa extends CI_Model {

	public function get_siswa($nama, $kelas, $jurusan)
	{
		if ($nama!='')
		{
			$this->db->like('nama', $nama);
			return $this->db->get('siswa');
		}
		else
		{
			return $this->db->get_where('siswa', array('kelas' => $kelas, 'jurusan' => $jurusan));
		}
	}

	public function detail_siswa($id)
	{
		return $this->db->get_where('siswa', array('id' => $id));
	}

	public function add($nisn, $nama, $kelas, $jurusan)
	{
	    $data = array(
	    	'nisn' 		=> $nisn,
	    	'nama' 		=> $nama,
	    	'kelas' 	=> $kelas,
	    	'jurusan' 	=> $jurusan
	    );

	    return $this->db->insert('siswa', $data);
	}

	public function update($id, $nama, $kelas, $jurusan, $status, $aktif)
	{
	    $data = array(
	    	'nama' 		=> $nama,
	    	'kelas' 	=> $kelas,
	    	'jurusan' 	=> $jurusan,
	    	'status'	=> $status,
	    	'aktif'		=> $aktif
	    );

		$this->db->set($data);
		$this->db->where('id', $id);
		$this->db->update('siswa');
	}

	public function insert_multiple($data)
	{
		$this->db->insert_batch('siswa', $data);
	}

	public function deletes($nisn){
        $this->db->where_in('nisn', $nisn);
		$this->db->delete('siswa');
	}
}

/* End of file model_siswa.php */
/* Location: ./application/models/model_siswa.php */