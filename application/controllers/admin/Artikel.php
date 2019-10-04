<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('model_counter');
		$this->load->model('model_article');
		$this->load->library('upload');
	}

	public function index()
	{
		$data = array(
			'title' 		=> 'Artikel',
			'count_contact' => $this->model_counter->count_contact(),
			'count_comment' => $this->model_counter->count_comment()
		);

        $data['artikels'] 	= $this->model_article->get_artikel();

		$this->load->view('admin/dir/header', $data);
		$this->load->view('admin/dir/navigation');
		$this->load->view('admin/artikel/index');
		$this->load->view('admin/dir/footer');
	}

	public function create()
	{
        $this->form_validation->set_rules('title', 'Judul', 'trim|htmlspecialchars|required|min_length[10]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang sepuluh huruf'
            )
        );

        $this->form_validation->set_rules('article', 'Artikel', 'trim|required|min_length[100]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang seratus huruf'
            )
        );

        $nameimg = $this->session->userdata('adminid').'_'.time().'_'.uniqid().'_'.date("Ymdhis").'_n';

        $config['upload_path']      = './images/artikel/';
        $config['allowed_types']    = 'jpg|jpeg|png|gif';
        $config['quality']          = '100%';
        $config['file_name']        = $nameimg;

        $this->upload->initialize($config);

        if ($this->form_validation->run() === TRUE)
        {
            if (!empty($_FILES['image']['name']))
            {
                if ($this->upload->do_upload('image'))
                {
                    $gambar = $this->upload->data();

                    $this->_thumbnails_artikel($gambar['file_name']);

                    $nameimage  = $gambar['file_name'];
                    $title      = $this->input->post('title');
                    $article    = $this->input->post('article');

                    $this->model_article->create($title, $nameimage, $article);

                    $this->session->set_flashdata('success', 'article berhasil ditambahkan');
                    redirect('admin/artikel/create', 'refresh');
                
                }
                else
                {
                    $this->session->set_flashdata('success', 'Gambar gagal diupload');
                    redirect('admin/artikel/create', 'refresh');
                }
            }
            else
            {
                $this->session->set_flashdata('success', 'Gambar tidak boleh kosong');
                redirect('admin/artikel/create', 'refresh');
            }
        }
        else
        {
            $data = array(
                'title'         => 'Tambah Artikel',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment()
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/artikel/create');
            $this->load->view('admin/dir/footer');
        }
	}

	public function update($id = NULL)
	{
        $data['artikel_item'] = $this->model_article->get_artikel($id);

        if (empty($data['artikel_item']))
        {
            show_404();
        }

        $this->form_validation->set_rules('title', 'Judul', 'trim|htmlspecialchars|required|min_length[10]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang sepuluh huruf'
            )
        );

        $this->form_validation->set_rules('article', 'Artikel', 'trim|required|min_length[100]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang seratus huruf'
            )
        );

        $nameimg = $this->session->userdata('adminid').'_'.time().'_'.uniqid().'_'.date("Ymdhis").'_n';

        $config['upload_path']      = './images/artikel/';
        $config['allowed_types']    = 'jpg|jpeg|png|gif';
        $config['quality']          = '100%';
        $config['file_name']        = $nameimg;

        $this->upload->initialize($config);

        if ($this->form_validation->run() === TRUE)
        {
            if (!empty($_FILES['image']['name']))
            {
                if ($this->upload->do_upload('image'))
                {
                    $gambar = $this->upload->data();
                    $this->_thumbnails_artikel($gambar['file_name']);

                    $nameimage  = $gambar['file_name'];
                    $title      = $this->input->post('title');
                    $article    = $this->input->post('article');

                    $this->model_article->update_image($id, $title, $nameimage, $article);

                    $this->session->set_flashdata('success', 'Artikel berhasil diupdate');
                    redirect('admin/artikel/update/'.$id, 'refresh');
                }
                else
                {
	                $this->session->set_flashdata('success', 'Gambar gagal diupload');
	                redirect('admin/artikel/update/'.$id, 'refresh');
                }
            }
            else
            {
                $title      = $this->input->post('title');
                $article    = $this->input->post('article');

                $this->model_article->update_no_image($id, $title, $article);

                $this->session->set_flashdata('success', 'Artikel berhasil diupdate');
                redirect('admin/artikel/update/'.$id, 'refresh');
            }
        }
        else
        {
			$data = array(
				'title' 		=> 'Update Artikel',
				'count_contact' => $this->model_counter->count_contact(),
				'count_comment' => $this->model_counter->count_comment(),
				'artikel'		=> $this->model_article->get_artikel($id)
			);

			$this->load->view('admin/dir/header', $data);
			$this->load->view('admin/dir/navigation');
			$this->load->view('admin/artikel/update');
			$this->load->view('admin/dir/footer');
        }
	}

	public function delete()
	{
        $this->form_validation->set_rules('id', 'id', 'trim|required');

        if ($this->form_validation->run() == TRUE)
        {
            $id = $this->input->post('id');
    		$this->model_article->delete($id);
    		
    		unlink('images/artikel/small/'.$data['artikel_item']['image']);
    		unlink('images/artikel/medium/'.$data['artikel_item']['image']);
    		unlink('images/artikel/large/'.$data['artikel_item']['image']);
    		unlink('images/artikel/'.$data['artikel_item']['image']);

            $this->session->set_flashdata('success', 'Artikel sudah dihapus');
            redirect('admin/artikel', 'refresh');
        }
        else
        {
            show_404();
        }
	}

    function _thumbnails_artikel($file_name)
    {
        $config = array(

            // large image size
            array(
                'image_library' => 'GD2',
                'source_image'  => './images/artikel/'.$file_name,
                'maintain_ratio'=> FALSE,
                'width'         => 700,
                'height'        => 300,
                'new_image'     => './images/artikel/large/'.$file_name
            ),

            // medium image size
            array(
                'image_library' => 'GD2',
                'source_image'  => './images/artikel/'.$file_name,
                'maintain_ratio'=> FALSE,
                'width'         => 200,
                'height'        => 200,
                'new_image'     => './images/artikel/medium/'.$file_name
            ),

            // small image size
            array(
                'image_library' => 'GD2',
                'source_image'  => './images/artikel/'.$file_name,
                'maintain_ratio'=> FALSE,
                'width'         => 100,
                'height'        => 50,
                'new_image'     => './images/artikel/small/'.$file_name
            ));

        $this->load->library('image_lib', $config[0]);
        foreach ($config as $item){
            $this->image_lib->initialize($item);
            if(!$this->image_lib->resize()){
                return false;
            }
            $this->image_lib->clear();
        }
    }
}