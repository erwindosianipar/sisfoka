<div class="container-fluid bg-primary text-center text-white">
    <div class="pt-5 pb-5">
        <h1 class="bold">Daftar Prestasi</h1>
    </div>
    <div class="pt-3 d-none d-lg-block"></div>
</div>
<div class="container-fluid bg-website">
    <div class="pt-4"></div>
    <div class="row">
        <div class="container">
            <div class="row">
                <?php foreach ($prestasi as $prestasi_item) : ?>
                    <div class="col-sm-3">
                        <div class="card mb-3">
                            <img src="<?php echo base_url('images/prestasi/medium/' . $prestasi_item['image']) ?>" class="rounded-top" alt="">
                            <div class="card-body">
                                <a href="<?php echo base_url('prestasi/' . $prestasi_item['link']); ?>" class="no-deco">
                                    <b class="bold text-muted">
                                        <?php echo $prestasi_item['title']; ?>
                                    </b>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-sm-4">
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4"></div>
</div>