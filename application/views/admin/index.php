<div class="container-fluid">
	<a href="<?= base_url('admin/dashboard'); ?>">Admin</a> &raquo; <?= $title; ?>
	<hr>
	<h3 class="bold"><?= $title; ?></h3>
	<div class="mt-4"></div>
	<p class="font-30">Selamat datang, <b><?= $item->name; ?>!</b></p>
	<?php include(APPPATH.'views/admin/dir/copyright.php'); ?>
</div>