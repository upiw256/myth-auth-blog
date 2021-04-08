<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="<?= base_url() ?>/img/icons/logo.png" />
    <link href="<?= base_url() ?>/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:gray;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-7 col-md-4 mt-5">
            <div class="card ">
                <div class="col-12 mt-3 text-center">
                    <img src="<?= base_url() ?>/img/icons/logo.png" width="50" height="50">
                </div>
                <h2 class="text-center">Login App <?= $link ?> </h2>
                <div class="card-body">
                <form action="/home/atempLogin/<?= $link ?>" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                        <div id="emailHelp" class="form-text">Jika tidak mengetahui Username dan Password Hubungi walikelas</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
        
    <script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>