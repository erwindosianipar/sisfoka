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
		<?= form_open_multipart('admin/prestasi/create', 'onsubmit="disable()"'); ?>
			<div class="row">
				<div class="col-lg-6 col-sm-12">
					<label class="bold">Judul prestasi</label>
					<input type="text" name="title" class="form-control" placeholder="Nama prestasi" autocomplete="off">
					<?= form_error('title', '<span class="text-danger bold">', '</span>'); ?>
				</div>
				<div class="col-lg-6 col-sm-12">
					<label class="bold">Deskripsi singkat</label>
					<textarea name="description" class="form-control" placeholder="Deskripsi singkat"></textarea>
					<?= form_error('description', '<span class="text-danger bold">', '</span>'); ?>
				</div>
			</div>
			<div class="pt-3"></div>
			<label class="bold">Gambar</label>
			<input type="file" name="image" class="form-control">
			<div class="pt-3"></div>
			<label class="bold">Konten</label>
			<textarea name="content" class="form-control mb-3" id="summernote"></textarea>
			<?= form_error('content', '<span class="text-danger bold">', '</span>'); ?>
			<div class="pt-3"></div>								
			<button class="btn btn-primary" id="btn">Posting</button>
		<?= form_close(); ?>
	</div>
	<?php include(APPPATH.'views/admin/dir/copyright.php'); ?>
</div>