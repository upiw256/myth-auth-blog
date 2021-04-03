<?= $this->extend('template/admin/template'); ?>
<?= $this->section('content') ?>
<main class="content">
  <div class="container-fluid p-0">

    <h1 class="h3 mb-3">Detail Profile</h1>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
                       
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