<?php
if(empty($this->session->userdata('siswalog'))) {
	show_404();
}
?>
<div class="container-fluid">
	<p>Login sebagai:  <b><?= $siswa->nama; ?></b> (<?= $siswa->nisn; ?>)</p>
	<hr>
	<?php include(APPPATH.'views/siswa/dir/copyright.php'); ?>
</div>