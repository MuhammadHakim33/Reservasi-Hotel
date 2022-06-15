<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css')?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css')?> ">
    <title><?= $title ?></title>
</head>

<body class="bg-light">

    <?php if($title !== 'Berhasil'): ?>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-md">
                <a class="navbar-brand" href="<?= base_url();?>">
                    <img src="<?= base_url('assets/logo/logo-black.png');?>" alt="" height="50" >
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url();?>">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('kamar');?>">Kamar</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('fasilitas');?>">Fasilitas</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php endif; ?>