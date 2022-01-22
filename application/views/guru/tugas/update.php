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
			<?= form_open('guru/tugas/update/'.$tugas['id']); ?>
				<div class="form-row mb-3">
					<div class="col-lg-4">
						<label class="bold">Nama Tugas</label>
						<input type="text" name="nama" value="<?= $tugas['nama']; ?>" class="form-control">
						<?= form_error('nama', '<span class="text-danger bold">', '</span>'); ?>
						<p><small>Contoh: Tugas harian pertama</small></p>
					</div>
					<div class="col-lg-4">
						<label class="bold">Kelas</label>
						<select name="kelas" class="form-control">
							<option value="X"<?php if($tugas['kelas']=='X') echo ' selected'; ?>>X</option>
							<option value="XI"<?php if($tugas['kelas']=='XI') echo ' selected'; ?>>XI</option>
							<option value="XII"<?php if($tugas['kelas']=='XII') echo ' selected'; ?>>XII</option>
						</select>
					</div>
					<div class="col-lg-4">
						<label class="bold">Jurusan</label>
						<select name="jurusan" class="form-control">
							<option value="RPL"<?php if($tugas['jurusan']=='RPL') echo ' selected'; ?>>RPL</option>
							<option value="TKJ"<?php if($tugas['jurusan']=='TKJ') echo ' selected'; ?>>TKJ</option>
							<option value="AK"<?php if($tugas['jurusan']=='AK') echo ' selected'; ?>>AK</option>
							<option value="AP"<?php if($tugas['jurusan']=='AP') echo ' selected'; ?>>AP</option>
						</select>
					</div>
				</div>
				<div class="form-row mb-3">
					<div class="col">
						<textarea name="keterangan" id="summernote" class="form-control"><?= $tugas['keterangan']; ?></textarea>
						<?= form_error('keterangan', '<span class="text-danger bold">', '</span>'); ?>
					</div>
				</div>
				<div class="form-row mb-3">
					<div class="col-2">
						<label class="bold">Buka tugas</label>
						<select name="aktif" class="form-control">
							<option value="1"<?php if($tugas['aktif']=='1') echo ' selected'; ?>>Ya</option>
							<option value="0"<?php if($tugas['aktif']=='0') echo ' selected'; ?>>Tidak</option>
						</select>
					</div>
				</div>
				<button class="btn btn-primary">Posting</button>
			<? form_close(); ?>
		</div>
	</div>

	<?php include(APPPATH.'views/guru/dir/copyright.php'); ?>
</div>