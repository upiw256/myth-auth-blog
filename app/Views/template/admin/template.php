<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
  <meta name="author" content="AdminKit">
  <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" href="<?= base_url() ?>/img/icons/icon-48x48.png" />

  <title>SMAN 1 Margaasih | <?= $aktiv ?></title>

  <link href="<?= base_url() ?>/css/app.css" rel="stylesheet">
  <Slink href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body data-theme="ligth" data-layout="fluid" data-sidebar="left">
  <div class="wrapper">
    <nav id="sidebar" class="sidebar">
      <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
          <span class="align-middle">Menu</span>
        </a>

        <ul class="sidebar-nav">
          <li class="sidebar-header">
          Home
          </li>

          <li class="sidebar-item <?= $aktiv === 'dashboard' ? 'active' : '' ?>">
            <a class="sidebar-link" href="/admin">
              <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
            </a>
          </li>
          <?php if (in_groups('admin') or in_groups('author')) : ?>
          <li class="sidebar-item <?= $aktiv === 'berita' ? 'active' : '' ?>">
            <a data-bs-target="#berita" data-bs-toggle="collapse" class="sidebar-link"-arial-expanded="true">
              <i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Berita</span>
            </a>
            <ul id="berita" class="sidebar-dropdown list-unstyled collapse <?= $aktiv === 'berita' ? 'show' : ''; ?>" data-bs-parent="#sidebar" style>
            <li class="sidebar-item <?php
            if ($aktiv === 'berita' && $sub === 'tambah-berita') {
              echo 'active';
            }
            ?>">
            <a class="sidebar-link" href="/admin/berita">
              <span class="align-middle">Tambah Berita</span>
            </a>
            </li>
            <li class="sidebar-item <?php
            if ($aktiv === 'berita' && $sub === 'tambah-kategori') {
              echo 'active';
            }
            ?>">
            <a class="sidebar-link" href="/admin/kategori">
              <span class="align-middle">Tambah Kategori</span>
            </a>
            </li>
            </ul>
          </li>
          <?php endif ?>
          <?php if (in_groups('admin')) : ?>
            <li class="sidebar-header">
               User Management
            </li>

            <li class="sidebar-item <?= $aktiv === 'user' ? 'active' : '' ?>">
              <a class="sidebar-link" href="/admin/user">
                <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Daftar User</span>
              </a>
            </li>

            <li class="sidebar-item <?= $aktiv === 'role' ? 'active' : '' ?>">
              <a class="sidebar-link" href="/admin/role">
                <i class="align-middle" data-feather="toggle-right"></i> <span class="align-middle">Role</span>
              </a>
            </li>
          <?php endif ?>
          <?php if (in_groups('admin') or in_groups('management')) : ?>
          <li class="sidebar-header">
            Management Data
          </li>

          <li class="sidebar-item <?= $aktiv === 'siswa' ? 'active' : '' ?>">
            <a class="sidebar-link" href="/admin/siswa">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Daftar Siswa</span>
            </a>
          </li>

          <li class="sidebar-item <?= $aktiv === 'gtk' ? 'active' : '' ?>">
            <a class="sidebar-link" href="/admin/gtk">
              <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Daftar Guru dan TU</span>
            </a>
          </li>
          <li class="sidebar-item <?= $aktiv === 'rombel' ? 'active' : '' ?>">
            <a class="sidebar-link" href="/admin/rombel">
              <i class="align-middle" data-feather="box"></i> <span class="align-middle">Data Kelas</span>
            </a>
          </li>
          <li class="sidebar-item <?= $aktiv === 'jadwal' ? 'active' : '' ?>">
            <a class="sidebar-link" href="/admin/jadwal">
              <i class="align-middle" data-feather="watch"></i> <span class="align-middle">Jadwal Pelajaran</span>
            </a>
          </li>
          <?php endif ?>
          <li class="sidebar-header">
            Setting
          </li>

          <li class="sidebar-item <?= $aktiv === 'setting' ? 'active' : '' ?>">
            <a class="sidebar-link" href="/admin/setting/<?= logged_in() ?>">
              <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Setting Profile</span>
            </a>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/logout">
              <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
        <a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>
        <div class="navbar-collapse collapse">
          <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
              <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

              <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="<?= base_url() ?>/img/avatars/default.png" class="avatar img-fluid rounded-circle me-1" alt="" /> <span class="text-dark"><?= user()->toArray()['full_name']; ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                <a class="dropdown-item" href="pages-settings.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout">Log out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <?= $this->renderSection('content'); ?>

      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-start">
              <p class="mb-0">
                <a href="<?= base_url() ?>/admin" class="text-muted"><strong>SMAN 1 Margaasih</strong></a> &copy;
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="<?= base_url() ?>/js/app.js"></script>
 
</body>

</html>