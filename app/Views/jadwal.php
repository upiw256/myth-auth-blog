<?= $this->extend('template/home/template'); ?>
<?= $this->section('news') ?>
<main class="flex-shrink-0 mt-1 mb-6">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				
			</div>
			<div class="col-lg-4">
				<form class="d-flex" action="/" method="post">
					<input class="form-control me-2" type="text" placeholder="Cari Berita">
					<button class="btn btn-secondary" type="submit">Search</button>
				</form>
				<div class="card mt-3">
					<div class="card-body">
						<h2 class="card-title">Categories</h2>
						<ul class="list-group list-group-flush">
							<?php foreach($kategori as $k): ?>
							<li class="list-group-item"><a href="/" class="text-decoration-none"><b class="text-uppercase"><?= $k['title'] ?></b></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>

				<div id="instafeed"></div>
				<div class="card mt-1" style="height: 200vm;">
					<div class="card-body">
						<h2 class="card-title">Maps</h2>
						<iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=sman%201%20margaasih&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" frameborder=" 0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>
</main>
<?= $this->endSection() ?>