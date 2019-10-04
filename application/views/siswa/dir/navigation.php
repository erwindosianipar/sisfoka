<?php
if(empty($this->session->userdata('siswalog'))){
    show_404();
}
?>
<div class="wrapper">
    <nav id="sidebar">
        <ul class="list-unstyled components">
            <li class="bg-red-ci">
                <a href="<?= base_url('siswa/portal'); ?>" class="dashboard text-white bold">
                    <i class="fa fa-home"></i> Portal Akademik
                </a>
            </li>
            <li>
            <li><a href="<?= base_url('siswa/profil'); ?>">Profil saya</a></li>
            <li><a href="<?= base_url('siswa/profil/update'); ?>">Edit profil</a></li>
            <li><a href="<?= base_url('siswa/informasi'); ?>">Informasi</a></li>
            <li><a href="<?= base_url('siswa/pesan'); ?>">Pesan masuk</a></li>
            <li><a href="<?= base_url('siswa/absensi'); ?>">Absensi siswa</a></li>
            <li><a href="<?= base_url('siswa/roster'); ?>">Jadwal / Roster</a></li>
            <li><a href="<?= base_url('siswa/galeri'); ?>">Galeri foto</a></li>
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
                    <a href="<?= base_url('siswa/login/logout'); ?>" class="nav-link bg-red-ci">
                        <i class="fa fa-sign-out-alt fa-lg text-white"></i>
                    </a>
                </nav>
            </div>
        </div>
        <div class="pt-3"></div>