<?php
class Article extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_counter');
        $this->load->model('public/model_artikel');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['title']      = 'Arsip Artikel - SMK Pelita Pematangsiantar';
        $data['artikels']   = $this->model_artikel->artikel();

        $this->load->view('dir/header', $data);
        $this->load->view('public/article/index', $data);
        $this->load->view('dir/footer');
    }

    public function view($link = NULL)
    {
        $data['artikel'] = $this->model_artikel->artikel($link);

        if (empty($data['artikel']))
        {
            show_404();
        }

        $data['title']      = $data['artikel']['title'].' - SMK Pelita Pematangsiantar';
        $data['lainnyas']   = $this->model_artikel->artikel();
        $data['komentars']  = $this->model_artikel->komentar($data['artikel']['id']);

        $this->load->view('dir/header', $data);
        $this->load->view('public/article/view');
        $this->load->view('dir/footer');
    }

    public function komentar($direct, $articleid)
    {
        $this->load->model('model_komentar');

        $this->form_validation->set_rules('name', 'Nama', 'trim|htmlspecialchars|required|min_length[3]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang tiga huruf'
            )
        );

        $this->form_validation->set_rules('email', 'Email', 'trim|htmlspecialchars|required|valid_email',
            array(
                'required'      => '%s tidak boleh kosong',
                'valid_email'   => '%s tidak valid' 
            )
        );

        $this->form_validation->set_rules('comment', 'Komentar', 'trim|htmlspecialchars|required|min_length[3]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang tiga huruf'
            )
        );

        if ($this->form_validation->run() === FALSE)
        {
            $this->session->set_flashdata(
                array(
                    'error_name'    => form_error('name', '<p class="text-danger">', '</p>'),
                    'error_email'   => form_error('email', '<p class="text-danger">', '</p>'),
                    'error_comment' => form_error('comment', '<p class="text-danger">', '</p>')
                )
            );

            redirect('article/'.$direct, 'refresh');
        }
        else
        {
            $name       = $this->input->post('name');
            $email      = $this->input->post('email');
            $comment    = $this->input->post('comment');

            $this->model_artikel->komentari($articleid, $name, $email, $comment, $direct);

            $this->session->set_flashdata('success', 'Komentar berhasil ditambahkan');
            redirect('article/'.$direct, 'refresh');
        }
    }
}