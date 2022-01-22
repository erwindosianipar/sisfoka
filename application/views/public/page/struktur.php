<div class="container-fluid bg-primary text-center text-white">
    <div class="pt-5 pb-5">
        <h1 class="bold">Struktur Organisasi</h1>
    </div>
    <div class="pt-3 d-none d-lg-block"></div>
</div>
<div class="container-fluid bg-website">
    <div class="pt-4"></div>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="<?= base_url('images/struktur/'); ?><?= $struktur['image']; ?>" class="shadow-sm">
                    <div class="card border-top shadow-sm">
                        <div class="card-body">

                            <div class="card-text mb-3">
                                <?= $struktur['content']; ?>
                            </div>

                            <div class="bold">
                                Diupdate: <?= $struktur['modified']; ?>
                            </div>
                            <?php include(APPPATH . 'views/dir/share.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4"></div>
</div>