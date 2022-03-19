<div class="container py-5">
    <!-- Top -->
    <div class="row pb-3">
        <div class="col">
            <h6 class="fw-bolder mb-1">Hasil Pencarian</h6>
            <small class="text-muted">2 Feb 2080 - 3 Feb 2080</small>
        </div>
        <div class="col-4">
            <button type="button" class="btn btn-outline-primary float-end" data-bs-toggle="collapse" data-bs-target="#ubahPencarian" >Ubah</button>
        </div>
        <!-- Collapse -->
        <div class="col-12 collapse mt-3" id="ubahPencarian">
            <div class="card card-body">
                <!-- Form -->
                <form action="" method="" class="form row">
                    <!-- Check-in -->
                    <div class="col-12 col-md">
                        <div class="form-floating mb-3">
                            <input type="date" min="<?= date('Y-m-d'); ?>" class="form-control" id="floatingInput" name="checkIn" placeholder="Check-in">
                            <label for="floatingInput">Check-in</label>
                        </div>
                    </div>
                    <!-- Check-out -->
                    <div class="col-12 col-md">
                        <div class="form-floating mb-3">
                            <input type="date" min="<?= date('Y-m-d'); ?>" class="form-control" id="floatingInput" name="checkOut" placeholder="Check-Out">
                            <label for="floatingInput">Check-Out</label>
                        </div>
                    </div>
                    <!-- Jumlah Kamar -->
                    <div class="col-12 col-md">
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" name="kamar" aria-label="Floating label select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <label for="floatingSelect">Jumlah Kamar</label>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="col-md-12">
                        <button class="btn btn-primary float-end" type="submit" name="cari">Cari kamar</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Divider -->
        <div class="col-12 mt-1"><hr></div>
    </div>
    <!-- List Kamar -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3">
        <!-- Kamar -->
        <div class="col">
            <div class="card mb-3">
                <img src="<?php base_url();?> assets/img/room1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <!-- Nama Kamar -->
                    <h5 class="card-title">Standard 1 King Bed</h5>
                    <!-- Desk -->
                    <p class="card-text text-muted">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <!-- Footer -->
                    <a href="#" class="btn btn-primary">Pesan</a>
                </div>
            </div>
        </div>
    </div>
</div>