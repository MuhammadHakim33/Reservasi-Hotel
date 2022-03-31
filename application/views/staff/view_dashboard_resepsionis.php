<div class="container py-5">
    <div class="card">
        <div class="card-header"><strong>Data Reservasi</strong></div>
        <div class="card-body">
            <!-- Search Form -->
            <form action="" class="d-flex mt-2 mb-4 float-end" method="POST">
                <div class="me-3 input-group">
                    <input type="text" class="form-control" name="nama_tamu" placeholder="Cari Nama Tamu">
                </div>
                <div class="me-3">
                    <input type="date" class="form-control" name="check_in">
                </div>
                <div class="me-3">
                    <button class="btn btn-primary">Cari</button>
                </div>
            </form>

            <!-- Table -->
            <div class="table-responsive-md">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nama Pemesan</th>
                            <th>Nama Tamu</th>
                            <th>Email</th>
                            <th>Telp</th>
                            <th>Tipe Kamar</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Jumlah Kamar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($reservasi) > 0) :?>
                            <?php foreach($reservasi as $data) :?>
                                <tr>
                                    <td><?= $data['nama_pemesan'] ?></td>
                                    <td><?= $data['nama_tamu'] ?></td>
                                    <td><?= $data['email_pemesan'] ?></td>
                                    <td><?= $data['telp_pemesan'] ?></td>
                                    <td><?= $data['nama_tipe_kamar'] ?></td>
                                    <td><?= $data['check_in_kamar'] ?></td>
                                    <td><?= $data['check_out_kamar'] ?></td>
                                    <td><?= $data['jumlah_kamar'] ?></td>
                                </tr>
                            <?php endforeach;?>
                        <?php endif;?>
                            
                        <?php if(count($reservasi) == 0) :?>
                            <tr>
                                <td colspan="8" class="text-center text-danger">Data Tidak Ditemukan</td>
                            </tr>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>