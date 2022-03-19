<div class="container py-5">
    <div class="row">
        <!-- Cari Kamar -->
        <div class="col-lg-4 col-md-6 my-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Temukan kamar terbaik kami</h5>
                    <!-- Form -->
                    <form action="" method="" class="form mt-4">
                        <div class="form-floating mb-3">
                            <input type="date" min="<?= date('Y-m-d'); ?>" class="form-control" id="floatingInput" name="checkIn" placeholder="Check-in">
                            <label for="floatingInput">Check-in</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" min="<?= date('Y-m-d'); ?>" class="form-control" id="floatingInput" name="checkOut" placeholder="Check-Out">
                            <label for="floatingInput">Check-Out</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" name="kamar" aria-label="Floating label select example">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <label for="floatingSelect">Jumlah Kamar</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary" type="submit" name="cari">Cari kamar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Keunggulan -->
        <div class="col-lg-4 col-md-6 offset-lg-4 my-4">
            <div class="d-flex flex-column bd-highlight gap-4">
                <!-- 1 -->
                <div class="card">
                    <div class="card-header">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="none" d="M0 0h24v24H0z"/><path d="M3.161 4.469a6.5 6.5 0 0 1 8.84-.328 6.5 6.5 0 0 1 9.178 9.154l-7.765 7.79a2 2 0 0 1-2.719.102l-.11-.101-7.764-7.791a6.5 6.5 0 0 1 .34-8.826zm1.414 1.414a4.5 4.5 0 0 0-.146 6.21l.146.154L12 19.672l5.303-5.304-3.535-3.535-1.06 1.06a3 3 0 1 1-4.244-4.242l2.102-2.103a4.501 4.501 0 0 0-5.837.189l-.154.146zm8.486 2.828a1 1 0 0 1 1.414 0l4.242 4.242.708-.706a4.5 4.5 0 0 0-6.211-6.51l-.153.146-3.182 3.182a1 1 0 0 0-.078 1.327l.078.087a1 1 0 0 0 1.327.078l.087-.078 1.768-1.768z"/></svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Layanan Terbaik</h5>
                        <p class="card-text">Anda akan mendapat pelayanan terbaik dari staff kami yang terlatih.</p>
                    </div>
                </div>
                <!-- 2 -->
                <div class="card">
                    <div class="card-header">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="none" d="M0 0h24v24H0z"/><path d="M3.783 2.826L12 1l8.217 1.826a1 1 0 0 1 .783.976v9.987a6 6 0 0 1-2.672 4.992L12 23l-6.328-4.219A6 6 0 0 1 3 13.79V3.802a1 1 0 0 1 .783-.976zM5 4.604v9.185a4 4 0 0 0 1.781 3.328L12 20.597l5.219-3.48A4 4 0 0 0 19 13.79V4.604L12 3.05 5 4.604zM12 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm-4.473 5a4.5 4.5 0 0 1 8.946 0H7.527z"/></svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Keamanan Terjamin</h5>
                        <p class="card-text">Kami memiliki petugas keamanan yang telah diakui oleh militer.</p>
                    </div>
                </div>
                <!-- 3 -->
                <div class="card">
                    <div class="card-header">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 6.143v12.824l5.065-2.17 6 3L20 17.68V4.857l1.303-.558a.5.5 0 0 1 .697.46V19l-7 3-6-3-6.303 2.701a.5.5 0 0 1-.697-.46V7l2-.857zm12.243 5.1L12 15.485l-4.243-4.242a6 6 0 1 1 8.486 0zM12 12.657l2.828-2.829a4 4 0 1 0-5.656 0L12 12.657z"/></svg>                    
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Akses Mudah dan Cepat</h5>
                        <p class="card-text">Lokasi dekat dengan berbagai tempat hiburan dan pintu Tol.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>