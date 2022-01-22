<?php
if(empty($this->session->userdata('gurulog'))) {
	show_404();
}
?>
<div class="container-fluid">
	<p>Login sebagai:  <b><?= $guru->nama; ?></b> (<?= $guru->nip; ?>)</p>
	<hr>
	<h3 class="mb-3"><?= $title; ?></h3>

	<div class="list-group">
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
		<div class="list-group-item shadow-sm">
			<?= form_open('guru/tugas/tambah'); ?>
				<div class="form-row mb-3">
					<div class="col-lg-4">
						<label class="bold">Nama Tugas</label>
						<input type="text" name="nama" class="form-control">
						<?= form_error('nama', '<span class="text-danger bold">', '</span>'); ?>
						<p><small>Contoh: Tugas harian pertama</small></p>
					</div>
					<div class="col-lg-4">
						<label class="bold">Kelas</label>
						<select name="kelas" class="form-control">
							<option value="X">X</option>
							<option value="XI">XI</option>
							<option value="XII">XII</option>
						</select>
					</div>
					<div class="col-lg-4">
						<label class="bold">Jurusan</label>
						<select name="jurusan" class="form-control">
							<option value="RPL">RPL</option>
							<option value="TKJ">TKJ</option>
							<option value="AK">AK</option>
							<option value="AP">AP</option>
						</select>
					</div>
				</div>
				<div class="form-row mb-3">
					<div class="col">
						<textarea name="keterangan" id="summernote" class="form-control"></textarea>
						<?= form_error('keterangan', '<span class="text-danger bold">', '</span>'); ?>
					</div>
				</div>
				<button class="btn btn-primary">Posting</button>
			<? form_close(); ?>
		</div>
	</div>

	<?php include(APPPATH.'views/guru/dir/copyright.php'); ?>
</div>