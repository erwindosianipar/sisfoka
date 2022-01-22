<div class="container-fluid bg-primary text-center text-white">
    <div class="pt-5 pb-5">
        <h1 class="bold">Artikel Terbaru</h1>
    </div>
    <div class="pt-3 d-none d-lg-block"></div>
</div>
<div class="container-fluid bg-website">
    <div class="pt-4"></div>
    <div class="row">
        <div class="container">
            <div class="row">
                <?php foreach ($artikels->result_array() as $artikel) : ?>
                    <div class="col-sm-4">
                        <div class="card mb-3">
                            <img src="<?= base_url('images/artikel/medium/' . $artikel['image']) ?>" class="rounded-top" alt="">
                            <div class="card-body">
                                <a href="<?= base_url('article/' . $artikel['link']); ?>" class="no-deco">
                                    <b class="bold text-muted"><?= $artikel['title']; ?></b>
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