<?= $this->extend('template/admin/template'); ?>
<?= $this->section('content') ?>
<main class="content">
  <div class="container-fluid p-0">

    <h1 class="h3 mb-3">Berita</h1>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="#" class="btn btn-primary"><i class="align-middle" data-feather="refresh-cw"></i> Syncron <?= $aktiv ?> dari dapodik</a>
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
                  $no=1;
                   foreach ($siswa as $b) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $b['nipd'] ?></td>
                    <td><?= $b['nisn'] ?></td>
                    <td><?= $b['nama']?></td>
                    <td><?= $b['nama_rombel'] ?></td>
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
        </div>
      </div>
    </div>

  </div>
</main>
<?= $this->endSection() ?>