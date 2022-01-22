<div class="container-fluid">
    <a href="<?= base_url('admin/dashboard'); ?>">Admin</a> &raquo; <?= $title; ?>
    <hr>
    <h3 class="bold"><?= $title; ?></h3>
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
        <?= form_open_multipart('admin/ekskul/create', 'onsubmit="disable()"'); ?>
        <label class="bold">Nama ekstrakurikuler</label>
        <input type="text" name="name" value="<?= set_value('name'); ?>" class="form-control" placeholder="Nama ekstrakurikuler" autocomplete="off">
        <?= form_error('name', '<span class="text-danger bold">', '</span>'); ?>
        <div class="pt-3"></div>
        <label class="bold">Deskripsi</label>
        <textarea name="description" id="summernote" class="form-control" placeholder="Deskripsi"><?= set_value('description'); ?></textarea>
        <?= form_error('description', '<span class="text-danger bold">', '</span>'); ?>
        <div class="pt-3"></div>
        <div class="row">
            <div class="col-sm-6">
                <label class="bold">Gambar</label>
                <input type="file" name="image" class="form-control">
                <div class="pt-3"></div>
            </div>
            <div class="col-sm-6">
                <label class="bold">Nama guru pembimbing</label>
                <input type="text" name="lead" value="<?= set_value('lead'); ?>" class="form-control" placeholder="Nama guru pembimbing" autocomplete="off">
                <?= form_error('lead', '<span class="text-danger bold">', '</span>'); ?>
            </div>
        </div>
        <div class="pt-3"></div>
        <button class="btn btn-primary" id="btn">Posting</button>
        <?= form_close(); ?>
    </div>
    <?php include(APPPATH . 'views/admin/dir/copyright.php'); ?>
</div>