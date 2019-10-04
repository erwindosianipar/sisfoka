<div class="container-fluid">
	<a href="<?= base_url('admin/dashboard'); ?>">Admin</a> &raquo; <?= $title; ?>
	<hr>
	<h3 class="bold"><?= $title; ?></h3>
	<div class="card card-body shadow-sm mt-4">
		<?php
		if($this->session->flashdata('success')) {   
			$keterangan = $this->session->flashdata('success');
			echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
			echo '<a class="close" data-dismiss="alert" aria-label="close">';
			echo '<span aria-hidden="true">&times;</span>';
			echo '</a>';
			echo $keterangan;
			echo '</div>';
		}
		?>
		<?= form_open_multipart('admin/edit/sambutan_kepsek', 'onsubmit="disable()"'); ?>
		<div class="row">
			<div class="col-lg-6 col-sm-12">
				<label class="bold">Nama kepala sekolah</label>
				<input type="text" name="name" value="<?= $sambutan['name']; ?>" class="form-control" autocomplete="off">
				<?= form_error('name', '<span class="text-danger bold">', '</span>'); ?>
			</div>
			<div class="col-lg-6 col-sm-12">
				<label class="bold">Foto kepala sekolah</label>
				<input type="file" name="image" class="form-control">
			</div>
		</div>
		<div class="pt-3"></div>
		<label class="bold">Konten</label>
		<textarea name="content" class="form-control mb-3" id="summernote"><?= $sambutan['content']; ?></textarea>
		<?= form_error('content', '<span class="text-danger bold">', '</span>'); ?>
		<button class="btn btn-primary mt-3" id="btn">Posting</button>
		<?= form_close(); ?>
	</div>
	<?php include(APPPATH.'views/admin/dir/copyright.php'); ?>
</div>