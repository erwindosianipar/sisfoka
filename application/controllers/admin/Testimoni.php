<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_counter');
		$this->load->model('admin/model_testimoni');
	}

	public function index()
	{
		$data = array(
			'title' 		=> 'Testimoni',
			'count_contact' => $this->model_counter->count_contact(),
			'count_comment' => $this->model_counter->count_comment()
		);

        $data['testimonis'] 	= $this->model_testimoni->testimoni();

		$this->load->view('admin/dir/header', $data);
		$this->load->view('admin/dir/navigation');
		$this->load->view('admin/testimoni/index');
		$this->load->view('admin/dir/footer');
	}

	public function create()
	{
        $this->form_validation->set_rules('name', 'Nama alumni', 'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules('stambuk', 'Stambuk', 'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules('testimoni', 'Stambuk', 'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules('whois', 'Pekerjaan', 'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        if ($this->form_validation->run() === TRUE)
        {
            $name 		= $this->input->post('name');
            $stambuk 	= $this->input->post('stambuk');
            $testimoni 	= $this->input->post('testimoni');
            $whois 		= $this->input->post('whois');

	        $this->model_testimoni->create($name, $stambuk, $testimoni, $whois);

            $this->session->set_flashdata('success', 'Testimoni berhasil ditambahkan');
            redirect('admin/testimoni/create', 'refresh');
        }
        else
        {
            $data = array(
                'title'         => 'Tambah Testimoni',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment()
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/testimoni/create');
            $this->load->view('admin/dir/footer');
        }
	}

	public function update($id = NULL)
	{
        $data['testimoni_item'] = $this->model_testimoni->read($id);

        if (empty($data['testimoni_item']))
        {
            show_404();
        }

        $this->form_validation->set_rules('name', 'Nama alumni', 'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules('stambuk', 'Stambuk', 'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules('testimoni', 'Stambuk', 'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules('whois', 'Pekerjaan', 'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        if ($this->form_validation->run() === TRUE)
        {
            $name 		= $this->input->post('name');
            $stambuk 	= $this->input->post('stambuk');
            $testimoni 	= $this->input->post('testimoni');
            $whois 		= $this->input->post('whois');

	        $this->model_testimoni->update($id, $name, $stambuk, $testimoni, $whois);

            $this->session->set_flashdata('success', 'Testimoni berhasil diupdate');
            redirect('admin/testimoni/update/'.$id, 'refresh');
        }
        else
        {
            $data = array(
                'title'         => 'Update Testimoni',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'testimoni'		=> $this->model_testimoni->read($id)
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/testimoni/update');
            $this->load->view('admin/dir/footer');
        }
	}

	public function delete()
	{
        $this->form_validation->set_rules('id', 'id', 'trim|required');

        if ($this->form_validation->run() == TRUE)
        {
            $id = $this->input->post('id');
    		$this->model_testimoni->delete($id);
    			
    	    $this->session->set_flashdata('success', 'Testimoni sudah dihapus');
    	    redirect('admin/testimoni', 'refresh');
        }
        else
        {
            show_404();
        }
	}
}