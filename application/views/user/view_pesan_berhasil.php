<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css');?> ">

    <style>
        .icon {
            height: 36px;
            width: 36px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
            border-radius: 100%;
        }
        table {display: none;}
        @media print{
            .noPrint { display: none;}
            .print { display: block !important;}
        }
    </style>
    <title><?= $title ?></title>
    
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row noPrint">
            <!-- Detail -->
            <div class="col-12 col-md-4 offset-md-4 mt-4">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <div class="icon bg-success">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="rgba(255,255,255,1)"/></svg>
                        </div>
                        <h5 class="mb-0"><strong>Berhasil</strong></h5>
                    </div>
                    <!-- Body -->
                    <div class="card-body" id="card-body">
                        <div class="row row-cols-1 g-0">
                            <!-- Tanggal Pemesanan -->
                            <div class="col d-flex align-self-center">
                                <p class="card-text text-muted flex-grow-1 mb-0">Tanggal Pemesanan</p>
                                <p class="mb-0"><?= $reservasi_tamu[0]['created_at'] ?></p>
                            </div>
                            <!-- Divider -->
                            <div class="col-12"><hr></div>
                            <!-- Nama Tamu -->
                            <div class="col d-flex align-self-center">
                                <p class="card-text text-muted flex-grow-1">Nama Tamu</p>
                                <p><?= $reservasi_tamu[0]['nama_tamu'] ?></p>
                            </div>
                            <!-- Check In -->
                            <div class="col d-flex align-self-center">
                                <p class="card-text text-muted flex-grow-1">Check-in</p>
                                <p><?= $reservasi_tamu[0]['check_in_kamar'] ?></p>
                            </div>
                            <!-- Check Out -->
                            <div class="col d-flex">
                                <p class="card-text text-muted flex-grow-1">Check-out</p>
                                <p><?= $reservasi_tamu[0]['check_out_kamar'] ?></p>
                            </div>
                            <!-- Jumlah Kamar -->
                            <div class="col d-flex">
                                <p class="card-text text-muted flex-grow-1 mb-0">Jumlah Kamar</p>
                                <p class="mb-0"><?= $reservasi_tamu[0]['jumlah_kamar'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="col d-grid noPrint">
                    <button class="btn btn-primary noPrint" onclick="printPage()" role="button">Kembali dan Cetak</button>
                </div>
            </div>
        </div>

        <!-- Bagian Cetak -->
        <div class="row">
            <div class="col-12">
                <table border="1" cellpadding="10" cellspacing="0" class="print">
                    <tr>
                        <th>Tanggal Pemesanan</th>
                        <th>Nama Tamu</th>
                        <th>Check in</th>
                        <th>Check out</th>
                        <th>Jumlah Kamar</th>
                    </tr>
                    <tr>
                        <td><?= $reservasi_tamu[0]['created_at'] ?></td>
                        <td><?= $reservasi_tamu[0]['nama_tamu'] ?></td>
                        <td><?= $reservasi_tamu[0]['check_in_kamar'] ?></td>
                        <td><?= $reservasi_tamu[0]['check_out_kamar'] ?></td>
                        <td><?= $reservasi_tamu[0]['jumlah_kamar'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/custom.js');?> "></script>
</body>
</html>