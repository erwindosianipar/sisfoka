<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
    }

    public function upload_image()
    {
        if (isset($_FILES["image"]["name"])) {
            $config['upload_path']         = './images/dokumen/';
            $config['allowed_types']     = 'jpg|jpeg|png|gif';

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
                return FALSE;
            } else {
                $data = $this->upload->data();
                $config['image_library']    = 'gd2';
                $config['source_image']     = './images/dokumen/' . $data['file_name'];
                $config['create_thumb']     = FALSE;
                $config['maintain_ratio']   = TRUE;
                $config['quality']          = '100%';
                $config['new_image']        = './images/dokumen/' . $data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                echo base_url() . 'images/dokumen/' . $data['file_name'];
            }
        }
    }

    //Delete image summernote
    public function delete_image()
    {
        $src = $this->input->post('src');
        $file_name = str_replace(base_url(), '', $src);

        if (unlink($file_name)) {
            echo 'File berhasil dihapus';
        }
    }
}

/* End of file Add.php */
/* Location: ./application/controllers/admin/Add.php */