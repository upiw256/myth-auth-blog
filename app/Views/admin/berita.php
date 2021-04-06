<?= $this->extend('template/admin/template'); ?>
<?= $this->section('content') ?>
<main class="content">
  <div class="container-fluid p-0">

    <h1 class="h3 mb-3">Berita</h1>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="align-middle" data-feather="plus-square"></i> Tambah Berita
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Berita</h5>
                  </div>
                  <div class="modal-body">
                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4">
                      <label for="validationCustom01" class="form-label">First name</label>
                      <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="validationCustom02" class="form-label">Last name</label>
                      <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="validationCustomUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                          Please choose a username.
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="validationCustom03" class="form-label">City</label>
                      <input type="text" class="form-control" id="validationCustom03" required>
                      <div class="invalid-feedback">
                        Please provide a valid city.
                      </div>
                    </div>
                    <div class="col-md-3">
                      <label for="validationCustom04" class="form-label">State</label>
                      <select class="form-select" id="validationCustom04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>...</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid state.
                      </div>
                    </div>
                    <div class="col-md-3">
                      <label for="validationCustom05" class="form-label">Zip</label>
                      <input type="text" class="form-control" id="validationCustom05" required>
                      <div class="invalid-feedback">
                        Please provide a valid zip.
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                          Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                          You must agree before submitting.
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                    <script>

                  // Example starter JavaScript for disabling form submissions if there are invalid fields
                  (function () {
                    'use strict'

                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    var forms = document.querySelectorAll('.needs-validation')

                    // Loop over them and prevent submission
                    Array.prototype.slice.call(forms)
                      .forEach(function (form) {
                        form.addEventListener('submit', function (event) {
                          if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                          }

                          form.classList.add('was-validated')
                        }, false)
                      })
                  })()
                    </script>
                  </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
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
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Isi Berita</th>
                    <th>Tanggal Buat</th>
                    <th>Kategori</th>
                    <th>Banner</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                  <?php
                  $no=1;
                   foreach ($berita as $b) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $b['title'] ?></td>
                    <td><?= $b['author'] ?></td>
                    <td><?= substr($b['content'],0,30).'...' ?></td>
                    <td><?= $b['created_at'] ?></td>
                    <td><?= $b['title_kategori'] ?></td>
                    <td><img src="<?= base_url('/img/photos').'/'.$b['img'] ?>" alt="" width="50" height="30"></td>
                    <td><a href="#"><i class="align-middle" data-feather="edit"></i></a> | <a href="#"><i class="align-middle text-danger" data-feather="trash-2"></i></a></td>
                  </tr>
                  <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Isi Berita</th>
                    <th>Tanggal Buat</th>
                    <th>Kategori</th>
                    <th>Banner</th>
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
} );

</script>
<?= $this->endSection() ?>