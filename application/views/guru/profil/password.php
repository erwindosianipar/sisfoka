<?php
if(empty($this->session->userdata('gurulog'))) {
	show_404();
}
?>
<div class="container-fluid">
	<p>Login sebagai:  <b><?= $guru->nama; ?></b> (<?= $guru->nip; ?>)</p>
	<hr>

	<div class="row">
		<div class="col-lg-6">
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
			<?php
			if($this->session->flashdata('error')) {   
				$keterangan = $this->session->flashdata('error');
				echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
				echo '<a class="close" data-dismiss="alert" aria-label="close">';
				echo '<span aria-hidden="true">&times;</span>';
				echo '</a>';
				echo $keterangan;
				echo '</div>';
			}
			?>
			<div class="list-group">
				<div class="list-group-item shadow-sm bold">
					Perbarui password
				</div>
				<?= form_open('guru/profil/password'); ?>
				<div class="list-group-item shadow-sm">
					<div class="mb-4">
						<label class="bold">Password lama</label>
						<input type="text" name="passold" class="form-control">
						<?= form_error('passold', '<p class="text-danger bold">', '</p>'); ?>
					</div>
					<div class="mb-4">
						<label class="bold">Password baru</label>
						<input type="text" name="passnow" class="form-control">
						<?= form_error('passnow', '<p class="text-danger bold">', '</p>'); ?>
					</div>
					<div class="mb-4">
						<label class="bold">Konfirmasi password</label>
						<input type="text" name="passnew" class="form-control">
						<?= form_error('passnew', '<p class="text-danger bold">', '</p>'); ?>
					</div>
					<button type="submit" class="btn btn-primary">Perbarui</button>
				</div>
				<?= form_close(); ?>
			</div>
		</div>
	</div>

	<?php include(APPPATH.'views/siswa/dir/copyright.php'); ?>
</div>