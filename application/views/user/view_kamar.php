
<div class="container">
    <!-- List Kamar -->
    <div class="row g-3">
        <!-- Divider -->
        <div class="col-12 mt-1"><hr></div>
        <!-- Kamar -->
        <?php foreach($kamar as $data) :?>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card mb-3">
                    <img src="<?= base_url('assets/img/uploaded/' . $data['gambar_kamar']) ?>" class="card-img-top" alt="..." loading="lazy">
                    <div class="card-body">
                        <!-- Nama Kamar -->
                        <h5 class="card-title"><?= $data['nama_tipe_kamar'] ?></h5>
                        <!-- Fasilitas -->
                        <ul class="list-group list-group-numbered mt-3">
                            <?php foreach($fasilitas_kamar as $data_fasilitas) :?>
                                <?php if(!empty($data_fasilitas['fasilitas_kamar']) && $data_fasilitas['id_kamar'] == $data['id']) :?>
                                    <li class="list-group-item disabled"><?= $data_fasilitas['fasilitas_kamar'] ?></li>
                                <?php endif;?>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>