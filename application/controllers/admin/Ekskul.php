<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekskul extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_counter');
        $this->load->model('model_ekstrakurikuler');
        $this->load->library('upload');
    }

    public function index()
    {
        $data = array(
            'title'         => 'Ekstrakurikuler',
            'count_contact' => $this->model_counter->count_contact(),
            'count_comment' => $this->model_counter->count_comment()
        );

        $data['ekskuls']     = $this->model_ekstrakurikuler->get_ekstrakurikuler();

        $this->load->view('admin/dir/header', $data);
        $this->load->view('admin/dir/navigation');
        $this->load->view('admin/ekskul/index');
        $this->load->view('admin/dir/footer');
    }

    public function create()
    {
        $this->form_validation->set_rules(
            'name',
            'Nama ekstrakurikuler',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'description',
            'Deskripsi',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'lead',
            'Nama pembimbing',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $nameimg = $this->session->userdata('adminid') . '_' . time() . '_' . uniqid() . '_' . date("Ymdhis") . '_n';

        $config['upload_path']      = './images/ekskul/';
        $config['allowed_types']    = 'jpg|jpeg|png|gif';
        $config['quality']          = '100%';
        $config['file_name']        = $nameimg;

        $this->upload->initialize($config);

        if ($this->form_validation->run() === TRUE) {
            if (!empty($_FILES['image']['name'])) {
                if ($this->upload->do_upload('image')) {
                    $gambar = $this->upload->data();

                    $this->_thumbnails_ekskul($gambar['file_name']);

                    $nameimage      = $gambar['file_name'];

                    $name          = $this->input->post('name');
                    $description    = $this->input->post('description');
                    $lead           = $this->input->post('lead');

                    $this->model_ekstrakurikuler->create($name, $nameimage, $description, $lead);

                    $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
                    redirect('admin/ekskul/create', 'refresh');
                } else {
                    $this->session->set_flashdata('success', 'Gambar gagal diupload');
                    redirect('admin/ekskul/create', 'refresh');
                }
            } else {
                $this->session->set_flashdata('success', 'Gambar tidak boleh kosong');
                redirect('admin/ekskul/create', 'refresh');
            }
        } else {
            $data = array(
                'title'         => 'Tambah Ekstrakurikuler',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment()
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/ekskul/create');
            $this->load->view('admin/dir/footer');
        }
    }

    public function update($id = NULL)
    {
        $data['ekskul_item'] = $this->model_ekstrakurikuler->get_by_id($id);

        if (empty($data['ekskul_item'])) {
            show_404();
        }

        $this->form_validation->set_rules(
            'name',
            'Nama ekstrakurikuler',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'description',
            'Deskripsi',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'lead',
            'Nama pembimbing',
            'trim|htmlspecialchars|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $nameimg = $this->session->userdata('adminid') . '_' . time() . '_' . uniqid() . '_' . date("Ymdhis") . '_n';

        $config['upload_path']      = './images/ekskul/';
        $config['allowed_types']    = 'jpg|jpeg|png|gif';
        $config['quality']          = '100%';
        $config['file_name']        = $nameimg;

        $this->upload->initialize($config);

        if ($this->form_validation->run() === TRUE) {
            if (!empty($_FILES['image']['name'])) {
                if ($this->upload->do_upload('image')) {
                    $gambar = $this->upload->data();

                    $this->_thumbnails_ekskul($gambar['file_name']);

                    $nameimage      = $gambar['file_name'];

                    $name              = $this->input->post('name');
                    $description    = $this->input->post('description');
                    $lead           = $this->input->post('lead');

                    $this->model_ekstrakurikuler->update_image($id, $name, $nameimage, $description, $lead);

                    $this->session->set_flashdata('success', 'Data berhasil diupdate');
                    redirect('admin/ekskul/update/' . $id, 'refresh');
                } else {
                    $this->session->set_flashdata('success', 'Gambar gagal diupload');
                    redirect('admin/ekskul/update/' . $id, 'refresh');
                }
            } else {
                $name          = $this->input->post('name');
                $description    = $this->input->post('description');
                $lead           = $this->input->post('lead');

                $this->model_ekstrakurikuler->update_no_image($id, $name, $description, $lead);
                $this->session->set_flashdata('success', 'Data berhasil diupdate');
                redirect('admin/ekskul/update/' . $id, 'refresh');
            }
        } else {
            $data = array(
                'title'         => 'Update Ekstrakurikuler',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'ekskul'        => $this->model_ekstrakurikuler->get_by_id($id)
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/ekskul/update');
            $this->load->view('admin/dir/footer');
        }
    }

    public function delete()
    {
        $this->form_validation->set_rules('id', 'id', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id');
            $this->model_ekstrakurikuler->delete($id);

            unlink('images/ekskul/medium/' . $data['ekskul_item']['image']);
            unlink('images/ekskul/large/' . $data['ekskul_item']['image']);
            unlink('images/ekskul/' . $data['ekskul_item']['image']);

            $this->session->set_flashdata('success', 'Ekstrakurikuler sudah dihapus');
            redirect('admin/ekskul', 'refresh');
        } else {
            show_404();
        }
    }

    function _thumbnails_ekskul($file_name)
    {
        $config = array(
            // medium image size
            array(
                'image_library' => 'GD2',
                'source_image'  => './images/ekskul/' . $file_name,
                'maintain_ratio' => FALSE,
                'width'         => 700,
                'height'        => 300,
                'new_image'     => './images/ekskul/large/' . $file_name
            ),

            // small image size
            array(
                'image_library' => 'GD2',
                'source_image'  => './images/ekskul/' . $file_name,
                'maintain_ratio' => FALSE,
                'width'         => 200,
                'height'        => 200,
                'new_image'     => './images/ekskul/medium/' . $file_name
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
