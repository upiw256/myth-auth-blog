<?= $this->extend('template/admin/template'); ?>
<?= $this->section('content') ?>
<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Users</h1>

		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
							<i class="align-middle" data-feather="plus-square"></i> Tambah User
						</button>

						<!-- Modal -->
						<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog modal-fullscreen">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel"><?= lang('Auth.register') ?></h5>
									</div>
									<div class="modal-body">
										<form action="<?= route_to('register') ?>" class="row g-3 needs-validation" method="post" novalidate>
										<?= csrf_field() ?>
											<div class="col-md-12">
												<label for="validationCustom01" class="form-label">Email</label>
												<input type="email" name="email" class="form-control" id="validationCustom01" required>
												<div class="invalid-feedback">
													Harap diisi Email
												</div>
											</div>
											<div class="col-md-12">
												<label for="validationCustom02" class="form-label">Username</label>
												<input type="text" name="username" class="form-control" id="validationCustom02" required>
												<div class="invalid-feedback">
													Harap disi Username
												</div>
											</div>
											
											<div class="col-md-12">
												<label for="validationCustom03" class="form-label">Password</label>
												<input type="password" name="password" minlength="6" class="form-control" id="validationCustom03" required>
												<div class="invalid-feedback">
													Harap diisi dengan Password atau isian kurang dari 6 karakter
												</div>
											</div>
											<div class="col-md-12">
												<label for="validationCustom03" class="form-label">Ulangi Password</label>
												<input type="password" name="pass_confirm" minlength="6" class="form-control" id="validationCustom03" required>
												<div class="invalid-feedback">
													Harap diisi dengan Password atau isian kurang dari 6 karakter
												</div>
											</div>
											
											<div class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
													<label class="form-check-label" for="invalidCheck">
														Setuju dengan aturan yang berlaku
													</label>
													<div class="invalid-feedback">
														Anda harus menyetujui peraturan untuk mendaftar
													</div>
												</div>
											</div>
											<script>
												// Example starter JavaScript for disabling form submissions if there are invalid fields
												(function() {
													'use strict'

													// Fetch all the forms we want to apply custom Bootstrap validation styles to
													var forms = document.querySelectorAll('.needs-validation')

													// Loop over them and prevent submission
													Array.prototype.slice.call(forms)
														.forEach(function(form) {
															form.addEventListener('submit', function(event) {
																if (!form.checkValidity()) {
																	event.preventDefault()
																	event.stopPropagation()
																}

																form.classList.add('was-validated')
															}, false)
														})
												})()
											</script>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Save</button>
										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Username</th>
										<th>Email</th>
										<th>full_name</th>
										<th>Role</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($user as $b) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $b['username'] ?></td>
											<td><?= $b['email'] ?></td>
											<td><?= $b['full_name'] ?></td>
											<td><?= $b['name'] ?></td>
											<td><a href="#"><i class="align-middle" data-feather="edit"></i></a> | <a href="#"><i class="align-middle text-danger" data-feather="trash-2"></i></a></td>
										</tr>
									<?php endforeach ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Username</th>
										<th>Email</th>
										<th>full_name</th>
										<th>Role</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
						
						
					</div>
					<h2>Yang Belum Memiliki Hak Akses</h2>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Username</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($users as $b) : ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $b['username'] ?></td>
											<td><?= $b['email'] ?></td>
											<td><a href="#" data-bs-toggle="modal" data-bs-target="#<?= $b['username'] ?>"><i class="align-middle" data-feather="edit"></i></a> | <a href="#"><i class="align-middle text-danger" data-feather="trash-2"></i></a></td>
										</tr>
										<div class="modal fade" id="<?= $b['username'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog modal-fullscreen">
								<div class="modal-content">
									<div class="modal-header">
										<h1 class="modal-title" id="staticBackdropLabel"><?= $b['username'] ?></h1>
									</div>
									<div class="modal-body">
										<form action="/admin/regist" class="row g-3 needs-validation" method="post" novalidate>
										<?= csrf_field() ?>
											<input type="text" name="id" value="<?= $b['id'] ?>" hidden>
											<div class="col-md-12">
												<label for="validationCustom02" class="form-label">Nama Lengkap</label>
												<input type="text" name="full_name" class="form-control" id="validationCustom02" required>
												<div class="invalid-feedback">
													Harap disi nama lengkap
												</div>
											</div>
											<div class="col-md-12">
												<label for="validationCustom02" class="form-label">Role</label>
												<select name="role"  class="form-select" id="validationCustom04" required>
													<option selected disabled value="">Pilih...</option>
													<option value="1">1. Admin</option>
													<option value="2">2. Author</option>
													<option value="3">3. Management</option>
												</select>
												<div class="invalid-feedback">
													Pilih Role
												</div>
											</div>
											
											
											<div class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
													<label class="form-check-label" for="invalidCheck">
														Setuju dengan aturan yang berlaku
													</label>
													<div class="invalid-feedback">
														Anda harus menyetujui peraturan untuk mendaftar
													</div>
												</div>
											</div>
											<script>
												// Example starter JavaScript for disabling form submissions if there are invalid fields
												(function() {
													'use strict'

													// Fetch all the forms we want to apply custom Bootstrap validation styles to
													var forms = document.querySelectorAll('.needs-validation')

													// Loop over them and prevent submission
													Array.prototype.slice.call(forms)
														.forEach(function(form) {
															form.addEventListener('submit', function(event) {
																if (!form.checkValidity()) {
																	event.preventDefault()
																	event.stopPropagation()
																}

																form.classList.add('was-validated')
															}, false)
														})
												})()
											</script>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Save</button>
										</form>

									</div>
								</div>
							</div>
						</div>
									<?php endforeach ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Username</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>

	</div>
</main>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>
<?= $this->endSection() ?>