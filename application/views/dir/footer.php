<?php
if (!empty($this->session->userdata('adminlog'))) {
    echo '
    <a href="'.base_url('admin/dashboard').'" class="text-white" target="_blank">
    	<div class="widget-fixed-left">
    		<i class="fa fa-home"></i> Dashboard admin
    	</div>
    </a>
    ';
}
?>

<a href="https://wa.me/+6282166027800" target="_blank">
	<div class="d-lg-none d-md-block widget-wa-logo">
		<svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="0.2">
			<path fill="#00E676" d="M10.7 32.8l.6.3c2.5 1.5 5.3 2.2 8.1 2.2 8.8 0 16-7.2 16-16 0-4.2-1.7-8.3-4.7-11.3s-7-4.7-11.3-4.7c-8.8 0-16 7.2-15.9 16.1 0 3 .9 5.9 2.4 8.4l.4.6-1.6 5.9 6-1.5z">
			</path>
			<path fill="#ffffff" d="M32.4 6.4C29 2.9 24.3 1 19.5 1 9.3 1 1.1 9.3 1.2 19.4c0 3.2.9 6.3 2.4 9.1L1 38l9.7-2.5c2.7 1.5 5.7 2.2 8.7 2.2 10.1 0 18.3-8.3 18.3-18.4 0-4.9-1.9-9.5-5.3-12.9zM19.5 34.6c-2.7 0-5.4-.7-7.7-2.1l-.6-.3-5.8 1.5L6.9 28l-.4-.6c-4.4-7.1-2.3-16.5 4.9-20.9s16.5-2.3 20.9 4.9 2.3 16.5-4.9 20.9c-2.3 1.5-5.1 2.3-7.9 2.3zm8.8-11.1l-1.1-.5s-1.6-.7-2.6-1.2c-.1 0-.2-.1-.3-.1-.3 0-.5.1-.7.2 0 0-.1.1-1.5 1.7-.1.2-.3.3-.5.3h-.1c-.1 0-.3-.1-.4-.2l-.5-.2c-1.1-.5-2.1-1.1-2.9-1.9-.2-.2-.5-.4-.7-.6-.7-.7-1.4-1.5-1.9-2.4l-.1-.2c-.1-.1-.1-.2-.2-.4 0-.2 0-.4.1-.5 0 0 .4-.5.7-.8.2-.2.3-.5.5-.7.2-.3.3-.7.2-1-.1-.5-1.3-3.2-1.6-3.8-.2-.3-.4-.4-.7-.5h-1.1c-.2 0-.4.1-.6.1l-.1.1c-.2.1-.4.3-.6.4-.2.2-.3.4-.5.6-.7.9-1.1 2-1.1 3.1 0 .8.2 1.6.5 2.3l.1.3c.9 1.9 2.1 3.6 3.7 5.1l.4.4c.3.3.6.5.8.8 2.1 1.8 4.5 3.1 7.2 3.8.3.1.7.1 1 .2h1c.5 0 1.1-.2 1.5-.4.3-.2.5-.2.7-.4l.2-.2c.2-.2.4-.3.6-.5s.4-.4.5-.6c.2-.4.3-.9.4-1.4v-.7s-.1-.1-.3-.2z">
			</path>
		</svg>
	</div>
</a>

<a href="https://wa.me/+6282166027800" target="_blank">
	<div class="d-none d-lg-block widget-wa-text bg-wa text-white">
		<i class="fab fa-whatsapp"></i> Hubungi via WhatsApp
	</div>
</a>
	<footer style="border-top: 1px solid #e5e5e5">
		<div class="pt-4 d-none d-lg-block"></div>
		<div class="container-fluid">
		    <div class="row">
		        <div class="container">

					<div class="row d-lg-none d-md-block pb-5 pt-4">
						<div class="col-4 col-md">
							<img class="lazyload mb-3" src="<?= base_url('images/placeholder/placeholder.svg'); ?>"  data-src="<?= base_url('images/logo/logo.png'); ?>" width="100" alt="Logo">
						</div>
						<div class="col-8 col-md">
							<h5 class="bold text-uppercase">SMK Pelita Pematangsiantar</h5>
							<div>Copyright &copy;<?= date('Y'); ?> SMK Pelita Pematangsiantar. All Rights Reserved.</div>
						</div>
					</div>

					<div class="row">
						<div class="col-6 col-md d-none d-lg-block">
							<img class="lazyload mb-3" src="<?= base_url('images/placeholder/placeholder.svg'); ?>"  data-src="<?= base_url('images/logo/logo.png'); ?>" width="100" alt="Logo">
						</div>
						<div class="col-6 col-md d-none d-lg-block">
							<h5 class="bold text-uppercase">SMK Pelita Pematangsiantar</h5>
							<div>Copyright &copy;<?= date('Y'); ?> SMK Pelita Pematangsiantar. All Rights Reserved.</div>
						</div>
						<div class="col-6 col-md">
							<h5 class="bold">Tentang</h5>
							<ul class="list-unstyled">
								<li><a class="text-footer" href="<?= base_url('page/sejarah'); ?>">Sejarah</a></li>
								<li><a class="text-footer" href="<?= base_url('page/visimisi'); ?>">Visi dan Misi</a></li>
								<li><a class="text-footer" href="<?= base_url('page/logomotto'); ?>">Logo dan Motto</a></li>
								<li><a class="text-footer" href="<?= base_url('page/struktur'); ?>">Struktur Organisasi</a></li>
							</ul>
						</div>
						<div class="col-6 col-md">
							<h5 class="bold">Bantuan</h5>
							<ul class="list-unstyled">
								<li><a class="text-footer" href="<?= base_url('kontak'); ?>">Hubungi Kami</a></li>
								<li><a class="text-footer" href="<?= base_url('page/lokasi'); ?>">Lokasi</a></li>
							</ul>
						</div>
						<div class="col-6 col-md">
							<h5 class="bold">Informasi</h5>
							<ul class="list-unstyled">
								<li><a class="text-footer" href="<?= base_url('article'); ?>">Artikel</a></li>
								<li><a class="text-footer" href="<?= base_url('galeri'); ?>">Galeri Foto</a></li>
							</ul>
						</div>
						<div class="col-6 col-md">
							<h5 class="bold">Media sosial</h5>
							<ul class="list-unstyled">
								<li><a class="text-footer" href="https://www.facebook.com/smkpelitapematangsiantar">Facebook</a></li>
								<li><a class="text-footer" href="https://www.instagram.com/smkpelitapematangsiantar">Instagram</a></li>
							</ul>
						</div>
					</div>

		        </div>
		    </div>
		</div>
		<div class="pt-4"></div>
	</footer>

	<!-- Halaman di load dalam: {elapsed_time} detik -->

    <script src="<?= base_url('assets/js/style.js'); ?>"></script>
    <script src="<?= base_url('assets/js/lazysizes.min.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>