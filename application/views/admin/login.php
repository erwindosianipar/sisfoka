<?php
if(!empty($this->session->userdata('adminlog'))) {
	redirect(base_url('admin'));
}
?>
<div class="container-fluid">
	<div class="row">
		<div class="container">
			<div class="row mt-5">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<div class="card card-body shadow-sm">
						<h3 class="text-center bold">Login Admin</h3>
						<div class="row mt-3">
							<div class="col-sm-1">
							</div>
							<div class="col-sm-10 field">
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
								<?= form_error(
									'captcha', '
									<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<a class="close" data-dismiss="alert" aria-label="close">
									<span aria-hidden="true">&times;</span>
									</a>
									', '</div>');
									?>

								<?= form_open('admin/login', 'onsubmit="disable()"'); ?>
									<input type="text" name="username" class="form-control mb-3" placeholder="Username" value="<?= set_value('username'); ?>">
									<input type="password" name="password" class="form-control mb-3" placeholder="Password" value="<?= set_value('password'); ?>">
									<div class="input-group">
										<input type="number" name="captcha" class="form-control mb-3" placeholder="Captcha">
										<div class="input-group-append">
											<?= $img; ?>
										</div>
									</div>
									<div class="actions">
										<button name="submit" id="btn" class="btn btn-primary btn-block" disabled="disabled">Login</button>
									</div>
								<?= form_close(); ?>
							</div>
						</div>
						<div class="pt-3 text-center">
							<a href="<?= base_url(); ?>">Kembali ke halaman utama</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>