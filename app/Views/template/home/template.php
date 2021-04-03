<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SMAN 1 MARGAASIH</title>
  <link rel="shortcut icon" href="<?= base_url() ?>/img/icons/logo.png" />
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
  <link href="<?= base_url() ?>/css/app.css" rel="stylesheet">
  <style>
    main>.container {
      padding: 60px 15px 0;
    }

    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>

<body class="d-flex flex-column h-100 bg-light">
  <header class="wrapper">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-secondary">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="<?= base_url() ?>/img/icons/logo.png" alt="" width="40" height="40">
          SMAN 1 MARGAASIH
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse h3" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profile
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Profile Sekolah</a></li>
                <li><a class="dropdown-item" href="#">Profile Kepala Sekolah</a></li>
                <li><a class="dropdown-item" href="#">Struktur Organigram</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Galery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <?= $this->renderSection('news'); ?>
  <footer class="footer bg-secondary">
    <div class="container-fluid">
      <div class="row text-white">
        <div class="col-6 text-start">
          <p class="mb-0">
            <a href="<?= base_url() ?>/" class="text-white"><strong>SMAN 1 Margaasih</strong> &copy; <?= date('Y') ?></a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  <script src="<?= base_url() ?>/js/instafeed.min.js"></script>
  <script type="text/javascript">
    var feed = new Instafeed({
      get: 'user',
      target: 'instafeed',
      limit: 1,
      debug: true,
      template: '<div class="card mt-3"><div class="card-body"><h2 class="card-title mt-3 mb-3">Update Instagram</h2><img src="{{image}}" class="card-img-top" alt="{{caption}}" ><div class="card-body"><h5 class="card-title text-uppercase">{{username}}</h5><p class="lead">{{timestamp}}</p><p class="card-text">{{caption}}</p><a href="{{link}}"><i data-feather="instagram"></i> @{{username}}</a></div></div></div>',
      accessToken: 'IGQVJVSm45aG1KdjR1eC1BY0NLUkx0eE5NYWpoVFFzTFd3OEFESEF4b0ZAReng3SXJ0cUx1QnFYYS1WYnpoQXN6RWNoOTVXSmRyOHg2LWpGWXpfRGVhZAUZATNnZAIRWZAJTWZAnLUpRZAEVWTDh6YV9ZAaEpTSwZDZD'
    });
    feed.run();
  </script>
  <script src="<?= base_url() ?>/js/app.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
</body>

</html>