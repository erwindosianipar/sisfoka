<div class="container-fluid bg-website">
	<div class="pt-4"></div>
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 pb-4">
					<div class="list-group">
						<div class="list-group-item shadow-sm bold">
							Data Guru
						</div>
						<?php foreach ($gurus->result() as $guru): ?>
							<div class="list-group-item shadow-sm">
								<div class="row">
									<div class="col-sm-4 text-center">
										<img src="<?= base_url('images/guru/medium/'.$guru->foto); ?>" class="rounded mb-3 img-thumbnail">
									</div>
									<div class="col-sm-8">
										<div class="list-group">
											<div class="list-group-item">
												<div class="form-row">
													<div class="col-3">NIP</div>
													<div class="col-9"><?= $guru->nip; ?></div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="form-row">
													<div class="col-3">Nama</div>
													<div class="col-9"><?= $guru->nama; ?></div>
												</div>
											</div>
											<div class="list-group-item">
												<div class="form-row">
													<div class="col-3">Divisi</div>
													<div class="col-9"><?= $guru->divisi; ?></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>