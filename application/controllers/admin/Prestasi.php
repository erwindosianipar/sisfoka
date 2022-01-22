<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_counter');
        $this->load->model('model_prestasi');
        $this->load->library('upload');
    }

    public function index()
    {
        $data = array(
            'title'         => 'Prestasi',
            'count_contact' => $this->model_counter->count_contact(),
            'count_comment' => $this->model_counter->count_comment()
        );

        $data['prestasis']     = $this->model_prestasi->get_prestasi();

        $this->load->view('admin/dir/header', $data);
        $this->load->view('admin/dir/navigation');
        $this->load->view('admin/prestasi/index');
        $this->load->view('admin/dir/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules(
            'title',
            'Judul',
            'trim|htmlspecialchars|required|min_length[10]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang sepuluh huruf'
            )
        );

        $this->form_validation->set_rules(
            'description',
            'Deskripsi',
            'trim|htmlspecialchars|required|min_length[10]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang sepuluh huruf'
            )
        );

        $this->form_validation->set_rules(
            'content',
            'Konten',
            'trim|required|min_length[10]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang sepuluh huruf'
            )
        );

        $nameimg = $this->session->userdata('adminid') . '_' . time() . '_' . uniqid() . '_' . date("Ymdhis") . '_n';

        $config['upload_path']      = './images/prestasi/';
        $config['allowed_types']    = 'jpg|jpeg|png|gif';
        $config['quality']          = '100%';
        $config['file_name']        = $nameimg;

        $this->upload->initialize($config);

        if ($this->form_validation->run() === TRUE) {

            if (!empty($_FILES['image']['name'])) {

                if ($this->upload->do_upload('image')) {

                    $gambar = $this->upload->data();

                    $this->_thumbnails_prestasi($gambar['file_name']);

                    $nameimage      = $gambar['file_name'];
                    $title          = $this->input->post('title');
                    $description    = $this->input->post('description');
                    $content        = $this->input->post('content');

                    $this->model_prestasi->set_prestasi($title, $description, $nameimage, $content);

                    $this->session->set_flashdata('success', 'Prestasi berhasil ditambahkan');
                    redirect('admin/prestasi/create', 'refresh');
                } else {
                    $this->session->set_flashdata('success', 'Gambar gagal diupload');
                    redirect('admin/prestasi/create', 'refresh');
                }
            } else {
                $this->session->set_flashdata('success', 'Gambar tidak boleh kosong');
                redirect('admin/prestasi/create', 'refresh');
            }
        } else {
            $data = array(
                'title'         => 'Tambah Prestasi',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment()
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/prestasi/create');
            $this->load->view('admin/dir/footer');
        }
    }

    public function update($id = NULL)
    {
        $data['prestasi_item'] = $this->model_prestasi->get_by_id($id);

        if (empty($data['prestasi_item'])) {
            show_404();
        }

        $this->form_validation->set_rules(
            'title',
            'Judul',
            'trim|htmlspecialchars|required|min_length[10]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang sepuluh huruf'
            )
        );

        $this->form_validation->set_rules(
            'description',
            'Deskripsi',
            'trim|htmlspecialchars|required|min_length[10]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang sepuluh huruf'
            )
        );

        $this->form_validation->set_rules(
            'content',
            'Konten',
            'trim|required|min_length[10]',
            array(
                'required'      => '%s tidak boleh kosong',
                'min_length'    => '%s minimal panjang sepuluh huruf'
            )
        );

        $nameimg = $this->session->userdata('adminid') . '_' . time() . '_' . uniqid() . '_' . date("Ymdhis") . '_n';

        $config['upload_path']      = './images/prestasi/';
        $config['allowed_types']    = 'jpg|jpeg|png|gif';
        $config['quality']          = '100%';
        $config['file_name']        = $nameimg;

        $this->upload->initialize($config);

        if ($this->form_validation->run() === TRUE) {
            if (!empty($_FILES['image']['name'])) {
                if ($this->upload->do_upload('image')) {
                    $gambar = $this->upload->data();

                    $this->_thumbnails_prestasi($gambar['file_name']);

                    $nameimage      = $gambar['file_name'];
                    $title          = $this->input->post('title');
                    $description    = $this->input->post('description');
                    $content        = $this->input->post('content');

                    $this->model_prestasi->update_image($id, $title, $description, $nameimage, $content);

                    $this->session->set_flashdata('success', 'Prestasi berhasil ditambahkan');
                    redirect('admin/prestasi/update/' . $id, 'refresh');
                } else {
                    $this->session->set_flashdata('success', 'Gambar gagal diupload');
                    redirect('admin/prestasi/update/' . $id, 'refresh');
                }
            } else {
                $title          = $this->input->post('title');
                $description    = $this->input->post('description');
                $content        = $this->input->post('content');

                $this->model_prestasi->update_no_image($id, $title, $description, $content);

                $this->session->set_flashdata('success', 'Prestasi berhasil ditambahkan');
                redirect('admin/prestasi/update/' . $id, 'refresh');
            }
        } else {
            $data = array(
                'title'         => 'Update Prestasi',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'prestasi'      => $this->model_prestasi->get_by_id($id)
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/prestasi/update');
            $this->load->view('admin/dir/footer');
        }
    }

    public function delete()
    {
        $this->form_validation->set_rules('id', 'id', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id');
            $this->model_prestasi->delete($id);

            unlink('images/prestasi/' . $data['prestasi_item']['image']);
            unlink('images/prestasi/large/' . $data['prestasi_item']['image']);
            unlink('images/prestasi/medium/' . $data['prestasi_item']['image']);

            $this->session->set_flashdata('success', 'Prestasi sudah dihapus');
            redirect('admin/prestasi', 'refresh');
        } else {
            show_404();
        }
    }

    function _thumbnails_prestasi($file_name)
    {
        $config = array(

            // large image size
            array(
                'image_library' => 'GD2',
                'source_image'  => './images/prestasi/' . $file_name,
                'maintain_ratio' => FALSE,
                'width'         => 700,
                'height'        => 300,
                'new_image'     => './images/prestasi/large/' . $file_name
            ),

            // medium image size
            array(
                'image_library' => 'GD2',
                'source_image'  => './images/prestasi/' . $file_name,
                'maintain_ratio' => FALSE,
                'width'         => 200,
                'height'        => 200,
                'new_image'     => './images/prestasi/medium/' . $file_name
            )
        );

        $this->load->library('image_lib', $config[0]);
        foreach ($config as $item) {
            $this->image_lib->initialize($item);
            if (!$this->image_lib->resize()) {
                return false;
            }
            $this->image_lib->clear();
        }
    }
}
