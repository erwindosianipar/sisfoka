<div class="container-fluid bg-primary text-center text-white">
	<div class="pt-5 pb-5"><h1 class="text-uppercase bold">Kompetensi Keahlian</h1></div>
	<div class="pt-3 d-none d-lg-block"></div>
</div>
<div class="container-fluid bg-website">
	<div class="pt-4"></div>
	<div class="row">
		<div class="container">
			<div class="form-row mb-4">
				<?php foreach ($jurusans->result_array() as $jurusan): ?>
					<div class="col-sm-3">
						<a href="<?= base_url('jurusan/'.$jurusan['link']); ?>" title="<?= $jurusan['name']; ?>" class="no-deco">
							<div class="list-group">
								<div class="list-group-item shadow-sm">
									<img src="<?= base_url('images/placeholder/300x400.png'); ?>" class="rounded">
								</div>
								<div class="list-group-item shadow-sm">
									<?= $jurusan['name']; ?>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>