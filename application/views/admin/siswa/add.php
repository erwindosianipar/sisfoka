<div class="container-fluid">
	<a href="<?= base_url('admin/dashboard'); ?>">Admin</a> &raquo; <?= $title; ?>
	<hr>
	<h3 class="bold"><?= $title; ?></h3>
	<a href="<?= base_url('admin/siswa/upload'); ?>">
		<button class="btn btn-primary btn-sm mt-3">Upload data dari excel</button>
	</a>
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
		<?= form_open('admin/siswa/add', 'onsubmit="disable()"'); ?>
			<div class="row">
				<div class="col-sm-6 mb-3">
					<label class="bold">NISN</label>
					<input type="number" name="nisn" value="<?= set_value('nisn'); ?>" class="form-control" placeholder="Nomor NISN" autocomplete="off">
					<?= form_error('nisn', '<span class="text-danger bold">', '</span>'); ?>
				</div>
				<div class="col-sm-6 mb-3">
					<label class="bold">Nama siswa</label>
					<input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control" placeholder="Nama siswa" autocomplete="off">
					<?= form_error('name', '<span class="text-danger bold">', '</span>'); ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 mb-3">
					<label class="bold">Kelas</label>
					<select name="kelas" class="form-control">
						<option value="0">Null</option>
						<option value="X">X</option>
						<option value="XI">XI</option>
						<option value="XII">XII</option>
					</select>
					<small>[*] <b>Null</b> untuk siswa nonaktif</small>
					<?= form_error('kelas', '<span class="text-danger bold">', '</span>'); ?>
				</div>
				<div class="col-sm-6 mb-3">
					<label class="bold">Jurusan</label>
					<select name="jurusan" class="form-control">
						<option value="RPL">RPL</option>
						<option value="TKJ">TKJ</option>
						<option value="AK">AK</option>
						<option value="AP">AP</option>
					</select>
					<?= form_error('jurusan', '<span class="text-danger bold">', '</span>'); ?>
				</div>
			</div>
			<div class="pt-3"></div>
			<button class="btn btn-primary" id="btn">Upload</button>
		<?= form_close(); ?>
	</div>
	<?php include(APPPATH.'views/admin/dir/copyright.php'); ?>
</div>