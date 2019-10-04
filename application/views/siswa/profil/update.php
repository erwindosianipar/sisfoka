<?php
if(empty($this->session->userdata('siswalog'))) {
	show_404();
}
?>
<div class="container-fluid">
	<p>Login sebagai:  <b><?= $siswa->nama; ?></b> (<?= $siswa->nisn; ?>)</p>
	<hr>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<i class="fa fa-info-circle"></i> Isi semua data dengan data yang benar.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<i class="fa fa-info-circle"></i> Perbarui nomor telepon untuk memudahkan pihak sekolah menghubungi Anda. 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

	<div class="list-group">
		<div class="list-group-item shadow-sm">
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
			<div class="form-row mt-5 mb-5">
				<div class="col-lg-4">
					<div class="form-row">
						<center>
							<div class="col-lg-8 mb-4">
								<img src="<?= base_url('images/siswa/'.$siswa->foto); ?>" class="img-thumbnail shadow-sm">
							</div>
							<div class="text-uppercase">
								<p class="bold"><?= $siswa->nama; ?> (<?= $siswa->nisn; ?>)</p>
							</div>
						</center>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="list-group">
						<div class="list-group-item shadow-sm">
							<?= form_open('siswa/profil/update'); ?>
								<div class="form-group row bold">
									<label class="col-sm-4 col-form-label">Nomor NIK</label>
									<div class="col-sm-7">
										<input type="text" name="nik" value="<?= $siswa->nik; ?>" class="form-control">
										<?= form_error('nik', '<p class="text-danger bold">', '</p>'); ?>
									</div>
								</div>
								<div class="form-group row bold">
									<label class="col-sm-4 col-form-label">Tempat Lahir</label>
									<div class="col-sm-7">
										<input type="text" name="tmp_lahir" value="<?= $siswa->tmp_lahir; ?>" class="form-control">
										<?= form_error('tmp_lahir', '<p class="text-danger bold">', '</p>'); ?>
									</div>
								</div>
								<div class="form-group row bold">
									<label class="col-sm-4 col-form-label">Tanggal Lahir</label>
									<div class="col-sm-7">
										<input type="date" name="tgl_lahir" value="<?= $siswa->tgl_lahir; ?>" class="form-control">
										<?= form_error('tgl_lahir', '<p class="text-danger bold">', '</p>'); ?>
									</div>
								</div>
								<div class="form-group row bold">
									<label class="col-sm-4 col-form-label">Jenis Kelamin</label>
									<div class="col-sm-7">
										<select name="gender" class="form-control">
											<option value="0"<?php if($siswa->gender == '0') echo ' selected'; ?>>-</option>
											<option value="L"<?php if($siswa->gender == 'L') echo ' selected'; ?>>Laki-laki</option>
											<option value="P"<?php if($siswa->gender == 'P') echo ' selected'; ?>>Perempuan</option>
										</select>
									</div>
								</div>
								<div class="form-group row bold">
									<label class="col-sm-4 col-form-label">Agama</label>
									<div class="col-sm-7">
										<select name="agama" class="form-control">
											<option value="-"<?php if(empty($siswa->agama)) echo ' selected'; ?>>-</option>
											<option value="Islam"<?php if($siswa->agama == 'Islam') echo ' selected'; ?>>Islam</option>
											<option value="Katholik"<?php if($siswa->agama == 'Katholik') echo ' selected'; ?>>Katholik</option>
											<option value="Kristen"<?php if($siswa->agama == 'Kristen') echo ' selected'; ?>>Kristen</option>
											<option value="Hindu"<?php if($siswa->agama == 'Hindu') echo ' selected'; ?>>Hindu</option>
											<option value="Buddha"<?php if($siswa->agama == 'Buddha') echo ' selected'; ?>>Buddha</option>
											<option value="Konghucu"<?php if($siswa->agama == 'Konghucu') echo ' selected'; ?>>Konghucu</option>
										</select>
									</div>
								</div>
								<div class="form-group row bold">
									<label class="col-sm-4 col-form-label">Alamat Email</label>
									<div class="col-sm-7">
										<input type="email" name="email" value="<?= $siswa->email; ?>" class="form-control">
										<?= form_error('email', '<p class="text-danger bold">', '</p>'); ?>
									</div>
								</div>
								<div class="form-group row bold">
									<label class="col-sm-4 col-form-label">No. Telepon</label>
									<div class="col-sm-7">
										<input type="text" name="telepon" value="<?= $siswa->telepon; ?>" class="form-control">
										<?= form_error('telepon', '<p class="text-danger bold">', '</p>'); ?>
									</div>
								</div>
								<div class="form-group row bold">
									<label class="col-sm-4 col-form-label">No. Telepon orangtua</label>
									<div class="col-sm-7">
										<input type="text" name="telepon_ortu" value="<?= $siswa->telepon_ortu; ?>" class="form-control">
										<?= form_error('telepon_ortu', '<p class="text-danger bold">', '</p>'); ?>
									</div>
								</div>
								<div class="form-group row bold">
									<label class="col-sm-4 col-form-label">Alamat Lengkap</label>
									<div class="col-sm-7">
										<textarea name="alamat" class="form-control"><?= $siswa->alamat; ?></textarea>
										<?= form_error('alamat', '<p class="text-danger bold">', '</p>'); ?>
									</div>
								</div>
								<div class="form-group row bold">
									<label class="col-sm-4 col-form-label">Biodata public</label>
									<div class="col-sm-7">
										<textarea name="bio" class="form-control"><?= $siswa->bio; ?></textarea>
										<small>[*] Ini akan ditampilkan secara public</small>
										<?= form_error('bio', '<p class="text-danger bold">', '</p>'); ?>
									</div>
								</div>
								<div class="form-group row bold">
									<label class="col-sm-4 col-form-label">Tahun masuk</label>
									<div class="col-sm-7">
										<input type="number" name="masuk" value="<?= $siswa->masuk; ?>" class="form-control" maxlength="4" size="4">
										<?= form_error('masuk', '<p class="text-danger bold">', '</p>'); ?>
									</div>
								</div>
								<div class="form-group row bold">
									<label class="col-sm-4 col-form-label">Tahun kelulusan</label>
									<div class="col-sm-7">
										<input type="number" name="lulus" value="<?= $siswa->lulus; ?>" class="form-control" maxlength="4" size="4">
										<?= form_error('keluar', '<p class="text-danger bold">', '</p>'); ?>
									</div>
								</div>
								<div class="form-group row bold">
									<label class="col-sm-4 col-form-label">Status kesiswaan</label>
									<div class="col-sm-7">
										<select name="status" class="form-control">
											<option value="aktif"<?php if($siswa->status == 'aktif') echo ' selected'; ?>>Siswa aktif</option>
											<option value="prakerin"<?php if($siswa->status == 'prakerin') echo ' selected'; ?>>Prakerin</option>
											<option value="alumni"<?php if($siswa->status == 'alumni') echo ' selected'; ?>>Alumni</option>
										</select>
									</div>
								</div>
								<button type="submit" name="submit" class="btn btn-primary mt-4">Update profil</button>
							<?= form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include(APPPATH.'views/siswa/dir/copyright.php'); ?>
</div>