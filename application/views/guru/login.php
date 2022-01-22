<?php
if(!empty($this->session->userdata('gurulog'))) {
    redirect(base_url('guru/portal'));
}
?>
<div class="container-fluid bg-website">
    <div class="row">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6">
                    <div class="card card-body shadow-sm field">
                        <center>
                            <img class="lazyload mb-3" src="<?php echo str_replace('www', 'cdn', base_url('assets/images/placeholder/placeholder.svg')); ?>"  data-src="<?php echo str_replace('www', 'cdn', base_url('assets/images/logo/logo.png')); ?>" width="100" alt="">
                        </center>
                        <h1 class="text-center bold font-30 mb-5">Login Guru</h1>
                        <?php echo form_open('guru/login', 'onsubmit="disable()"'); ?>
                            <div class="row">
                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10">
                                    <?php
                                        if($this->session->flashdata('error')) {   
                                            $keterangan = $this->session->flashdata('error');
                                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                            echo '<a class="close" data-dismiss="alert" aria-label="close">';
                                            echo '<span aria-hidden="true">&times;</span>';
                                            echo '</a>';
                                            echo $keterangan;
                                            echo '</div>';
                                        }
                                    ?>
                                    <?php echo form_error(
                                        'captcha', '
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <a class="close" data-dismiss="alert" aria-label="close">
                                            <span aria-hidden="true">&times;</span>
                                            </a>
                                        ', '</div>');
                                    ?>
                                    <input type="text" name="nip" class="form-control mb-3" placeholder="NIP">
                                    <input type="password" name="password" class="form-control mb-3" placeholder="Password">
                                    <div class="input-group">
                                        <input type="number" name="captcha" class="form-control mb-3" placeholder="Captcha">
                                        <div class="input-group-append">
                                            <?php echo $img; ?>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <button name="submit" id="btn" class="btn btn-primary btn-block" disabled="disabled">Masuk</button>
                                    </div>                              
                                </div>
                            </div>
                        <?php echo form_close(); ?>
                        <div class="p-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>