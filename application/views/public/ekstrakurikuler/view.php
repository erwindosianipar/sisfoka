<div class="container-fluid bg-primary text-center text-white">
    <div class="pt-5 pb-5">
        <h1 class="font-default bold font-32">
            Ekstrakurikuler <?= $ekstrakurikuler_item['name']; ?>
        </h1>
    </div>
    <div class="pt-3 d-none d-lg-block"></div>
</div>
<div class="container-fluid bg-website">
    <div class="pt-4"></div>
    <div class="row">
        <div class="container">

            <div class="row">
                <div class="col-sm-8">
                    <img src="<?= base_url('images/ekskul/' . $ekstrakurikuler_item['image']) ?>" class="d-lg-none d-md-block rounded-top" alt="">
                    <div class="card">
                        <img src="<?= base_url('images/ekskul/' . $ekstrakurikuler_item['image']) ?>" class="d-none d-lg-block rounded-top" alt="">
                        <div class="card-body">
                            <div class="card-text"><?= $ekstrakurikuler_item['description']; ?></div>
                            <div class="bold">Guru Pembina: <?= $ekstrakurikuler_item['lead']; ?></div>
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