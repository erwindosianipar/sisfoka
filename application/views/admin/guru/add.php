<div class="container-fluid">
    <a href="<?= base_url('admin/dashboard'); ?>">Admin</a> &raquo; <?= $title; ?>
    <hr>
    <h3 class="bold font-default"><?= $title; ?></h3>
    <a href="<?= base_url('admin/guru/upload'); ?>">
        <button class="btn btn-primary btn-sm mt-3">Upload data dari excel</button>
    </a>
    <div class="card card-body mt-4 shadow-sm">
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
        <?= form_open_multipart('admin/guru/add', 'onsubmit="disable()"'); ?>
        <div class="row mb-3">
            <div class="col-sm-4 mb-3">
                <label class="bold">NIP</label>
                <input type="text" name="nip" value="<?= set_value('nip'); ?>" class="form-control" placeholder="NIP" autocomplete="off">
                <?= form_error('nip', '<span class="text-danger bold">', '</span>'); ?>
            </div>
            <div class="col-sm-4 mb-3">
                <label class="bold">Nama</label>
                <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" placeholder="Nama guru" autocomplete="off">
                <?= form_error('nama', '<span class="text-danger bold">', '</span>'); ?>
            </div>
            <div class="col-sm-4 mb-3">
                <label class="bold">Divisi</label>
                <input type="text" name="divisi" value="<?= set_value('divisi'); ?>" class="form-control" placeholder="Divisi" autocomplete="off">
                <small>Contoh: Guru bahasa Indonesia, Guru Matematika</small>
                <?= form_error('divisi', '<span class="text-danger bold">', '</span>'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mb-3">
                <label class="bold">Guru Wali</label>
                <select name="wali" class="form-control">
                    <option value="T">Tidak</option>
                    <option value="Y">Ya</option>
                </select>
            </div>
            <div class="col-sm-4 mb-3">
                <label class="bold">Kelas</label>
                <select name="kelas" class="form-control">
                    <option value="0">-</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
            </div>
            <div class="col-sm-4 mb-3">
                <label class="bold">Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option value="0">-</option>
                    <option value="RPL">RPL</option>
                    <option value="TKJ">TKJ</option>
                    <option value="AK">AK</option>
                    <option value="AP">AP</option>
                </select>
            </div>
        </div>
        <div class="pt-3"></div>
        <button class="btn btn-primary" id="btn">Posting</button>
        <?= form_close(); ?>
    </div>
    <?php include(APPPATH . 'views/admin/dir/copyright.php'); ?>
</div>