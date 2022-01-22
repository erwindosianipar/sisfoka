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
        <?= form_open('admin/testimoni/update/' . $testimoni['id'], 'onsubmit="disable()"'); ?>
        <div class="row">
            <div class="col-lg-6 col-sm-12 mb-3">
                <label class="bold">Nama Alumni</label>
                <input type="text" name="name" class="form-control" placeholder="Nama alumni" autocomplete="off" value="<?= $testimoni['name'] ?>">
                <?= form_error('name', '<span class="text-danger bold">', '</span>'); ?>
            </div>
            <div class="col-lg-6 col-sm-12 mb-3">
                <label class="bold">Stambuk</label>
                <input type="number" name="stambuk" class="form-control" placeholder="Stambuk" autocomplete="off" value="<?= $testimoni['stambuk'] ?>">
                <?= form_error('stambuk', '<span class="text-danger bold">', '</span>'); ?>
            </div>
            <div class="col-lg-6 col-sm-12 mb-3">
                <label class="bold">Testimoni</label>
                <textarea name="testimoni" class="form-control" placeholder="Testimoni"><?= $testimoni['testimoni'] ?></textarea>
                <?= form_error('testimoni', '<span class="text-danger bold">', '</span>'); ?>
            </div>
            <div class="col-lg-6 col-sm-12 mb-3">
                <label class="bold">Pekerjaan</label>
                <input type="text" name="whois" class="form-control" placeholder="Pekerjaan" autocomplete="off" value="<?= $testimoni['whois'] ?>">
                <?= form_error('whois', '<span class="text-danger bold">', '</span>'); ?>
            </div>
        </div>
        <button class="btn btn-primary" id="btn">Posting</button>
        <?= form_close(); ?>
    </div>
    <?php include(APPPATH . 'views/admin/dir/copyright.php'); ?>
</div>