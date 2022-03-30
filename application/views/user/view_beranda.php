<div class="container pb-5">
    <div class="row">
        <!-- Divider -->
        <div class="col-12"><hr></div>
        <!-- Jumbotron -->
        <div class="col-12 my-3">
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
        <!-- Cek Kamar -->
        <div class="col-12 my-4 ">
            <div class="card shadow-lg border-0 ">
                <div class="card-header text-primary">Cek Kamar</div>
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
                        <button type="submit" class="btn btn-primary">Periksa</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Form Reservasi -->
        <div class="col-12 my-4 offset-md-2 col-md-8">
            <?php if($reservasi != null && $reservasi == 'tersedia') : ?>
                <!-- Alert -->
                <div class="alert alert-primary text-center" role="alert">Kamar Kosong Tersedia - Pesan Sekarang !</div>
                <!-- Form -->
                <div class="card">
                    <div class="card-header text-primary">Form Reservasi</div>
                    <form class="card-body row gy-4" action="" method="">
                        <div class="col-12">
                            <label for="nama_pemesan" class="form-label text-muted">Nama Pemesan</label>
                            <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan">
                        </div>
                        <div class="col-12">
                            <label for="nama_tamu" class="form-label text-muted">Nama Tamu</label>
                            <input type="text" class="form-control" id="nama_tamu" name="nama_tamu">
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="email" class="form-label text-muted">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="telp" class="form-label text-muted">No. Handphone</label>
                            <input type="text" class="form-control" id="telp" name="telp">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Pesan</button>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
            <?php if($reservasi != null && $reservasi == 'penuh') : ?>
                <div class="alert alert-danger text-center" role="alert">Kamar Penuh !</div>            
            <?php endif; ?>
        </div>
    </div>
</div>