<div class="container-fluid bg-website">
    <div class="row">
        <div class="container">
            <div class="pt-5"></div>
            <div class="card card-body font-default">
                <div class="pt-2"></div>
                <h1 class="sr-only">Halaman tidak ditemukan</h1>

                <div class="text-center">
                    <h2 class="error404">404</h2>
                    <div class="pt-2"></div>
                    <h2 class="bold">Maaf, halaman tidak ditemukan.</h2>
                    <div class="pt-3">Anda mencoba mengarah ke: <br />
                        <b><?= current_url(); ?></b><br /> Halaman tersebut mungkin telah rusak atau telah dihapus (error 404).

                        <div class="row">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-6">
                                <div class="text-left pt-5">

                                    <div class="pb-4 bold">Apa yang dapat Anda lakukan selanjutnya?</div>

                                    <ul>
                                        <li>Periksa kembali apakah alamat URL yang Anda masukkan sudah benar.</li>
                                        <li>Anda dapat <a href="<?= base_url(); ?>" class="bold text-dark">Kembali ke halaman Home</a></li>
                                        <li>Untuk informasi lebih lanjut silakan hubungi kami untuk bantuan.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-5"></div>
        </div>
    </div>
</div>