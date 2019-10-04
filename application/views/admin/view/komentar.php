<div class="container-fluid">
	<a href="<?= base_url('admin'); ?>">Admin</a> &raquo; Komentar
	<hr>
	<h3 class="bold font-default">Komentar masuk</h3>
	<div class="row pt-3">
		<div class="col-sm-6 mb-3">

		<?php foreach ($komentar as $komentar_item): ?>

		<div class="list-group">
			<div class="list-group-item list-group-item-action flex-column align-items-start mb-3">
			<div class="media">
				<img class="mr-3 rounded-circle" src="<?= base_url('images/avatar/default-sm.jpg'); ?>" alt="Image">
				<div class="media-body">
					<h5 class="bold"><?= $komentar_item['name']; ?></h5>
					<span class=""><?= $komentar_item['created']; ?></span>
				</div>
			</div>

				<div class="mt-2 mb-2"><?= $komentar_item['comment']; ?></div>
				<p><a href="<?= base_url('article/'.$komentar_item['link']); ?>">Lihat komentar di artikel</a></p>
				<div class="card-text">
					<div class="badge badge-pill bg-secondary text-white mb-2">
						IP Address: <?= $komentar_item['ipaddress']; ?>
						</div> | <?= $komentar_item['email']; ?>
				</div>

				<?php if ($komentar_item['see'] == 0) { ?>
				<?= form_open('admin/view/komentar/'.$komentar_item['id'], 'onsubmit="disable()"'); ?>
					<button class="btn btn-primary btn-sm mt-3" id="btn">Tandai sudah dibaca</button>
				<?= form_close(); ?>
				<?php } ?>
			</div>
		</div>

		<?php endforeach; ?>
		
		</div>
		<div class="col-sm-6">
			<div class="card card-body">
			</div>
		</div>
	</div>

	<?php include(APPPATH.'views/admin/dir/copyright.php'); ?>

</div>