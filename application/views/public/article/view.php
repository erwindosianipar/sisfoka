<div class="container-fluid bg-waterfall">
    <div class="pt-5 pb-5"></div>
    <div class="pt-5 pb-5"></div>
    <div class="pt-5 pb-5 d-none d-lg-block"></div>
</div>
<div class="container-fluid bg-website">
    <div class="pt-4"></div>
    <div class="row">
        <div class="container mt-150">

            <div class="row">
                <div class="col-sm-8 mb-3">
                    <div class="card mb-3">
                        <img src="<?= base_url('images/artikel/'.$artikel['image']); ?>" class="rounded-top d-lg-none d-md-block" alt="">
                        <div class="card-body shadow-sm">
                            <h1 class="font-default font-25 bold"><?= $artikel['title']; ?></h1>
                            <div class="pt-3"></div>
                            <img src="<?= base_url('images/artikel/'.$artikel['image']); ?>" class="rounded d-none d-lg-block" alt="">
                            <div class="pt-3 d-none d-lg-block"></div>
                            <?= $artikel['article']; ?>
                            <?php include(APPPATH.'views/dir/share.php'); ?>
                        </div>
                    </div>

                    <div class="list-group mb-3">
                        <div class="list-group-item shadow-sm bold">
                            <?= $komentars->num_rows();?> Komentar
                        </div>
                        <?php if ($komentars->num_rows()<1): ?>
                            Belum ada komentar
                        <?php endif; ?>
                        <?php foreach ($komentars->result_array() as $komentar): ?>                            
                            <div class="list-group-item shadow-sm">
                                <div class="media mb-1">
                                    <img class="mr-3 rounded-circle" src="<?= base_url('images/avatar/default-sm.jpg'); ?>" alt="Image">
                                    <div class="media-body">
                                        <div class="bold text-capitalize">
                                            <?= $komentar['name']; ?>
                                        </div>
                                        <small class="text-muted"><?= date("Y/m/d h:i", strtotime($komentar['created'])).' PM'; ?></small>
                                    </div>
                                </div>
                                <?= $komentar['comment']; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="list-group mb-3">
                        <div class="list-group-item shadow-sm bold">
                            Tambahkan komentar
                        </div>
                        <div class="list-group-item shadow-sm bold field">
                            <?php
                            if($this->session->flashdata('success')) {   
                                $keterangan = $this->session->flashdata('success');
                                echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                                echo '<a class="close" data-dismiss="alert" aria-label="close">';
                                echo '<span aria-hidden="true">&times;</span>';
                                echo '</a>';
                                echo $keterangan;
                                echo '</div>';
                            }
                            ?>
                            <?= form_open('article/komentar/'.$artikel['link'].'/'.$artikel['id'],  'onsubmit="disable()"'); ?>
                            <div class="form-row">
                                <div class="col-sm-6 mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Nama" autocomplete="off">
                                    <?php
                                    if($this->session->flashdata('error_name'))
                                        echo $this->session->flashdata('error_name');
                                    ?>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <input type="text" name="email" class="form-control" placeholder="Email" autocomplete="off">
                                    <?php
                                    if($this->session->flashdata('error_email'))
                                        echo $this->session->flashdata('error_email');
                                    ?>
                                </div>
                            </div>
                            <textarea name="comment" class="form-control" placeholder="Komentar"></textarea>
                            <?php
                            if($this->session->flashdata('error_comment'))
                                echo $this->session->flashdata('error_comment');
                            ?>
                            <div class="actions mt-3">
                                <button name="submit" id="btn" class="btn btn-primary" disabled="">Simpan komentar</button>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="list-group">
                        <?php foreach ($lainnyas->result_array() as $lainnya): ?>
                            <div class="list-group-item shadow-sm bold">
                                Artikel lainnya
                            </div>
                            <a href="<?= base_url('article/'.$lainnya['link']); ?>" title="<?= $lainnya['title']; ?>">
                                <div class="list-group-item shadow-sm">
                                    <img src="<?= base_url('images/artikel/small/'.$lainnya['image']); ?>" class="rounded float-left mr-3" alt="">
                                    <b class="mt-0"><?= $lainnya['title']; ?></b>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
