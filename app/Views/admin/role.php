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
            <i class="align-middle" data-feather="plus-square"></i> Tambah Role
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Role</h5>
                  </div>
                  <div class="modal-body">
                    ...
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
                    <th>Nama Role</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                  <?php
                  $no=1;
                   foreach ($role as $b) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $b['name'] ?></td>
                    <td><?= $b['description'] ?></td>
                    <td><a href="#"><i class="align-middle" data-feather="edit"></i></a> | <a href="#"><i class="align-middle text-danger" data-feather="trash-2"></i></a></td>
                  </tr>
                  <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Role</th>
                    <th>Description</th>
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