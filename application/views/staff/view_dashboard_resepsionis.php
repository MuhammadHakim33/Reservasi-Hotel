<div class="container py-5">
    <div class="card">
        <div class="card-header"><strong>Data Reservasi</strong></div>
        <div class="card-body">
            <!-- Search Form -->
            <form action="" class="d-flex mt-2 mb-4 float-end" method="POST">
                <div class="me-3 input-group">
                    <input type="text" class="form-control" name="nama_tamu" placeholder="Cari Nama Tamu">
                </div>
                <div class="me-3 input-group">
                    <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="form-control" name="check_in" placeholder="Cari Tanggal Check-in">
                </div>
                <div class="me-3">
                    <button class="btn btn-primary">Cari</button>
                </div>
            </form>

            <!-- Table -->
            <div class="table-responsive-sm">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nama Tamu</th>
                            <th>Tipe Kamar</th>
                            <th><abbr title="Tahun - Bulan - Tanggal">Check In</abbr></th>
                            <th><abbr title="Tahun - Bulan - Tanggal">Check Out</abbr></th>
                            <th>Tanggal Pemesanan</th>
                            <th>Status</th>
                            <th>-</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($reservasi) > 0) :?>
                            <?php foreach($reservasi as $data) :?>
                                <tr>
                                    <td><?= $data['nama_tamu'] ?></td>
                                    <td><?= $data['nama_tipe_kamar'] ?></td>
                                    <td><?= $data['check_in_kamar'] ?></td>
                                    <td><?= $data['check_out_kamar'] ?></td>
                                    <td><?= $data['created_at'] ?></td>
                                    <td id="badge_status">
                                        <?php if($data['status'] != 'terkonfirmasi') :?>
                                            <span class="badge bg-warning text-dark">Belum Terkonfirmasi</span>
                                        <?php else: ?>
                                            <span class="badge bg-success">Terkonfirmasi</span>
                                        <?php endif;?>
                                    </td>
                                    <td class="d-flex">
                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDetailReservasi<?= $data['id'] ?>">Detail</button>
                                        <!-- Form Button Komfirmasi -->
                                        <form action="<?= base_url('resepsionis/edit_status') ?>" method="POST" class="ms-2">
                                            <input type="hidden" value="<?= $data['id'] ?>" name="id" readonly>
                                            <?php if($data['status'] == 'terkonfirmasi' || $data['check_out_kamar'] < date('Y-m-d')) :?>
                                                <button type="submit" class="btn btn-outline-primary btn-sm" disabled>Konfirmasi</button>
                                            <?php else: ?>
                                                <button type="submit" class="btn btn-outline-primary btn-sm">Konfirmasi</button>
                                            <?php endif;?>
                                        </form>
                                    </td>
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


<!-- Modal Detail Reservasi -->
<?php foreach($reservasi as $data) :?>
    <div class="modal fade" id="ModalDetailReservasi<?= $data['id'] ?>" tabindex="-1" aria-labelledby="ModalDetailReservasi<?= $data['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Lihat Data Reservasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Input -->
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Tanggal Pemesanan</label>
                        <input type="text" class="form-control" value="<?= $data['created_at'] ?>" readonly> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" value="<?= $data['nama_pemesan'] ?>" readonly> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Tamu</label>
                        <input type="text" class="form-control" value="<?= $data['nama_tamu'] ?>" readonly> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="<?= $data['email_pemesan'] ?>" readonly> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telp</label>
                        <input type="text" class="form-control" value="<?= $data['telp_pemesan'] ?>" readonly> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipe Kamar</label>
                        <input type="text" class="form-control" value="<?= $data['nama_tipe_kamar'] ?>" readonly> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Check In</label>
                        <input type="text" class="form-control" value="<?= $data['check_in_kamar'] ?>" readonly> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Check Out</label>
                        <input type="text" class="form-control" value="<?= $data['check_out_kamar'] ?>" readonly> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">jumlah Kamar</label>
                        <input type="text" class="form-control" value="<?= $data['jumlah_kamar'] ?>" readonly> 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>