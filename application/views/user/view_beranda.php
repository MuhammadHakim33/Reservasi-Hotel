<div class="container pb-5">
    <div class="row">
        <!-- Divider -->
        <div class="col-12"><hr></div>
        <!-- Cek Kamar -->
        <div class="col-12 my-4 ">
            <div class="card shadow-lg border-0 ">
                <div class="card-header text-primary">Reservasi Kamar</div>
                <form class="card-body row gy-3" action="" method="POST">
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

        <!-- Form Reservasi -->
        <?php if($reservasi != null) : ?>
        <div class="modal" tabindex="-1" id="modalFormReservasi">
            <div class="modal-dialog modal-dialog-scrollable">
                <form class="modal-content" action="<?= base_url('beranda/reservasi_kamar') ?>" method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title">Form Reservasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Jika Kamar Tersedia -->
                    <?php if($reservasi == 'tersedia') : ?>
                        <div class="modal-body">
                            <!-- Alert -->
                            <div class="alert alert-primary text-center" role="alert">Kamar Kosong Tersedia - Pesan Sekarang !</div>
                            <!-- Hidden Input -->
                            <div class="mb-0">
                                <input type="text" class="form-control" id="check_in" name="check_in" value="<?= $data_kamar_dipesan['check_in'] ?>" readonly hidden>
                                <input type="text" class="form-control" id="check_out" name="check_out" value="<?= $data_kamar_dipesan['check_out'] ?>" readonly hidden>
                                <input type="text" class="form-control" id="tipe_kamar" name="tipe_kamar" value="<?= $data_kamar_dipesan['tipe_kamar'] ?>" readonly hidden>
                                <input type="number" class="form-control" id="jumlah_kamar" name="jumlah_kamar" value="<?= $data_kamar_dipesan['jumlah_kamar'] ?>" readonly hidden>
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

                    <!-- Jika Kamar Penu -->
                    <?php if($reservasi == 'penuh') : ?>
                        <div class="modal-body">
                            <div class="alert alert-danger text-center" role="alert">Kamar Penuh !</div>            
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
        <?php endif; ?>

        <!-- Tentang Kami -->
        <div class="col-12 my-4">
            <!-- <p>Tentang Kami</p> -->
            <h3 class="lh-base">Salah satu hotel bintang 5 di negara ini. Berada di lokasi yang strategis di pusat kota, sehingga memudahkan tamu untuk mengunjungi tempat hiburan. Telah mendapatkan berbagai penghargaan bergengsi internasional, sehingga pelayanan kami tidak perlu diragukan lagi.</h3>
        </div>
    </div>
</div>