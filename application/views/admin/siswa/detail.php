<div class="container-fluid">
    <a href="<?= base_url('admin/dashboard'); ?>">Admin</a> &raquo; <?= $title; ?>
    <hr>
    <h3 class="bold"><?= $title; ?>: <?= $siswa['nama']; ?></h3>
    <div class="mt-4"></div>
    <div class="row">
        <div class="col-lg-8">
            <div class="card card-body shadow-sm">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <img src="<?= base_url('images/siswa/medium/' . $siswa['foto']); ?>" class="rounded mb-3 img-thumbnail" alt="">
                    </div>
                    <div class="col-sm-9">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="col-4">NIK</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7"><?= $siswa['nik']; ?></div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="col-4">NISN</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7"><?= $siswa['nisn']; ?></div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="col-4">Nama lengkap</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7"><?= $siswa['nama']; ?></div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="col-4">Kelas</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7">
                                        <?= strtoupper($siswa['kelas'] . '-' . $siswa['jurusan']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="col-4">Tempat, Tgl. Lahir</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7"><?= $siswa['tmp_lahir']; ?>, <?= $siswa['tgl_lahir']; ?></div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="col-4">Jenis kelamin</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7">
                                        <?php
                                        if ($siswa['gender'] == '0') echo '-';
                                        else echo $siswa['gender'];; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="col-4">Agama</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7"><?= $siswa['agama']; ?></div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="col-4">Email</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7"><?= $siswa['email']; ?></div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="col-4">No. Telepon</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7"><?= $siswa['telepon']; ?></div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="col-4">Telepon orangtua</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7"><?= $siswa['telepon_ortu']; ?></div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="col-4">Alamat</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7"><?= $siswa['alamat']; ?></div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="col-4">Status kesiswaan</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7"><?= $siswa['status']; ?></div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-row">
                                    <div class="col-4">Akses login</div>
                                    <div class="col-1">:</div>
                                    <div class="col-7">
                                        <?php
                                        if ($siswa['aktif'] == 1) echo 'aktif';
                                        else echo 'tidak';
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <a href="<?= base_url('admin/siswa/update/' . $siswa['id']); ?>">
                <button class="btn btn-primary btn-sm">Edit siswa ini</button>
            </a>
        </div>
    </div>
    <?php include(APPPATH . 'views/admin/dir/copyright.php'); ?>
</div>