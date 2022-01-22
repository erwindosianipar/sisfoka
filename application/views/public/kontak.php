<div class="container-fluid bg-primary text-center text-white">
    <div class="pt-5 pb-5">
        <h1 class="font-default bold">Kontak kami</h1>
    </div>
    <div class="pt-3 d-none d-lg-block"></div>
</div>
<div class="container-fluid bg-website">
    <div class="row">
        <div class="container">
            <div class="row pt-4">
                <div class="col-sm-6">
                    <div class="card mb-4">
                        <div class="card-body field">
                            <h4 class="bold mb-4">Kirim pesan untuk kami</h4>
                            <?php
                            if ($this->session->flashdata('success')) {
                                $keterangan = $this->session->flashdata('success');
                                echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                                echo '<a class="close" data-dismiss="alert" aria-label="close">';
                                echo '<span aria-hidden="true">&times;</span>';
                                echo '</a>';
                                echo $keterangan;
                                echo '</div>';
                            }
                            ?>

                            <?= form_open('kontak', 'onsubmit="disable()"'); ?>

                            <div class="form-row mt-3">
                                <div class="col-sm-6 mb-3">
                                    <input type="text" name="name" class="form-control" value="<?= set_value('name'); ?>" placeholder="Nama" autocomplete="off">
                                    <?= form_error('name', '<p class="text-danger">', '</p>'); ?>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>" placeholder="Email" autocomplete="off">
                                    <?= form_error('email', '<p class="text-danger">', '</p>'); ?>
                                </div>
                            </div>

                            <div class="mb-3">
                                <input type="text" name="about" class="form-control" value="<?= set_value('about'); ?>" placeholder="Subjek" autocomplete="off">
                                <?= form_error('about', '<p class="text-danger">', '</p>'); ?>
                            </div>

                            <div class="mb-3">
                                <input type="number" name="phone" class="form-control" value="<?= set_value('phone'); ?>" placeholder="Telepon" autocomplete="off">
                                <?= form_error('phone', '<p class="text-danger">', '</p>'); ?>
                            </div>

                            <div class="mb-3">
                                <textarea name="message" class="form-control" placeholder="Pesan"><?= set_value('message'); ?></textarea>
                                <?= form_error('message', '<p class="text-danger">', '</p>'); ?>
                                <small><i>Mohon gunakan bahasa yang sopan.</i></small>
                            </div>

                            <div class="actions">
                                <button class="btn btn-primary btn-block mt-3" disabled="disabled" id="btn">Kirim pesan</button>
                            </div>

                            <?= form_close(); ?>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="iframe-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15938.218859167286!2d99.0702509!3d2.9434082!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xabcdb8df515e4187!2sSMK+Pelita+Pematangsiantar!5e0!3m2!1sid!2sid!4v1550983890397" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="media mt-4">
                                <i class="fa fa-map mb-10 mr-2"></i>
                                <div class="media-body mt-m10">
                                    Jl. Melanthon Siregar No.155, Parhorasan Nauli, Siantar Marihat, Kota Pematang Siantar, Sumatera Utara 21133
                                </div>
                            </div>
                            <div class="media mt-2">
                                <i class="fa fa-phone mb-10 mr-2"></i>
                                <div class="media-body mt-m10">
                                    (0622) 434858
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>