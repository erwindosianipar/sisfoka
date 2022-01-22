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
        <?= form_open('admin/siswa/update/' . $siswa['id'], 'onsubmit="disable()"'); ?>
        <div class="row">
            <div class="col-sm-6 mb-3">
                <label class="bold">NISN</label>
                <input type="number" name="nisn" value="<?= $siswa['nisn']; ?>" class="form-control" placeholder="Nomor NISN" disabled>
                <?= form_error('nisn', '<span class="text-danger bold">', '</span>'); ?>
            </div>
            <div class="col-sm-6 mb-3">
                <label class="bold">Nama siswa</label>
                <input type="text" name="nama" value="<?= $siswa['nama']; ?>" class="form-control" placeholder="Nama siswa">
                <?= form_error('nama', '<span class="text-danger bold">', '</span>'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mb-3">
                <label class="bold">Kelas</label>
                <select name="kelas" class="form-control">
                    <option value="0" <?php if ($siswa['kelas'] == '0') echo ' selected'; ?>>Null</option>
                    <option value="X" <?php if ($siswa['kelas'] == 'X') echo ' selected'; ?>>X</option>
                    <option value="XI" <?php if ($siswa['kelas'] == 'XI') echo ' selected'; ?>>XI</option>
                    <option value="XII" <?php if ($siswa['kelas'] == 'XII') echo ' selected'; ?>>XII</option>
                </select>
                <small>[*] <b>Null</b> untuk siswa nonaktif</small>
                <?= form_error('kelas', '<span class="text-danger bold">', '</span>'); ?>
            </div>
            <div class="col-sm-6 mb-3">
                <label class="bold">Jurusan</label>
                <select name="jurusan" class="form-control">
                    <option value="RPL" <?php if ($siswa['jurusan'] == 'RPL') echo ' selected'; ?>>RPL</option>
                    <option value="TKJ" <?php if ($siswa['jurusan'] == 'TKJ') echo ' selected'; ?>>TKJ</option>
                    <option value="AK" <?php if ($siswa['jurusan'] == 'AK') echo ' selected'; ?>>AK</option>
                    <option value="AP" <?php if ($siswa['jurusan'] == 'AP') echo ' selected'; ?>>AP</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mb-3">
                <label class="bold">Status kesiswaan</label>
                <select name="status" class="form-control">
                    <option value="aktif" <?php if ($siswa['status'] == 'aktif') echo ' selected'; ?>>Aktif</option>
                    <option value="prakerin" <?php if ($siswa['status'] == 'prakerin') echo ' selected'; ?>>Prakerin</option>
                    <option value="alumni" <?php if ($siswa['status'] == 'alumni') echo ' selected'; ?>>Alumni</option>
                    <option value="keluar" <?php if ($siswa['status'] == 'keluar') echo ' selected'; ?>>Keluar</option>
                </select>
            </div>
            <div class="col-sm-6 mb-3">
                <label class="bold">Status akses login situs</label>
                <select name="aktif" class="form-control">
                    <option value="1" <?php if ($siswa['aktif'] == '1') echo ' selected'; ?>>Aktif</option>
                    <option value="0" <?php if ($siswa['aktif'] == '0') echo ' selected'; ?>>Tidak aktif</option>
                </select>
            </div>
        </div>
        <div class="pt-3"></div>
        <button class="btn btn-primary" id="btn">Update</button>
        <?= form_close(); ?>
    </div>
    <?php include(APPPATH . 'views/admin/dir/copyright.php'); ?>
</div>