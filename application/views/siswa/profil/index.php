<?php
if (empty($this->session->userdata('siswalog'))) {
    show_404();
}
?>
<div class="container-fluid">
    <p>Login sebagai: <b><?= $siswa->nama; ?></b> (<?= $siswa->nisn; ?>)</p>
    <hr>
    <div class="list-group">
        <div class="list-group-item shadow-sm bold">
            Profil Siswa
        </div>
        <div class="list-group-item shadow-sm">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <center>
                        <img src="<?= base_url('images/siswa/' . $siswa->foto); ?>" class="pl-5 pr-5">
                    </center>
                </div>
                <div class="col-lg-7">
                    <div class="list-group">
                        <div class="list-group-item shadow-sm">
                            <div class="form-row">
                                <div class="col">
                                    Nama Lengkap
                                </div>
                                <div class="col">
                                    <?= $siswa->nama; ?>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item shadow-sm">
                            <div class="form-row">
                                <div class="col">
                                    NISN
                                </div>
                                <div class="col">
                                    <?= $siswa->nisn; ?>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item shadow-sm">
                            <div class="form-row">
                                <div class="col">
                                    Kelas / Tingkat
                                </div>
                                <div class="col">
                                    <?= $siswa->kelas; ?>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item shadow-sm">
                            <div class="form-row">
                                <div class="col">
                                    Jurusan
                                </div>
                                <div class="col">
                                    <?= $siswa->jurusan; ?>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item shadow-sm">
                            <div class="form-row">
                                <div class="col">
                                    Guru Wali
                                </div>
                                <div class="col">
                                    -
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include(APPPATH . 'views/siswa/dir/copyright.php'); ?>
</div>