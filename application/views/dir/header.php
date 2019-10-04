<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <!--<link href="https://rsms.me/inter/inter.css" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function(){
            $(".preloader").fadeOut();
            }, 1000);
        });
    </script>
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="<?= base_url('favicon.png'); ?>"/>
</head>
<body>
    <div class="preloader">
        <div class="loading">
            <img class="mb-3" src="<?= base_url('images/logo/logo-name.png'); ?>" width="250" alt="">
        </div>
    </div>
    <div class="container-fluid bg-primary text-white">
        <div class="row">
            <div class="container">
                <div class="float-left d-none d-lg-block"><i class="fa fa-phone-square"></i> (0622) 434858 <span class="mr-3"></span> <i class="fa fa-envelope"></i> smk@yppelitasiantar.sch.id</div>
                <div class="float-right d-none d-lg-block">
                    <a href="https://www.facebook.com/smkpelitapematangsiantar" class="text-white">
                        <i class="fab fa-facebook-square"></i> Facebook ·
                    </a>
                    <a href="https://www.instagram.com/smkpelitapematangsiantar" class="text-white">
                        <i class="fab fa-instagram"></i> Instagram
                    </a>
                </div>

                <div class="float-left d-lg-none d-md-block">
                    <i class="fa fa-phone-square"></i> <small>(0622) 434858</small>
                </div>
                <div class="float-right d-lg-none d-md-block">
                    <i class="fa fa-envelope"></i> <small>smk@yppelitasiantar.sch.id</small>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white nav-shadow" data-toggle="affix">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">
        		<img src="<?= base_url('images/logo/logo.png'); ?>" width="40" alt="Logo">
     		</a>
            <a class="navbar-brand bold text-uppercase" href="<?= base_url(); ?>">
                SMK Pelita
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcica" aria-controls="navcica" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger" onclick="btnbar(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navcica">
                <div class="d-lg-none d-md-block">
                    <div class="pt-2"></div>
                </div>

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-h dropdown-toggle" href="#" id="navdrp1" role="button" data-toggle="dropdown">
                            Profil
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navdrp1">
                            <a class="dropdown-item" href="<?= base_url('page/sejarah'); ?>">Sejarah</a>
                            <a class="dropdown-item" href="<?= base_url('page/visimisi'); ?>">Visi dan Misi</a>
                            <a class="dropdown-item" href="<?= base_url('page/logomotto'); ?>">Logo dan Motto</a>
                            <a class="dropdown-item" href="<?= base_url('page/struktur'); ?>">Struktur organisasi</a>
                            <a class="dropdown-item" href="<?= base_url('page/yayasan'); ?>">Sambutan Ketua Yayasan</a>
                            <a class="dropdown-item" href="<?= base_url('page/lokasi'); ?>">Lokasi sekolah</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-h dropdown-toggle" href="#" id="navdrp2" role="button" data-toggle="dropdown">
                            Jurusan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navdrp2">
                            <a class="dropdown-item" href="<?= base_url('jurusan/rekayasa-perangkat-lunak'); ?>">Rekayasa Perangkat Lunak</a>
                            <a class="dropdown-item" href="<?= base_url('jurusan/teknik-komputer-dan-jaringan'); ?>">Teknik Komputer dan Jaringan</a>
                            <a class="dropdown-item" href="<?= base_url('jurusan/akuntansi'); ?>">Akuntansi</a>
                            <a class="dropdown-item" href="<?= base_url('jurusan/administrasi-perkantoran'); ?>">Administrasi Perkantoran</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-h dropdown-toggle" href="#" id="navdrp4" role="button" data-toggle="dropdown">
                            Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navdrp4">
                            <a class="dropdown-item" href="<?= base_url('data/guru'); ?>">Guru</a>
                            <a class="dropdown-item" href="<?= base_url('data/siswa'); ?>">Siswa</a>
                            <a class="dropdown-item" href="<?= base_url('data/alumni'); ?>">Alumni</a>
                        </div>
                    </li>
                    <li class="nav-item nav-h">
                        <a class="nav-link" href="<?= base_url('prestasi'); ?>">Prestasi</a>
                    </li>
                    <li class="nav-item nav-h">
                        <a class="nav-link" href="<?= base_url('galeri'); ?>">Galeri</a>
                    </li>
                    <li class="nav-item nav-h">
                        <a class="nav-link" href="<?= base_url('ekstrakurikuler'); ?>">Ekstrakurikuler</a>
                    </li>
                    <li class="nav-item nav-h">
                        <a class="nav-link" href="<?= base_url('article'); ?>">Artikel</a>
                    </li>
                    <li class="nav-item nav-h">
                        <a class="nav-link" href="<?= base_url('kontak'); ?>">Kontak</a>
                    </li>
                </ul>
                <?php
                if (empty($this->session->userdata('siswalog'))): ?>
                <!-- d-lg-none d-md-block (hidden desktop) -->
                <ul class="navbar-nav ml-md-auto pt-2 d-lg-none d-md-block">
                	<div class="form-row">
                		<div class="col">
                            <li class="nav-item">
                                <a class="btn btn-outline-primary btn-block" href="<?= base_url('guru/login'); ?>">
                                    Login Guru
                                </a>
                            </li>            			
                		</div>
                		<div class="col">
                            <li class="nav-item">
                                <a class="btn btn-primary btn-block" href="<?= base_url('siswa/login'); ?>">
                                    Login Siswa
                                </a>
                            </li>            			
                		</div>
                	</div>
                    <div class="pt-2"></div>
                </ul>
                <!-- d-none d-lg-block (hidden mobile) -->
                <div class="d-none d-lg-block">
                    <ul class="navbar-nav ml-md-auto">
                        <li class="nav-item">
                            <a class="btn btn-outline-primary mr-md-2" href="<?= base_url('guru/login'); ?>">
                                Login Guru
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="<?= base_url('siswa/login'); ?>">
                                Login Siswa
                            </a>
                        </li>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>