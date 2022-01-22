<?php
if (empty($this->session->userdata('adminlog'))) {
    show_404();
}
?>
<div class="container-fluid">
    <a href="<?= base_url('admin/dashboard'); ?>">Admin</a> &raquo; <?= $title; ?>
    <hr>
    <h3 class="bold"><?= $title ?></h3>
    <div class="card card-body shadow-sm mt-4">
        <?php
        if ($this->session->flashdata('success')) {
            $keterangan = $this->session->flashdata('success');
            echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
            echo '<a class="close" data-dismiss="alert" aria-label="close">';
            echo '<span aria-hidden="true">&times;</span>';
            echo '</a>';
            echo $keterangan;
            echo '</div>';
        }
        ?>
        <?= form_open_multipart('admin/artikel/update/' . $artikel['id'], 'onsubmit="disable()"'); ?>
        <div class="row">
            <div class="col-lg-6 col-sm-12 mb-3">
                <label class="bold">Judul</label>
                <input type="text" name="title" class="form-control" value="<?= $artikel['title']; ?>" autocomplete="off">
                <?= form_error('title', '<p class="text-danger bold">', '</p>'); ?>
            </div>
            <div class="col-lg-6 col-sm-12">
                <label class="bold">Gambar</label>
                <input type="file" name="image" class="form-control">
                <small>[*] Jika tidak diisi maka akan tetap menggunakan gambar yang lama</small>
            </div>
        </div>
        <div class="pt-3"></div>
        <label class="bold">Artikel</label>
        <textarea name="article" id="summernote" class="form-control" autocomplete="off"><?= $artikel['article']; ?></textarea>
        <?= form_error('article', '<p class="text-danger bold">', '</p>'); ?>
        <div class="pt-3"></div>
        <div class="actions">
            <button name="submit" id="btn" class="btn btn-primary">Posting</button>
        </div>
        <?= form_close(); ?>
    </div>
    <div class="pt-4"></div>
    <?php include(APPPATH . 'views/admin/dir/copyright.php'); ?>
</div>