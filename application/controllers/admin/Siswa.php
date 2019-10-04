<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	private $filename = 'Datasiswa';

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('model_counter');
		$this->load->model('admin/model_siswa');
	}

	// List all your items
	public function index($nama='', $kelas='X', $jurusan='RPL')
	{
		$data = array(
			'title' 		=> 'Data Siswa',
			'count_contact' => $this->model_counter->count_contact(),
			'count_comment' => $this->model_counter->count_comment()
		);

		if (isset($_POST['cari']))
		{
			$nama 		= $this->input->post('nama');
			$kelas 		= $this->input->post('kelas');
			$jurusan 	= $this->input->post('jurusan');

	        $data['siswas'] 	= $this->model_siswa->get_siswa($nama, $kelas, $jurusan);
		}
		else
		{
	        $data['siswas'] 	= $this->model_siswa->get_siswa($nama, $kelas, $jurusan);
		}

		$this->load->view('admin/dir/header', $data);
		$this->load->view('admin/dir/navigation');
		$this->load->view('admin/siswa/index');
		$this->load->view('admin/dir/footer');
	}

	// Add a new item
	public function add()
	{
        $this->form_validation->set_rules('nisn', 'NISN', 'trim|htmlspecialchars|required|numeric|is_unique[siswa.nisn]',
            array(
                'required'      => '%s tidak boleh kosong',
                'numeric'		=> '%s hanya boleh angka',
                'is_unique'		=> '%s sudah digunakan'
            )
        );

        $this->form_validation->set_rules('nama', 'Nama', 'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules('kelas', 'Kelas', 'required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

		if ($this->form_validation->run() === TRUE)
		{
			$nisn 		= $this->input->post('nisn');
			$nama 		= $this->input->post('nama');
			$kelas 		= $this->input->post('kelas');
			$jurusan 	= $this->input->post('jurusan');

	        $this->model_siswa->add($nisn, $nama, $kelas, $jurusan);

            $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
            redirect('admin/siswa/add', 'refresh');
		}
		else
		{
			$data = array(
				'title' 		=> 'Tambah data Siswa',
				'count_contact' => $this->model_counter->count_contact(),
				'count_comment' => $this->model_counter->count_comment()
			);

			$this->load->view('admin/dir/header', $data);
			$this->load->view('admin/dir/navigation');
			$this->load->view('admin/siswa/add');
			$this->load->view('admin/dir/footer');
		}
	}

	// Upload data(s) siswa
	public function upload()
	{
		$data = array(
			'title' 		=> 'Import data Siswa',
			'count_contact' => $this->model_counter->count_contact(),
			'count_comment' => $this->model_counter->count_comment()
		);

		if (isset($_POST['preview']))
		{
			$upload = $this->_upload_excel($this->filename);

			if ($upload['hasil'] == "sukses")
			{
				include APPPATH.'third_party/PHPExcel/PHPExcel.php';

				$excelreader 	= new PHPExcel_Reader_Excel2007();
				$loadexcel 		= $excelreader->load('assets/excel/upload/'.$this->filename.'.xlsx');
				$sheet 			= $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
				
				$data['sheet'] 	= $sheet; 
			}
			else
			{
				$data['upload_error'] = $upload['error'];
			}
		}

		$this->load->view('admin/dir/header', $data);
		$this->load->view('admin/dir/navigation');
		$this->load->view('admin/siswa/upload');
		$this->load->view('admin/dir/footer');
	}

	// Upload data(s) siswa
	public function import()
	{
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		
		$excelreader 	= new PHPExcel_Reader_Excel2007();
		$loadexcel 		= $excelreader->load('assets/excel/upload/'.$this->filename.'.xlsx');
		$sheet 			= $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
		$data 			= array();
		
		$numrow = 1;
		foreach($sheet as $row)
		{
			if($numrow > 1)
			{
				array_push(
					$data, array(
						'nisn'		=>$row['A'],
						'nama'		=>$row['B'],
						'kelas'		=>$row['C'],
						'jurusan'	=>$row['D']
					)
				);
			}
			$numrow++;
		}
		$this->model_siswa->insert_multiple($data);

		$this->session->set_flashdata('success', 'Data siswa berhasil diimport');
		redirect(base_url('admin/siswa/upload'), 'refresh');
	}

	public function _upload_excel($filename)
	{
		$this->load->library('upload');
		
		$config['upload_path'] = './assets/excel/upload/';
		$config['allowed_types'] = 'xlsx';
		$config['max_size']	= '2048';
		$config['overwrite'] = true;
		$config['file_name'] = $filename;
	
		$this->upload->initialize($config);
		if($this->upload->do_upload('file'))
		{
			$return = array('hasil' => 'sukses', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}
		else
		{
			$return = array('hasil' => 'gagal', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	//Update one item
	public function update($id = NULL)
	{
        $this->form_validation->set_rules('nama', 'Nama', 'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules('kelas', 'Kelas', 'required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules('status', 'Status', 'required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules('aktif', 'Aktif', 'required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

		if ($this->form_validation->run() === TRUE)
		{
			$nama 		= $this->input->post('nama');
			$kelas 		= $this->input->post('kelas');
			$jurusan 	= $this->input->post('jurusan');
			$status 	= $this->input->post('status');
			$aktif 		= $this->input->post('aktif');

	        $this->model_siswa->update($id, $nama, $kelas, $jurusan, $status, $aktif);

            $this->session->set_flashdata('success', 'Data berhasil diperbarui');
            redirect('admin/siswa/update/'.$id, 'refresh');
		}
		else
		{
	        if ($this->model_siswa->detail_siswa($id)->num_rows()<1)
	        {
	            show_404();
	        }

			$data = array(
				'title' 		=> 'Edit Data Siswa',
				'count_contact' => $this->model_counter->count_contact(),
				'count_comment' => $this->model_counter->count_comment(),
				'siswa'			=> $this->model_siswa->detail_siswa($id)->row_array()
			);

			$this->load->view('admin/dir/header', $data);
			$this->load->view('admin/dir/navigation');
			$this->load->view('admin/siswa/update');
			$this->load->view('admin/dir/footer');
		}
	}

	public function detail($id='')
	{
        if ($this->model_siswa->detail_siswa($id)->num_rows()<1)
        {
            show_404();
        }

		$data = array(
			'title' 		=> 'Detail Siswa',
			'count_contact' => $this->model_counter->count_contact(),
			'count_comment' => $this->model_counter->count_comment(),
			'siswa'			=> $this->model_siswa->detail_siswa($id)->row_array()
		);

		$this->load->view('admin/dir/header', $data);
		$this->load->view('admin/dir/navigation');
		$this->load->view('admin/siswa/detail');
		$this->load->view('admin/dir/footer');
	}

	//Delete one item
	public function delete()
	{
		if (empty($_POST['nisn']))
		{
			$this->session->set_flashdata('success', 'Pilih data untuk dihapus');
	        redirect(base_url('admin/siswa/'), 'refresh');
		}
		else
		{
	        $nisn = $_POST['nisn'];
	        $this->model_siswa->deletes($nisn);

			$this->session->set_flashdata('success', 'Data siswa berhasil dihapus');
	        redirect(base_url('admin/siswa/'), 'refresh');
		}
	}
}

/* End of file Siswa.php */
/* Location: ./application/controllers/admin/Siswa.php */
