<div class="container-fluid bg-website">
    <div class="pt-4"></div>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="card shadow-sm">
                        <img src="<?= base_url('images/prestasi/' . $prestasi_item['image']) ?>" class="rounded" alt="">
                        <div class="card-body">
                            <h1 class="bold font-30">
                                <?= $prestasi_item['title']; ?>
                            </h1>
                            <p class="small">Oleh Administrator pada: <?= $prestasi_item['date']; ?></p>
                            <?= $prestasi_item['content']; ?>
                            <?php include(APPPATH . 'views/dir/share.php'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4"></div>
</div>