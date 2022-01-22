<?php
if(empty($this->session->userdata('gurulog'))){
    show_404();
}
?>
<div class="wrapper">
    <nav id="sidebar">
        <ul class="list-unstyled components">
            <li class="bg-red-ci">
                <a href="<?= base_url('guru/dashboard'); ?>" class="dashboard text-white bold">
                    <i class="fa fa-home"></i> Dashboard
                </a>
            </li>
            <li>
            <li><a href="<?= base_url('guru/profil'); ?>">Profil saya</a></li>
            <li><a href="<?= base_url('guru/profil/update'); ?>">Edit profil</a></li>
            <li><a href="<?= base_url('guru/profil/password'); ?>">Update Password</a></li>
            <?php if ($guru->wali == 'Y'): ?>
            <li><a href="<?= base_url('guru/siswa'); ?>">Siswa Saya</a></li>
            <?php endif; ?>
            <li><a href="<?= base_url('guru/tugas'); ?>">Buat Tugas</a></li>
            <li><a href="<?= base_url('guru/artikel'); ?>">Buat Artikel</a></li>
        </ul>
    </nav>
    <div id="content">
        <div class="nav-scroller bg-white shadow-sm">
            <div class="container-fluid">
                <nav class="row nav nav-underline">
                    <a id="sidebarCollapse" class="no-deco cp">
                        <div class="nav-link">
                            <i class="fas fa-bars fa-lg text-dark"></i>
                        </div>
                    </a>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-link nav-item active">
                        </li> 
                    </ul>
                    <a href="<?= base_url('guru/login/logout'); ?>" class="nav-link bg-red-ci">
                        <i class="fa fa-sign-out-alt fa-lg text-white"></i>
                    </a>
                </nav>
            </div>
        </div>
        <div class="pt-3"></div>