<div class="container-fluid bg-website">
    <div class="container d-lg-none d-md-block">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-sm-12">
                <div class="row mt-5">
                    <div class="col-4">
                        <img src="<?= base_url('images/logo/logo.png'); ?>" width="160" class="img-thumbnail p-3">
                    </div>
                    <div class="col-8">
                        <h3 class="bold">SMK Pelita</h3>
                        <p>@smkpelitapematangsiantar</p>
                    </div>
                </div>
                <div class="row bold mt-4 small">
                    <div class="col">
                        <a href="<?= base_url('data/guru'); ?>" class="text-dark">
                            <?= $guru->num_rows(); ?> Guru
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url('data/siswa'); ?>" class="text-dark">
                            <?= $siswa->num_rows(); ?> Siswa
                        </a>
                    </div>
                    <div class="col">
                        <a href="<?= base_url('data/alumni'); ?>" class="text-dark">
                            <?= $alumni->num_rows(); ?> Alumni
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-none d-lg-block">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-sm-12">
                <div class="row mt-5">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-3">
                        <img src="<?= base_url('images/logo/logo.png'); ?>" width="160" class="img-thumbnail p-3">
                    </div>
                    <div class="col-lg-6">
                        <h3 class="bold">SMK Pelita Pematangsiantar</h3>
                        <p>@smkpelitapematangsiantar</p>
                        <div class="row bold mt-4">
                            <div class="col">
                                <a href="<?= base_url('data/guru'); ?>" class="text-dark">
                                    <?= $guru->num_rows(); ?> Guru
                                </a>
                            </div>
                            <div class="col">
                                <a href="<?= base_url('data/siswa'); ?>" class="text-dark">
                                    <?= $siswa->num_rows(); ?> Siswa
                                </a>
                            </div>
                            <div class="col">
                                <a href="<?= base_url('data/alumni'); ?>" class="text-dark">
                                    <?= $alumni->num_rows(); ?> Alumni
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9 col-sm-12">
                <div class="row">
                    <?php foreach ($galeri as $galeri_item) : ?>
                        <div class="col-6 col-lg-4 mb-4">
                            <a href="<?= base_url('p/' . $galeri_item['link']); ?>">
                                <img src="<?= base_url('images/placeholder/placeholder.svg'); ?>" data-src="<?= base_url('images/galeri/medium/' . $galeri_item['image']); ?>" class="lazyload img-thumbnail">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>