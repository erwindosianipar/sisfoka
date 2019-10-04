<div class="container-fluid">
	<a href="<?= base_url('admin/dashboard'); ?>">Admin</a> &raquo; <?= $title; ?>
	<hr>
	<h3 class="bold"><?= $title; ?></h3>
	<div class="mt-4"></div>
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
		<div class="my-3 card card-body shadow-sm">
			<?= form_open('admin/siswa'); ?>
				<div class="form-row">
					<div class="col-lg-3">
						<input type="text" name="nama" placeholder="Nama (opsional)" class="form-control">
					</div>
					<div class="col-lg-3">
						<select name="kelas" class="form-control">
							<option value="0">Null (alumni)</option>
							<option value="X" selected>X</option>
							<option value="XI">XI</option>
							<option value="XII">XII</option>
						</select>
					</div>
					<div class="col-lg-3">
						<select name="jurusan" class="form-control">
							<option value="RPL">RPL</option>
							<option value="TKJ">TKJ</option>
							<option value="AK">AK</option>
							<option value="AP">AP</option>
						</select>
					</div>
					<div class="col-lg-3">
						<button name="cari" class="btn btn-outline-primary btn-block">Tampilkan</button>
					</div>
				</div>
			<?= form_close(); ?>
		</div>

		<?= form_open('admin/siswa/delete', 'id="form-delete"'); ?>
			<div class="shadow-sm">
				<div class="table table-responsive">
					<table class="table table-hovered mb-0">
						<thead class="table-dark">
							<tr>
								<th>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" id="check-all" class="custom-control-input">
										<label class="custom-control-label" for="check-all">&nbsp;</label>
									</div>
								</th>
								<th>NISN</th>
								<th>Nama</th>
								<th>Kelas</th>
								<th>Telepon</th>
								<th>Aks. login</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php if ($siswas->num_rows()==0)
							{
								echo '<tr>';
								echo '<td colspan="7">';
								echo 'Data siswa tidak ditemukan <a href="'.base_url('admin/guru/add').'">Tambah</a>';
								echo '</td>';
								echo '</tr>';
							}
							?>
							<?php $no=0; foreach ($siswas->result_array() as $siswa): $no++; ?>
							<tr>
								<td>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="check-item custom-control-input" id="cb<?= $no; ?>" name="nisn[]"" value="<?= $siswa['nisn']; ?>">
										<label class="custom-control-label" for="cb<?= $no; ?>">&nbsp;</label>
									</div>
								</td>
								<th><?= $siswa['nisn']; ?></th>
								<td><?= $siswa['nama']; ?></td>
								<td><?php
									if($siswa['kelas']=='0')
										echo 'Alumni '.$siswa['jurusan'];
									else echo $siswa['kelas'].'-'.$siswa['jurusan'];
									?>
								</td>
								<td><?= $siswa['telepon']; ?></td>
								<td><?php if($siswa['aktif']) echo 'Ya'; else echo 'Tidak'; ?></td>
								<td>
									<a href="<?= base_url('admin/siswa/detail/'.$siswa['id']); ?>" class="text-dark">
										<span class="badge badge-primary">Detail</span>
									</a>
									<a href="<?= base_url('admin/siswa/update/'.$siswa['id']); ?>">
										<span class="badge badge-success">Edit</span>
									</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<button type="submit" name="submit" class="btn btn-primary" id="btn-delete">Delete</button>
		<?= form_close(); ?>
		<script>
			$(document).ready(function(){
				$("#check-all").click(function(){
					if($(this).is(":checked"))
						$(".check-item").prop("checked", true);
					else
						$(".check-item").prop("checked", false);
				});
				$("#btn-delete").click(function(){
					$("#form-delete").submit();
				});
			});
		</script>
	<?php include(APPPATH.'views/admin/dir/copyright.php'); ?>
</div>