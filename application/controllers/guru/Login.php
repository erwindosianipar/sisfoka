<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_login');
	}

	public function index()
	{
		$data = array(
			'title' => 'Login Guru - SMK Pelita Pematangsiantar',
			'img' 	=> $this->_create_captcha()
		);

		$this->load->view('dir/header', $data);
		$this->load->view('guru/login');
		$this->load->view('dir/footer');
	}

	public function logout()
	{
		if(empty($this->session->userdata('gurulog')))
		{
			show_404();
		}
		else
		{
			foreach ($_SESSION as $key => $value)
			{
				unset($_SESSION[$key]);
			}
			redirect(base_url('guru/login', 'refresh'));
		}
	}

	public function _create_captcha()
	{
		$this->load->helper('captcha');
		$acak = substr(number_format(time()*rand(), 0, '', ''), 0, 5);
		$options = array(
			'word'          => $acak,
	        'img_path'      => './images/captcha/',
	        'img_url'       => base_url().'images/captcha/',
	        'img_width'     => '100',
	        'img_height'    => 38,
	        'expiration'    => 7200,

	        'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(206, 212, 218),
                'text' => array(0, 0, 0),
                'grid' => array(255, 255, 255)
        	)
        );

        $cap = create_captcha($options);
        $image = $cap['image'];

        $this->session->set_userdata('captchaword', $cap['word']);
        return $image;
	}

	public function check_captcha()
	{
		if($this->input->post('captcha') == $this->session->userdata('captchaword'))
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_captcha', 'Captcha tidak cocok');
			return FALSE;
		}
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */