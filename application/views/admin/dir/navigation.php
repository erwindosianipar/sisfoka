<?php
if(empty($this->session->userdata('adminlog'))){
    show_404();
}
?>
<div class="wrapper">
    <nav id="sidebar">
        <ul class="list-unstyled components">
            <li class="bg-red-ci">
                <a href="<?= base_url('admin/dashboard'); ?>" class="dashboard text-white bold">
                    <i class="fa fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="#hs1" data-toggle="collapse" aria-expanded="false">
                    Profil sekolah
                </a>
                <ul class="collapse list-unstyled" id="hs1">
                    <li>
                        <a href="<?= base_url('admin/edit/sejarah'); ?>">Edit sejarah</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/edit/visimisi'); ?>">Edit visi dan misi</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/edit/logomotto'); ?>">Edit logo dan motto</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/edit/struktur'); ?>">Edit struktur organisasi</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/edit/sambutan_kepsek'); ?>">Edit sambutan Kepala sekolah</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/edit/sambutan_yayasan'); ?>">Edit sambutan yayasan</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#hs2" data-toggle="collapse" aria-expanded="false">
                    Data guru
                </a>
                <ul class="collapse list-unstyled" id="hs2">
                    <li>
                        <a href="<?= base_url('admin/guru'); ?>">Lihat data guru</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/guru/add'); ?>">Tambah data guru</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#hs3" data-toggle="collapse" aria-expanded="false">
                    Data siswa
                </a>
                <ul class="collapse list-unstyled" id="hs3">
                    <li>
                        <a href="<?= base_url('admin/siswa'); ?>">Lihat data siswa</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/siswa/add'); ?>">Tambah data siswa</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#hs4" data-toggle="collapse" aria-expanded="false">
                    Data alumni
                </a>
                <ul class="collapse list-unstyled" id="hs4">
                    <li>
                        <a href="<?= base_url('admin/alumni'); ?>">Lihat data alumni</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#hs5" data-toggle="collapse" aria-expanded="false">
                    Artikel
                </a>
                <ul class="collapse list-unstyled" id="hs5">
                    <li>
                        <a href="<?= base_url('admin/artikel'); ?>">Lihat article</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/artikel/create'); ?>">Tambah article</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#hs6" data-toggle="collapse" aria-expanded="false">
                    Galeri foto
                </a>
                <ul class="collapse list-unstyled" id="hs6">
                    <li>
                        <a href="<?= base_url('admin/galeri'); ?>">Lihat galeri</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/galeri/create'); ?>">Tambah galeri</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#hs7" data-toggle="collapse" aria-expanded="false">
                    Prestasi
                </a>
                <ul class="collapse list-unstyled" id="hs7">
                    <li>
                        <a href="<?= base_url('admin/prestasi'); ?>">Lihat prestasi</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/prestasi/create'); ?>">Tambah prestasi</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#hs8" data-toggle="collapse" aria-expanded="false">
                    Ekstrakurikuler
                </a>
                <ul class="collapse list-unstyled" id="hs8">
                    <li>
                        <a href="<?= base_url('admin/ekskul'); ?>">Lihat ekstrakurikuler</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/ekskul/create'); ?>">Tambah ekstrakurikuler</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#hs9" data-toggle="collapse" aria-expanded="false">
                    Testimoni
                </a>
                <ul class="collapse list-unstyled" id="hs9">
                    <li>
                        <a href="<?= base_url('admin/testimoni'); ?>">Lihat testimoni</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/testimoni/create'); ?>">Tambah testimoni</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#hs10" data-toggle="collapse" aria-expanded="false">
                    Data jurusan
                </a>
                <ul class="collapse list-unstyled" id="hs10">
                    <li>
                        <a href="<?= base_url('admin/jurusan/rpl'); ?>">Edit RPL</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/jurusan/tkj'); ?>">Edit TKJ</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/jurusan/ak'); ?>">Edit AK</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/jurusan/ap'); ?>">Edit AP</a>
                    </li>
                </ul>
            </li>
        </ul>    
    </nav>
    <div id="content">
        <div class="nav-scroller bg-white shadow-sm">
            <div class="container-fluid">
                <nav class="row nav nav-underline">
                    <a id="sidebarCollapse" class="no-deco cp">
                        <div class="nav-link bg-white">
                            <i class="fas fa-bars fa-lg text-dark"></i>
                        </div>
                    </a>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-link nav-item active">
                        </li> 
                    </ul>
                    <a href="<?= base_url('admin/profile'); ?>" class="nav-link">
                        <i class="fa fa-user-circle fa-lg"></i>
                    </a>
                    <a href="<?= base_url('admin/view/kontak'); ?>" class="nav-link">
                        <i class="fa fa-envelope fa-lg"></i>
                        <?php if($count_contact != 0){
                            echo '<span class="badge badge-pill bg-danger align-text-bottom text-white">'.$count_contact.'</span>';
                        }
                        ?>
                    </a>
                    <a href="<?= base_url('admin/view/komentar'); ?>" class="nav-link">
                        <i class="fa fa-comments fa-lg"></i>
                        <?php if($count_comment != 0){
                            echo '<span class="badge badge-pill bg-danger align-text-bottom text-white">'.$count_comment.'</span>';
                        }
                        ?>
                    </a>
                    <a href="<?= base_url('admin/login/logout'); ?>" class="nav-link bg-red-ci">
                        <i class="fa fa-sign-out-alt fa-lg text-white"></i>
                    </a>
                </nav>
            </div>
        </div>
        <div class="pt-3"></div>