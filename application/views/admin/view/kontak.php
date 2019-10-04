<div class="container-fluid">
	<a href="<?= base_url('admin'); ?>">Admin</a> &raquo; Kontak
	<hr>
	<h3 class="bold font-default">Kontak masuk</h3>
	<div class="row pt-3">
		<div class="col-sm-6 mb-3">

		<?php foreach ($kontak as $kontak_item): ?>

		<div class="list-group">
			<div class="list-group-item list-group-item-action flex-column align-items-start mb-3">
			<div class="media">
				<img class="mr-3 rounded-circle" src="<?= base_url('images/avatar/default-sm.jpg'); ?>" alt="Image">
				<div class="media-body">
					<h5 class="bold text-capitalize"><?= $kontak_item['name']; ?></h5>
					<span class=""><?= $kontak_item['created']; ?></span>
				</div>
			</div>

				<div class="mt-2 mb-2"><?= $kontak_item['message']; ?></div>
				<div class="badge badge-pill bg-secondary text-white mb-2">
					<?= $kontak_item['about']; ?>
				</div>
				<div class="card-text">
					<?= $kontak_item['email']; ?> | <?= $kontak_item['phone']; ?>
				</div>
				<?php if ($kontak_item['see'] == 0) { ?>
				<?= form_open('admin/view/kontak/'.$kontak_item['id'], 'onsubmit="disable()"'); ?>
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