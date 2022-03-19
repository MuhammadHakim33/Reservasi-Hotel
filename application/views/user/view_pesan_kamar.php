<div class="container py-5">
    <!-- Header -->
    <div class="row pb-3">
        <div class="col"><h6 class="fw-bolder mb-1">Pemesanan Kamar</h6></div>
        <!-- Divider -->
        <div class="col-12 mt-1"><hr></div>
    </div>
    <!-- Body -->
    <form action="" method="" class="row row-cols-md-2 g-3">
        <!-- Detail Pemesanan -->
        <div class="col-12 col-lg-4 order-1 order-md-2">
            <div class="card">
                <!-- Header -->
                <div class="card-header">Detail Kamar</div>
                <!-- Foto Kamar -->
                <img src="<?php base_url();?> assets/img/room1.jpg" class="card-img-top" alt="...">
                <!-- Body -->
                <div class="card-body">
                    <h5 class="card-title">Standard 1 King Bed</h5>
                    <!-- Detail -->
                    <div class="row row-cols-1 g-0 mt-3">
                        <!-- Check In -->
                        <div class="col d-flex align-self-center">
                            <p class="card-text text-muted flex-grow-1">Check-in</p>
                            <p>3 Feb 2090</p>
                        </div>
                        <!-- Check Out -->
                        <div class="col d-flex">
                            <p class="card-text text-muted flex-grow-1">Check-out</p>
                            <p>4 Feb 2090</p>
                        </div>
                        <!-- Jumlah Kamar -->
                        <div class="col d-flex">
                            <p class="card-text text-muted flex-grow-1">Jumlah Kamar</p>
                            <p>1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Data Pemesan -->
        <div class="col-12 col-lg-5 order-2 order-md-1">
            <div class="card">
                <!-- Header -->
                <div class="card-header">Data Pemesan</div>
                <!-- Body -->
                <div class="card-body">
                    <!-- Form -->
                    <div class="row">
                        <!-- Nama Pemesan -->
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="namaPemesan" placeholder="Nama Pemesan">
                                <label for="floatingInput">Nama Pemesan</label>
                            </div>
                        </div>
                        <!-- Nama Tamu -->
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="namaTamu" placeholder="Nama Tamu">
                                <label for="floatingInput">Nama Tamu</label>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Alamat Email">
                                <label for="floatingInput">Alamat Email</label>
                            </div>
                        </div>
                        <!-- No Handpone -->
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="telp" placeholder="No Handphone">
                                <label for="floatingInput">No Handphone</label>
                            </div>
                        </div>
                        <!-- Pesan -->
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea type="text" class="form-control" id="floatingInput" name="pesan" placeholder="Pesan" style="height: 100px"></textarea>
                                <label for="floatingInput">Pesan</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Force next columns to break to new line -->
        <div class="w-100 order-3"></div>
        <!-- Footer -->
        <div class="col-12 col-lg-5 order-4">
            <div class="card bg-transparent border-0">
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">Dengan mengeklik tombol di bawah, Anda menyetujui Syarat dan Ketentuan serta Kebijakan Privasi </small></p>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit" name="pesan">Pesan kamar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>