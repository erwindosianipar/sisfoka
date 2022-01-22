<div class="container-fluid bg-website">
    <div class="pt-4"></div>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 pb-4">
                    <div class="list-group">
                        <div class="list-group-item shadow-sm bold">
                            Data Siswa
                        </div>
                        <?php if ($siswas->num_rows() < 1) : ?>
                            <div class="list-group-item shadow-sm">
                                Data siswa tidak ditemukan
                            </div>
                        <?php endif; ?>
                        <?php foreach ($siswas->result() as $siswa) : ?>
                            <div class="list-group-item shadow-sm">
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <img src="<?= base_url('images/siswa/medium/' . $siswa->foto); ?>" class="rounded mb-3 img-thumbnail" alt="">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="list-group">
                                            <div class="list-group-item">
                                                <div class="form-row">
                                                    <div class="col-3">NISN</div>
                                                    <div class="col-9"><?= $siswa->nisn; ?></div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-row">
                                                    <div class="col-3">Nama</div>
                                                    <div class="col-9"><?= $siswa->nama; ?></div>
                                                </div>
                                            </div>
                                            <div class="list-group-item">
                                                <div class="form-row">
                                                    <div class="col-3">Kelas</div>
                                                    <div class="col-9">
                                                        <?= strtoupper($siswa->kelas . '-' . $siswa->jurusan); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-group-item text-muted small">
                                                <?= $siswa->bio; ?>
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
                            Cari data siswa
                        </div>
                        <div class="list-group-item shadow-sm">
                            <?= form_open('data/siswa', 'method="GET"'); ?>
                            <div class="form-row">
                                <div class="col">
                                    <label class="bold">Kelas</label>
                                    <select name="kelas" class="form-control">
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                    </select>
                                </div>
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
                                    <label>&nbsp;</label>
                                    <button type="submit" class="btn btn-outline-primary btn-block">Update</button>
                                </div>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                    <div class="list-group mb-3">
                        <div class="list-group-item shadow-sm bold">
                            Keterangan
                        </div>
                        <div class="list-group-item shadow-sm">
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('images/logo/logo.png'); ?>" class="p-4" alt="Logo SMK Pelita">
                                </div>
                                <div class="col-sm-8">
                                    <div class="list-group">
                                        <div class="list-group-item">
                                            <div class="form-row">
                                                <div class="col">
                                                    Kelas
                                                </div>
                                                <div class="col">
                                                    <?php
                                                    if (!empty($this->input->get('kelas')))
                                                        echo $this->input->get('kelas');
                                                    else echo 'X';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-row">
                                                <div class="col">
                                                    Jurusan
                                                </div>
                                                <div class="col">
                                                    <?php
                                                    if (!empty($this->input->get('jurusan')))
                                                        echo $this->input->get('jurusan');
                                                    else echo 'RPL';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-row">
                                                <div class="col">
                                                    Total Siswa
                                                </div>
                                                <div class="col">
                                                    <?= $siswas->num_rows(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <?php switch ($this->input->get('jurusan')) {
                                                case 'RPL':
                                                    $link = 'rekayasa-perangkat-lunak';
                                                    break;
                                                case 'TKJ':
                                                    $link = 'teknik-komputer-dan-jaringan';
                                                    break;
                                                case 'AK':
                                                    $link = 'akuntansi';
                                                    break;
                                                case 'AP':
                                                    $link = 'administrasi-perkantoran';
                                                    break;
                                                default:
                                                    $link = 'rekayasa-perangkat-lunak';
                                                    break;
                                            }
                                            ?>
                                            <a href="<?= base_url('jurusan/' . $link); ?>">
                                                Lihat tentang jurusan ini.
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>