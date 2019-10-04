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
		<?= form_open_multipart('admin/galeri/update/'.$galeri['id'], 'onsubmit="disable()"'); ?>
			<div class="row mb-4">
				<div class="col-lg-6 col-sm-12 mb-4">
					<label class="bold">Judul foto</label>
					<input type="text" name="title" value="<?= $galeri['title']; ?>" class="form-control" placeholder="Judul foto" autocomplete="off">
					<?= form_error('title', '<span class="text-danger bold">', '</span>'); ?>
				</div>
				<div class="col-lg-6 col-sm-12">
					<label class="bold">Gambar</label>
					<input type="file" name="image" class="form-control">
					<small>[*] Jika tidak diisi maka akan tetap menggunakan gambar yang lama</small>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-12 mb-4">
					<label class="bold">Tampilkan</label>
					<select name="tampilkan" class="form-control">
						<option value="0"<?php if($galeri['tampilkan']==0){echo ' selected';} ?>>Tidak</option>
						<option value="1"<?php if($galeri['tampilkan']==1){echo ' selected';} ?>>Ya</option>
					</select>
				</div>
				<div class="col-lg-6 col-sm-12">
					<label class="bold">Caption</label>
					<textarea name="description" class="form-control" placeholder="Caption"><?= $galeri['description']; ?></textarea>
					<?= form_error('description', '<span class="text-danger bold">', '</span>'); ?>
					<small><i><b>#smkpelita #smkbisa #siantar #smkhits #yppelita</b> sudah otomatis dimasukan</i></small>
				</div>
			</div>
			<div class="pt-3"></div>								
			<button class="btn btn-primary" id="btn">Posting</button>
		<?= form_close(); ?>
	</div>
	<?php include(APPPATH.'views/admin/dir/copyright.php'); ?>
</div>