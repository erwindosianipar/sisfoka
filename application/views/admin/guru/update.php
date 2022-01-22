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
        <?= form_open_multipart('admin/guru/update/' . $guru['id'], 'onsubmit="disable()"'); ?>
        <div class="row mb-3">
            <div class="col-sm-4 mb-3">
                <label class="bold">NIP</label>
                <input type="number" name="nip" value="<?= $guru['nip']; ?>" class="form-control" disabled="" required>
                <?= form_error('nip', '<span class="text-danger bold">', '</span>'); ?>
            </div>
            <div class="col-sm-4 mb-3">
                <label class="bold">Nama</label>
                <input type="text" name="nama" value="<?= $guru['nama']; ?>" class="form-control">
                <?= form_error('nama', '<span class="text-danger bold">', '</span>'); ?>
            </div>
            <div class="col-sm-4 mb-3">
                <label class="bold">Divisi</label>
                <input type="text" name="divisi" value="<?= $guru['divisi']; ?>" class="form-control">
                <small>Contoh: Guru bahasa Indonesia, Guru Matematika</small>
                <?= form_error('divisi', '<span class="text-danger bold">', '</span>'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mb-3">
                <label class="bold">Guru Wali</label>
                <select name="wali" class="form-control">
                    <option value="T" <?php if ($guru['wali'] == 'T') echo ' selected'; ?>>Tidak</option>
                    <option value="Y" <?php if ($guru['wali'] == 'Y') echo ' selected'; ?>>Ya</option>
                </select>
            </div>
            <div class="col-sm-4 mb-3">
                <label class="bold">Kelas</label>
                <select name="kelas" class="form-control">
                    <option value="0" <?php if ($guru['kelas'] == '0') echo ' selected'; ?>>-</option>
                    <option value="X" <?php if ($guru['kelas'] == 'X') echo ' selected'; ?>>X</option>
                    <option value="XI" <?php if ($guru['kelas'] == 'XI') echo ' selected'; ?>>XI</option>
                    <option value="XII" <?php if ($guru['kelas'] == 'XII') echo ' selected'; ?>>XII</option>
                </select>
            </div>
            <div class="col-sm-4 mb-3">
                <label class="bold">Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option value="0" <?php if ($guru['jurusan'] == '0') echo ' selected'; ?>>-</option>
                    <option value="RPL" <?php if ($guru['jurusan'] == 'RPL') echo ' selected'; ?>>RPL</option>
                    <option value="TKJ" <?php if ($guru['jurusan'] == 'TKJ') echo ' selected'; ?>>TKJ</option>
                    <option value="AK" <?php if ($guru['jurusan'] == 'AK') echo ' selected'; ?>>AK</option>
                    <option value="AP" <?php if ($guru['jurusan'] == 'AP') echo ' selected'; ?>>AP</option>
                </select>
            </div>
        </div>
        <div class="pt-3"></div>
        <button class="btn btn-primary" id="btn">Posting</button>
        <?= form_close(); ?>
    </div>
    <?php include(APPPATH . 'views/admin/dir/copyright.php'); ?>
</div>