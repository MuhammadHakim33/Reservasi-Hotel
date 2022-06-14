<div class="container pb-5">
    <div class="row">
        <!-- Divider -->
        <div class="col-12"><hr></div>

        <!-- Reservasi Kamar -->
        <div class="col-12 my-4 ">
            <div class="card shadow-lg border-0 ">
                <div class="card-header text-primary">Reservasi Kamar</div>
                <form class="card-body row gy-3" action="<?= base_url('reservasi/cek_kamar')?>" method="POST">
                    <div class="col-12 col-md col-lg-3 mb-lg-0">
                        <label for="check_in" class="form-label text-muted">Check In</label>
                        <input type="date" min="<?= date('Y-m-d'); ?>" class="form-control" id="check_in" name="check_in" required>
                    </div>
                    <div class="col-12 col-md col-lg-3 mb-lg-0">
                        <label for="check_out" class="form-label text-muted">Check Out</label>
                        <input type="date" min="<?= date('Y-m-d'); ?>" class="form-control" id="check_out" name="check_out" required>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2 mb-lg-0">
                        <label class="form-label text-muted">Tipe Kamar</label>
                        <select class="form-select" aria-label="Default select example" name="tipe_kamar">
                            <?php foreach($kamar as $data) :?>
                                <option value="<?= $data['id'] ?>"><?= $data['nama_tipe_kamar'] ?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="col col-md-6 col-lg-2 mb-lg-0">
                        <label for="jumah_kamar" class="form-label text-muted">Jumlah Kamar</label>
                        <input type="number" min="1" class="form-control" id="jumah_kamar" name="jumlah_kamar" value="1" required>
                    </div>
                    <div class="col col-lg-2 mb-lg-0">
                        <label class="form-label opacity-0">Button</label>
                        <br>
                        <button type="submit" class="btn btn-primary">Pesan</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Jumbotron -->
        <div class="col-12 my-4">
            <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/img/hotel.jpg');?>" class="d-block w-100" alt="Hotel" loading="lazy">
                    </div>
                </div>
            </div>
        </div>

        <!-- Tentang Kami -->
        <div class="col-12 my-4">
            <h3 class="lh-base">Salah satu hotel bintang 5 di negara ini. Berada di lokasi yang strategis di pusat kota, sehingga memudahkan tamu untuk mengunjungi tempat hiburan. Telah mendapatkan berbagai penghargaan bergengsi internasional, sehingga pelayanan kami tidak perlu diragukan lagi.</h3>
        </div>
    </div>
</div>



<!-- Modal Form Reservasi -->
<?php if($reservasi !== NULL) : ?>
<div class="modal" tabindex="-1" id="modalFormReservasi" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable">
        <form class="modal-content" action="<?= base_url('reservasi/reservasi_kamar') ?>" method="POST">
            <div class="modal-header">
                <h5 class="modal-title">Form Reservasi</h5>
                <a href="<?= base_url('beranda') ?>" type="button" class="btn-close"></a>
            </div>
            <!-- Output Jika Kamar Tersedia -->
            <?php if($reservasi === 'TRUE') : ?>
                <div class="modal-body">
                    <!-- Alert -->
                    <div class="alert alert-primary text-center" role="alert">Kamar Kosong Tersedia - Pesan Sekarang !</div>
                    <!-- Rangkuman Reservasi -->
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label class="form-label text-muted">Check In : </label>
                            <p><?= $kamar_dipesan['check_in'] ?></p>
                            <input type="hidden" class="form-control" id="check_in" name="check_in" value="<?= $kamar_dipesan['check_in'] ?>" readonly>
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label text-muted">Check out : </label>
                            <p><?= $kamar_dipesan['check_out'] ?></p>
                            <input type="hidden" class="form-control" id="check_out" name="check_out" value="<?= $kamar_dipesan['check_out'] ?>" readonly>
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label text-muted">Tipe Kamar : </label>
                            <input type="hidden" class="form-control" id="tipe_kamar" name="tipe_kamar" value="<?= $kamar_dipesan['tipe_kamar'] ?>" readonly>
                            <?php foreach($kamar as $data) :?>
                                <?php if($data['id'] === $kamar_dipesan['tipe_kamar']) :?>
                                    <p><?= $data['nama_tipe_kamar'] ?></p>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label text-muted">Jumlah Kamar : </label>
                            <p><?= $kamar_dipesan['jumlah_kamar'] ?></p>
                            <input type="hidden" class="form-control" id="jumlah_kamar" name="jumlah_kamar" value="<?= $kamar_dipesan['jumlah_kamar'] ?>" readonly>
                        </div>
                        <hr>
                    </div>
                    <!-- Normal Input -->
                    <div class="col-12 mb-3">
                        <label for="nama_pemesan" class="form-label text-muted">Nama Pemesan*</label>
                        <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="nama_tamu" class="form-label text-muted">Nama Tamu*</label>
                        <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="email_pemesan" class="form-label text-muted">Email*</label>
                        <input type="email" class="form-control" id="email_pemesan" name="email_pemesan" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="telp_pemesan" class="form-label text-muted">No. Handphone*</label>
                        <input type="text" class="form-control" id="telp_pemesan" name="telp_pemesan" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Pesan</button>
                </div>
            <?php endif; ?>

            <!-- Output Jika Kamar Penuh -->
            <?php if($reservasi === 'FALSE') : ?>
                <div class="modal-body">
                    <div class="alert alert-danger text-center" role="alert">Kamar Penuh !</div>            
                </div>
            <?php endif; ?>
        </form>
    </div>
</div>
<?php endif; ?>