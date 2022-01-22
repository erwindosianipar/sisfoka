<div id="carousel-1" class="carousel slide carousel-fade d-lg-none d-md-block shadow-sm" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-1" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="lazyload d-block w-100" src="<?= base_url('images/placeholder/placeholder.svg'); ?>" data-src="<?= base_url('images/banner/1.jpg'); ?>" alt="">
        </div>
        <div class="carousel-item">
            <img class="lazyload d-block w-100" src="<?= base_url('images/placeholder/placeholder.svg'); ?>" data-src="<?= base_url('images/banner/2.jpg'); ?>" alt="">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Sebelumnya</span>
    </a>
    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Selanjutnya</span>
    </a>
</div>

<div class="container-fluid bg-website">
    <div class="pt-4 d-none d-lg-block"></div>
    <div class="row">
        <div class="container">
            <div id="carousel-2" class="carousel slide carousel-fade d-none d-lg-block shadow-sm" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-2" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="lazyload d-block w-100 rounded" src="<?= base_url('images/placeholder/placeholder.svg'); ?>" data-src="<?= base_url('images/banner/1.jpg'); ?>" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="lazyload d-block w-100 rounded" src="<?= base_url('images/placeholder/placeholder.svg'); ?>" data-src="<?= base_url('images/banner/2.jpg'); ?>" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Sebelumnya</span>
                </a>
                <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Selanjutnya</span>
                </a>
            </div>

            <div class="pt-4"></div>

            <div class="row">
                <div class="col-sm-8 mb-3">
                    <div class="card">
                        <div class="card-body shadow-sm">
                            <!-- img -->
                            <h5 class="card-title bold text-uppercase">Sambutan Kepala Sekolah</h5>
                            <div class="dropdown-divider mb-3"></div>
                            <?php if ($impressium['image'] == null) : ?>
                                <img src="<?= base_url('images/placeholder/300x400.png'); ?>" class="rounded float-left mr-3 pasfoto" alt="Kepala sekolah">
                            <?php elseif ($impressium['image'] != null) : ?>
                                <img src="<?= base_url('images/kepsek/') . $impressium['image']; ?>" class="rounded float-left mr-3 pasfoto" alt="Kepala sekolah">
                            <?php endif; ?>
                            <?= $impressium['content']; ?>
                            <div class="card-text bold">
                                <?= $impressium['name']; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="list-group">
                        <div class="list-group-item shadow-sm bold">
                            Artikel Terbaru
                        </div>
                        <?php foreach ($news as $news_item) : ?>
                            <?php if (!$any_news) : ?>
                                <div class="list-group-item shadow-sm">
                                    Belum ada artikel.
                                </div>
                            <?php endif; ?>
                            <div class="list-group-item shadow-sm">
                                <a href="<?= base_url('article/' . $news_item['link']); ?>" class="no-deco">
                                    <img src="<?= base_url('images/artikel/small/' . $news_item['image']); ?>" class="rounded float-left mr-3" alt="">
                                    <b class="mt-0 elipsis"><?= $news_item['title']; ?></b>
                                    <div class="small">
                                        <?= date("d/m/Y h:i", strtotime($news_item['created'])); ?> WIB
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                        <div class="list-group-item shadow-sm small">
                            <a href="<?= base_url('article'); ?>">Lihat semua artikel</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-4"></div>

            <div class="list-group mb-5">
                <div class="list-group-item shadow-sm text-center">
                    <h1><b class="text-uppercase">SMK Pelita</b></h1>
                    <h2><b class="font-weight-light text-uppercase">Pematangsiantar</b></h2>
                    <div class="hr-float short">
                        <span class="hr-float-h">
                            <i class="fa fa-info-circle"></i>
                        </span>
                    </div>
                    <div class="pt-4"></div>
                    <div class="row">
                        <div class="col-sm-1">
                        </div>
                        <div class="col-sm-2">
                            <img class="lazyload mb-5" src="<?= base_url('images/placeholder/placeholder.svg'); ?>" data-src="<?= base_url('images/logo/logo.png'); ?>" alt="">
                        </div>
                        <div class="col-sm-8 text-left">
                            <p><b>SMK Pelita Pematangsiantar</b> adalah salah satu lembaga pendidikan swasta yang berada di kota Pematangsiantar, Sumatera Utara, Indonesia. SMK Pelita Pematangsiantar berada dalam naungan Yayasan Perguruan Pelita. Telah berdiri sejak tahun 1997.</p>

                            <p>SMK Pelita Pematangsiantar tidak hanya berfokus pada bidang peningkatan Akademik namun juga pada bidang non-Akademik. Menjadikan peserta didik yang siap bersaing memiliki <i>skill</i> keahlian yang siap diterapkan dan digunakan dalam dunia kerja serta industri.</p>
                        </div>
                    </div>

                    <div class="pt-4"></div>

                    <center>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="text-center medium-circle rotate fs-28 mb-3">
                                    <i class="fa fa-user-graduate"></i>
                                </div>
                                <p class="text-uppercase bold">Guru Berpengalaman</p>
                                <p>Kami memiliki guru dengan reputasi yang baik untuk kualitas dan layanan personal serta memilik pengalaman dalam mendidik.</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="text-center medium-circle rotate fs-28 mb-3 bg-red text-white">
                                    <i class="fa fa-book"></i>
                                </div>
                                <p class="text-uppercase bold">Kurikulum Terbaru</p>
                                <p>Kami menerapkan kurikulum yang terbaru dan sejalan dengan peraturan Menteri Pendidikan dan Kebudayaan.</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="text-center medium-circle rotate fs-28 mb-3">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                                <p class="text-uppercase bold">Lokasi Strategsis</p>
                                <p>Lokasi sekolah berada di lokasi yang cukup strategis dekat dengan pusat kota dan dapat dengan mudah diakses dari mana saja.</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="text-center medium-circle rotate fs-28 mb-3">
                                    <i class="fa fa-running"></i>
                                </div>
                                <p class="text-uppercase bold">Ekstrakurikuler</p>
                                <p>Kami memiliki beragam ekstrakurikuler untuk peningkatan non-akademik. Dengan demikian para siswa dapat menentukan bidang apa yang disukai.</p>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="list-group-item shadow-sm bg-primary">
                    <h2 class="text-uppercase text-white text-center pt-3">Kompetensi keahlian</h2>
                    <div class="hr-float2 short">
                        <span class="hr-float-h2">
                            <i class="fa fa-user-graduate"></i>
                        </span>
                    </div>
                    <div class="pt-5"></div>
                    <div class="row hv-muted">
                        <?php foreach ($jurusans->result_array() as $jurusan) : ?>
                            <div class="col-sm-3">
                                <center>
                                    <a href="<?= base_url('jurusan/' . $jurusan['link']); ?>" class="text-dark">
                                        <div class="leave1 mb-3 hv-muted">
                                            <div class="pt-5"></div>
                                            <h2><i class="fa fa-user-tie"></i></h2>
                                            <b><?= $jurusan['name']; ?></b>
                                        </div>
                                    </a>
                                </center>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="list-group-item shadow-sm">
                    <div class="mt-5"></div>
                    <h2 class="text-uppercase pt-3 text-center">Testimonial Alumni</h2>
                    <div class="hr-float short">
                        <span class="hr-float-h">
                            <i class="fa fa-quote-right"></i>
                        </span>
                    </div>
                    <div class="pt-5"></div>
                    <div class="row">
                        <?php if ($testimonis->num_rows() < 1) : ?>
                            <div class="card-body text-center">
                                Belum ada testimoni.
                            </div>
                        <?php endif; ?>
                        <?php foreach ($testimonis->result_array() as $testimoni) : ?>
                            <div class="col-sm-4">
                                <div class="card card-body shadow-sm mb-3">
                                    <div class="media mb-3">
                                        <img src="<?= base_url('images/avatar/default-sm.jpg'); ?>" class="mr-2 mt-1">
                                        <div class="media-body">
                                            <div class="bold"><?= $testimoni['name']; ?></div>
                                            <small><?= $testimoni['whois']; ?>, Alumni <?= $testimoni['stambuk']; ?></small>
                                        </div>
                                    </div>
                                    <p class="card-text font-italic">
                                        <?= $testimoni['testimoni']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>