<?php
if(empty($this->session->userdata('gurulog'))) {
	show_404();
}
?>
<div class="container-fluid">
	<p>Login sebagai:  <b><?= $guru->nama; ?></b> (<?= $guru->nip; ?>)</p>
	<hr>
	<a href="<?= base_url('guru/tugas/tambah') ?>" title="">
		<button class="btn btn-primary">Tambah</button>
	</a>

	<div class="table table-responsive mt-3 shadow-sm">
		<table class="table table-bordered table-striped mb-0">
			<thead class="table-dark">
				<tr>
					<th>#</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Tanggal</th>
					<th>Aktif</th>
					<th>Edit</th>
				</tr>
			</thead>
			<tbody>
				<?php if ($tugass->row_array()<1): ?>
					<tr>
						<td colspan="5">Belum ada tugas <a href="<?= base_url('guru/tugas/tambah'); ?>">Tambah</a></td>
					</tr>
				<?php endif; ?>
				<?php $no=0; foreach ($tugass->result() as $tugas): $no++; ?>
					<tr>
						<td><?= $no; ?></td>
						<td><a href="<?= base_url('guru/tugas/lihat/'.$tugas->id); ?>"><?= $tugas->nama; ?></a></td>
						<td><?= $tugas->kelas.'-'.$tugas->jurusan; ?></td>
						<td><?= date("d/m/Y", strtotime($tugas->date)); ?></td>
						<td><?php if($tugas->aktif=='1') echo 'Ya'; else echo 'Tidak'; ?></td>
						<td><a href="<?= base_url('guru/tugas/update/'.$tugas->id); ?>" class="badge badge-pill badge-success">Edit</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<?php include(APPPATH.'views/guru/dir/copyright.php'); ?>
</div>