<div class="container">
    <div class="row">
        <!-- Divider -->
        <div class="col-12"><hr></div>
        <!-- Jumbotron -->
        <div class="col-12 my-3">
            <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/img/image1.png');?>" class="d-block w-100" alt="Hotel">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/img/image2.png');?>" class="d-block w-100" alt="Hotel View">
                    </div>
                </div>
            </div>
        </div>
        <!-- Cek Kamar -->
        <div class="col-12 my-4 offset-md-1 col-md-10">
            <div class="card shadow-lg border-0">
                <div class="card-header text-primary">Cek Kamar</div>
                <form class="card-body row gy-3" action="" method="">
                    <div class="col-12 col-sm col-lg-4 mb-lg-0">
                        <label for="check_in" class="form-label">Check In</label>
                        <input type="date" min="<?= date('Y-m-d'); ?>" class="form-control" id="check_in" name="check_in">
                    </div>
                    <div class="col-12 col-sm col-lg-4 mb-lg-0">
                        <label for="check_out" class="form-label">Check Out</label>
                        <input type="date" min="<?= date('Y-m-d'); ?>" class="form-control" id="check_out" name="check_out">
                    </div>
                    <div class="col col-lg-2 mb-lg-0">
                        <label for="jumah_kamar" class="form-label">Jumlah Kamar</label>
                        <input type="number" class="form-control" id="jumah_kamar" name="jumah_kamar" value="1">
                    </div>
                    <div class="col col-lg-2 mb-lg-0">
                        <label class="form-label opacity-0">Button</label>
                        <br>
                        <button type="submit" class="btn btn-primary">Cek</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Form Reservasi -->
        <div class="col-12 my-4 offset-md-1 col-md-10">
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
                    <div class="col-12 col-sm-6 col-lg-5">
                        <label for="email" class="form-label text-muted">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <label for="telp" class="form-label text-muted">No. Handphone</label>
                        <input type="text" class="form-control" id="telp" name="telp">
                    </div>
                    <div class="col-12 col-lg-3">
                        <label class="form-label text-muted">Tipe Kamar</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Standar</option>
                            <option value="2">Deluxe</option>
                            <option value="3">Superior</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>