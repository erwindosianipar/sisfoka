<div class="container-fluid bg-website">
    <div class="pt-4"></div>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 pb-4">
                    <div class="list-group">
                        <div class="list-group-item shadow-sm bold">
                            Data Alumni
                        </div>
                        <?php if ($alumnis->num_rows() < 1) : ?>
                            <div class="list-group-item shadow-sm">
                                Data alumni tidak ditemukan
                            </div>
                        <?php endif; ?>
                        <?php foreach ($alumnis->result() as $alumni) : ?>
                            <div class="list-group-item shadow-sm">
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <img src="<?= base_url('images/siswa/medium/' . $alumni->foto); ?>" class="rounded mb-3 img-thumbnail" alt="">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="list-group">
                                            <div class="list-group-item">
                                                <div class="form-row">
                                                    <div class="col-3">NISN</div>
                                                    <div class="col-9"><?= $alumni->nisn; ?></div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-row">
                                                    <div class="col-3">Nama</div>
                                                    <div class="col-9"><?= $alumni->nama; ?></div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-row">
                                                    <div class="col-3">Status</div>
                                                    <div class="col-9">
                                                        <?= 'Alumni ' . strtoupper($alumni->jurusan); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-row">
                                                    <div class="col-3">Lulusan</div>
                                                    <div class="col-9"><?= $alumni->lulus; ?></div>
                                                </div>
                                            </div>
                                            <div class="list-group-item text-muted small">
                                                <?= $alumni->bio; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-sm-6 mb-4">
                    <div class="list-group mb-3">
                        <div class="list-group-item shadow-sm bold">
                            Cari data alumni
                        </div>
                        <div class="list-group-item shadow-sm">
                            <?= form_open('data/alumni', 'method="GET"'); ?>
                            <div class="form-row">
                                <div class="col">
                                    <label class="bold">Jurusan</label>
                                    <select name="jurusan" class="form-control">
                                        <option value="RPL">RPL</option>
                                        <option value="TKJ">TKJ</option>
                                        <option value="AK">AK</option>
                                        <option value="AP">AP</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="bold">Lulusan</label>
                                    <input type="number" name="lulusan" value="<?= date("Y") - 1; ?>" class="form-control">
                                </div>
                                <div class="col">
                                    <label>&nbsp;</label>
                                    <button type="submit" class="btn btn-outline-primary btn-block">Update</button>
                                </div>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                    <div class="list-group mb-3">
                        <div class="list-group-item shadow-sm bold">
                            Cari berdasarkan nama
                        </div>
                        <div class="list-group-item shadow-sm">
                            <?= form_open('data/alumni', 'method="GET"'); ?>
                            <div class="form-row">
                                <div class="col-8">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama alumni">
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-outline-primary btn-block">Update</button>
                                </div>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>