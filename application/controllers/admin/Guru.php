<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies
        $this->load->model('model_counter');
        $this->load->model('admin/model_guru');
    }

    // List all your items
    public function index($nama = '', $nip = '')
    {
        $data = array(
            'title'         => 'Data Guru',
            'count_contact' => $this->model_counter->count_contact(),
            'count_comment' => $this->model_counter->count_comment()
        );

        if (isset($_POST['cari'])) {
            $nama     = $this->input->post('nama');
            $nip     = $this->input->post('nip');

            $data['gurus'] = $this->model_guru->get_guru($nama, $nip);
        } else {
            $data['gurus'] = $this->model_guru->get_guru($nama, $nip);
        }

        $this->load->view('admin/dir/header', $data);
        $this->load->view('admin/dir/navigation');
        $this->load->view('admin/guru/index');
        $this->load->view('admin/dir/footer');
    }

    // Add a new item
    public function add()
    {
        $this->form_validation->set_rules(
            'nip',
            'NIP',
            'trim|required|max_length[20]|is_unique[guru.nip]',
            array(
                'required'      => '%s tidak boleh kosong',
                'max_length'    => '%s maksimal 20 karakter',
                'is_unique'        => '%s sudah digunakan'
            )
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'divisi',
            'Divisi',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        if ($this->form_validation->run() == TRUE) {
            $nip         = $this->input->post('nip');
            $nama         = $this->input->post('nama');
            $divisi     = $this->input->post('divisi');
            $wali         = $this->input->post('wali');
            $kelas         = $this->input->post('kelas');
            $jurusan     = $this->input->post('jurusan');

            $this->model_guru->add($nip, $nama, $divisi, $wali, $kelas, $jurusan);

            $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
            redirect('admin/guru/add', 'refresh');
        } else {
            $data = array(
                'title'         => 'Tambah Guru',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/guru/add');
            $this->load->view('admin/dir/footer');
        }
    }

    public function upload($id = '')
    {
        echo "Oops something when wrong!";
    }

    public function import()
    {
        # code...
    }

    //Update one item
    public function update($id)
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        $this->form_validation->set_rules(
            'divisi',
            'Divisi',
            'trim|required',
            array(
                'required'      => '%s tidak boleh kosong'
            )
        );

        if ($this->form_validation->run() == TRUE) {
            $nama         = $this->input->post('nama');
            $divisi     = $this->input->post('divisi');
            $wali         = $this->input->post('wali');
            $kelas         = $this->input->post('kelas');
            $jurusan     = $this->input->post('jurusan');

            $this->model_guru->update($id, $nama, $divisi, $wali, $kelas, $jurusan);

            $this->session->set_flashdata('success', 'Data berhasil diupdate');
            redirect('admin/guru/update/' . $id, 'refresh');
        } else {
            if ($this->model_guru->detail_guru($id)->num_rows() < 1) {
                show_404();
            }

            $data = array(
                'title'         => 'Edit Data Guru',
                'count_contact' => $this->model_counter->count_contact(),
                'count_comment' => $this->model_counter->count_comment(),
                'guru'            => $this->model_guru->detail_guru($id)->row_array()
            );

            $this->load->view('admin/dir/header', $data);
            $this->load->view('admin/dir/navigation');
            $this->load->view('admin/guru/update');
            $this->load->view('admin/dir/footer');
        }
    }

    public function detail($id = '')
    {
        echo "Oops, something when wrong!";
    }

    //Delete one item
    public function delete($id = NULL)
    {
        if (empty($_POST['nip'])) {
            $this->session->set_flashdata('success', 'Pilih data untuk dihapus');
            redirect(base_url('admin/guru/', 'refresh'));
        } else {
            $nip = $_POST['nip'];
            $this->model_guru->deletes($nip);

            $this->session->set_flashdata('success', 'Data guru berhasil dihapus');
            redirect(base_url('admin/guru/', 'refresh'));
        }
    }
}

/* End of file Guru.php */
/* Location: ./application/controllers/admin/Guru.php */
