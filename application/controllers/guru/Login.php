<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('guru/model_login');
    }

    public function index()
    {
        $this->form_validation->set_rules(
            'nip',
            'NIP',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong',
            )
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'captcha',
            'Captcha',
            'trim|required|callback_check_captcha',
            array(
                'required'      => '%s tidak boleh kosong',
                'callback_check_captcha'    => '%s tidak cocok'
            )
        );

        if ($this->form_validation->run() == TRUE) {
            $nip         = $this->input->post('nip');
            $password     = $this->input->post('password');

            if ($this->model_login->login($nip, $password)) {
                $guruid = $this->model_login->get_guruid($nip);
                $guru   = $this->model_login->get_guru($guruid);

                if ($guru->aktif = 0) {
                    $this->session->set_flashdata('error', 'Anda tidak diijinkan untuk login');
                    redirect(base_url('guru/login'), 'refresh');
                } else {
                    $newdata = array(
                        'guruid'          => $guru->id,
                        'gurulog'         => TRUE
                    );

                    $this->session->set_userdata($newdata);
                    redirect(base_url('guru/dashboard'), 'refresh');
                }
            } else {
                $this->session->set_flashdata('error', 'Username atau password salah');
                redirect(base_url('guru/login'), 'refresh');
            }
        } else {
            $data = array(
                'title' => 'Login Guru - SMK Pelita Pematangsiantar',
                'img'     => $this->_create_captcha()
            );

            $this->load->view('dir/header', $data);
            $this->load->view('guru/login');
            $this->load->view('dir/footer');
        }
    }

    public function logout()
    {
        if (empty($this->session->userdata('gurulog'))) {
            show_404();
        } else {
            foreach ($_SESSION as $key => $value) {
                unset($_SESSION[$key]);
            }
            redirect(base_url('guru/login'), 'refresh');
        }
    }

    public function _create_captcha()
    {
        $this->load->helper('captcha');
        $acak = substr(number_format(time() * rand(), 0, '', ''), 0, 5);
        $options = array(
            'word'          => $acak,
            'img_path'      => './images/captcha/',
            'img_url'       => base_url() . 'images/captcha/',
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
        if ($this->input->post('captcha') == $this->session->userdata('captchaword')) {
            return TRUE;
        } else {
            $this->form_validation->set_message('check_captcha', 'Captcha tidak cocok');
            return FALSE;
        }
    }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */