<div class="container-fluid bg-website">
    <div class="pt-4">
        &nbsp;
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 post-outer">
                <?php include(APPPATH . 'views/dir/share2.php'); ?>
            </div>
            <div class="col-lg-7 post-outer mb-4">
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="media">
                            <img src="<?= base_url('images/logo/logo.png'); ?>" class="post-outer mr-2" width="25">
                            <div class="media-item">
                                <b>@smkpelitasiantar</b> · <span class="text-muted small"><?= $galeri_item['date']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item shadow-sm p-0">
                        <center>
                            <img src="<?= base_url('images/galeri/' . $galeri_item['image']); ?>" class="post-outer">
                        </center>
                    </div>
                    <div class="list-group-item shadow-sm">
                        <b><?= $galeri_item['title']; ?></b><br />.<br />
                        <?= $galeri_item['description']; ?>
                        <br />.<br />
                        <b>#smkpelita #smkbisa #siantar #smkhits #yppelita</b>
                    </div>
                    <?php include(APPPATH . 'views/dir/share3.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4">
        &nbsp;
    </div>
</div>