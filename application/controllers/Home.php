<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $this->load->model('model_article');
        $this->load->model('public/model_page');
        $this->load->model('public/model_jurusan');
        $this->load->model('public/model_testimoni');

		$data = array(
			'title' 		=> 'SMK Pelita Pematangsiantar',
			'impressium' 	=> $this->model_page->sambutan_kepsek(),
			'news' 			=> $this->model_article->get_news_lim5(),
			'any_news'		=> $this->model_article->any_news(),
			'jurusans' 		=> $this->model_jurusan->jurusan(),
			'testimonis' 	=> $this->model_testimoni->get_testimoni(),
		);

		$this->load->view('dir/header', $data);
		$this->load->view('public/home');
		$this->load->view('dir/footer');
	}
}
