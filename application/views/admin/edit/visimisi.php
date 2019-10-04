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

		<?= form_open('admin/edit/visimisi', 'onsubmit="disable()"'); ?>
			<label class="bold">Deskripsi singkat</label>
			<textarea name="description" class="form-control" placeholder="Deskripsi singkat"><?= $visimisi['description']; ?></textarea>
			<?= form_error('description', '<span class="text-danger bold">', '</span>'); ?>
			<div class="pt-3"></div>
			<label class="bold">Konten</label>
			<textarea name="content" class="form-control mb-3" id="summernote"><?= $visimisi['content']; ?></textarea>
			<?= form_error('content', '<span class="text-danger bold">', '</span>'); ?>
			<button class="btn btn-primary mt-3" id="btn">Posting</button>
		<?= form_close(); ?>
	</div>
	<?php include(APPPATH.'views/admin/dir/copyright.php'); ?>
</div>