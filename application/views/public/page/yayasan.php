<div class="container-fluid bg-waterfall">
	<div class="pt-5 pb-5"></div>
    <div class="pt-5 pb-5"></div>
    <div class="pt-5 pb-5 d-none d-lg-block"></div>
</div>
<div class="container-fluid bg-website">
    <div class="pt-4"></div>
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                    <div class="card mt-150 border-top">
                        <div class="card-body">
                            <h1 class="mt-4 mb-4 font-32 bold">
                                Sambutan ketua Yayasan Perguruan Pelita
                            </h1>

                            <div class="card-text mb-4">
                                <?php echo $yayasan['content']; ?>
                            </div>

                            <div class="bold">
                                Diupdate: <?php echo $yayasan['modified']; ?>
                            </div>
                            <?php include(APPPATH.'views/dir/share.php'); ?>
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
