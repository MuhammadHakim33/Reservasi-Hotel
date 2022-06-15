<div class="container">
    <!-- List Fasilitas -->
    <div class="row g-3">
        <!-- Divider -->
        <div class="col-12 mt-1"><hr></div>
        <!-- Fasilitas -->
        <?php foreach($fasilitas_hotel as $data_fasilitas) :?>
            <div class="col-12 col-sm-6">
                <div class="card mb-3">
                    <img src="<?= base_url('assets/img/' . $data_fasilitas['gambar_fasilitas_hotel']) ?>" class="card-img-top" loading="lazy">
                    <div class="card-body">
                        <!-- Nama Fasilitas -->
                        <h5 class="card-title"><?= $data_fasilitas['fasilitas_hotel'] ?></h5>
                        <p class="card-subtitle mt-2 text-muted"><?= $data_fasilitas['desc_fasilitas_hotel'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>