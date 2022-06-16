<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title;?></title>
    <!-- Custom styles for this template-->
    <link href="<?php base_url();?> assets/css/bootstrap.css" rel="stylesheet">
</head>
<body class="bg-primary">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-5">
                <!-- Form Login -->
                <div class="card shadow-lg my-5">
                    <div class="card-header"><Strong>Staff Login</Strong></div>
                    <div class="card-body">
                        <?php if($this->session->flashdata('pesanLogin')) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= $this->session->flashdata('pesanLogin') ?>
                            </div>
                        <?php endif; ?>

                        <form class="user" method="POST" action="<?= base_url('login/login') ?>">
                            <!-- Username -->
                            <div class="form-group mb-3">
                                <input type="username" class="form-control form-control-user" id="username" aria-describedby="username" placeholder="Username" name="username" required>
                            </div>
                            <!-- Password -->
                            <div class="form-group mb-3">
                                <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password" required>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php base_url(); ?> assets/js/jquery.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php base_url(); ?> assets/js/sb-admin-2.js"></script>
</body>
</html>