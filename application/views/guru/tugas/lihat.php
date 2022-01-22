<?php
if(empty($this->session->userdata('gurulog'))) {
	show_404();
}
?>
<div class="container-fluid">
	<p>Login sebagai:  <b><?= $guru->nama; ?></b> (<?= $guru->nip; ?>)</p>
	<hr>
	<h3 class="mb-3"><?= $title; ?></h3>

	<div class="list-group mb-3">
		<div class="list-group-item shadow-sm">
			<h4 class="bold"><?= $tugas['nama']; ?></h4>
			<p><?= $tugas['kelas'].'-'.$tugas['jurusan']; ?>, <?= date("d/m/Y",strtotime($tugas['date'])); ?></p>
			<div class="mt-2">
				<?= $tugas['keterangan']; ?>
			</div>
		</div>
	</div>

	<div class="table table-responsive">
		<table class="table table-bordered table-striped shadow-sm mb-0">
			<thead class="table-dark">
				<tr>
					<th>#</th>
					<th>Nama</th>
					<th>Jawaban</th>
					<th>File</th>
					<th>Tanggal</th>
				</tr>
			</thead>
			<tbody>
				<?php if ($jawabans->row_array()<1): ?>
				<tr>
					<td colspan="6">Belum ada jawaban dari siswa</td>
				</tr>
				<?php endif; ?>
				
				<?php $no=0; foreach ($jawabans->result_array() as $jawaban): $no++; ?>
				<tr>
					<td><?= $no; ?></td>
					<td><?= $jawaban['siswaid']; ?></td>
					<td><?= $jawaban['keterangan']; ?></td>
					<td>
						<?php if(empty($jawaban['file'])) echo '-';
						else echo '<a href="'.base_url('tugas/upload/'.$jawaban['file']).'">File</a>';
						?>
					</td>
					<td><?= $jawaban['date']; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<?php include(APPPATH.'views/guru/dir/copyright.php'); ?>
</div>