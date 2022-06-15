<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/print.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css')?>">
</head>
<body>
    <div class="container">
        <div class="header">
            <h4>INVOICE</h4>
        </div>
        <div class="body">
            <!-- Data Pemesan -->
            <table cellspacing="0" class="data-pemesan">
                <tr>
                    <td>Kode Reservasi</td>
                    <td>:</td>
                    <th><?= $reservasi[0]['kode_reservasi'] ?></th>
                </tr>
                <tr>
                    <td>Tanggal Reservasi</td>
                    <td>:</td>
                    <th><?= $reservasi[0]['registered_at'] ?></th>
                </tr>
                <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <th><?= $reservasi[0]['nama_pemesan'] ?></th>
                </tr>
                <tr>
                    <td>Nama Tamu</td>
                    <td>:</td>
                    <th><?= $reservasi[0]['nama_tamu'] ?></th>
                </tr>
                <tr>
                    <td>Email Pemesan</td>
                    <td>:</td>
                    <th><?= $reservasi[0]['email_pemesan'] ?></th>
                </tr>
                <tr>
                    <td>Telepon Pemesan</td>
                    <td>:</td>
                    <th><?= $reservasi[0]['telp_pemesan'] ?></th>
                </tr>
            </table>
            <!-- Data Kamar -->
            <table cellspacing="0" class="data-kamar">
                <tr>
                    <th>Check in</th>
                    <th>Check out</th>
                    <th>Tipe Kamar</th>
                    <th>Jumlah Kamar</th>
                </tr>
                <tr>
                    <td><?= $reservasi[0]['check_in'] ?></td>
                    <td><?= $reservasi[0]['check_out'] ?></td>
                    <td><?= $reservasi[0]['nama_tipe_kamar'] ?></td>
                    <td><?= $reservasi[0]['jumlah_kamar'] ?></td>
                </tr>
            </table>
        </div>
    </div>
   

    <script>
        // Print Halaman
        document.title = 'Invoice';
        window.print();
        setTimeout(() => window.location.replace('<?= base_url()?>'), 1000)();
    </script>
    
</body>
</html>