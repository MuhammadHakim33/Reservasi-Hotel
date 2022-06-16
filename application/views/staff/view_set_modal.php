<!-- Modal Tambah Kamar -->
<div class="modal fade" id="ModalTambahKamar" tabindex="-1" aria-labelledby="ModalTambahKamarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" action="<?= base_url('admin/tambah_kamar') ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTambahKamarLabel">Tambah Kamar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Input -->
            <div class="modal-body">
                <div class="mb-3">
                    <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                    <input type="text" class="form-control" id="tipe_kamar" name="tipe_kamar" aria-describedby="tipeKamarHelp" required>
                </div>
                <div class="mb-3">
                    <label for="jumlah_kamar" class="form-label">Jumlah Kamar</label>
                    <input type="number" class="form-control" id="jumlah_kamar" name="jumlah_kamar" aria-describedby="jumlahKamarHelp" min="1" required>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" aria-describedby="gambarHelp" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Tambah Fasilitas Kamar -->
<div class="modal fade" id="ModalTambahFasilitasKamar" tabindex="-1" aria-labelledby="ModalTambahFasilitasKamarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" action="<?= base_url('admin/tambah_fasilitas_kamar') ?>" method="POST">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTambahKamarLabel">Tambah Fasilitas Kamar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Input -->
            <div class="modal-body">
                <div class="mb-3">
                    <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                    <select class="form-select" id="tipe_kamar" name="tipe_kamar" aria-label="Tipe kamar">
                        <?php foreach($kamar as $data) :?>
                            <option value="<?= $data['id'] ?>"><?= $data['nama_tipe_kamar'] ?></option>
                        <?php endforeach;?>
                    </select>   
                </div>
                <div class="mb-3">
                    <label for="fasilitas_kamar" class="form-label">Fasilitas Kamar</label>
                    <input type="text" class="form-control" id="fasilitas_kamar" name="fasilitas_kamar" aria-describedby="fasilitasKamarHelp">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Tambah Fasilitas Hotel -->
<div class="modal fade" id="ModalTambahFasilitasHotel" tabindex="-1" aria-labelledby="ModalTambahFasilitasHotelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" action="<?= base_url('admin/tambah_fasilitas_hotel') ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTambahKamarLabel">Tambah Fasilitas Hotel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Input -->
            <div class="modal-body">
                <div class="mb-3">
                    <label for="fasilitas_hotel" class="form-label">Fasilitas Hotel</label>
                    <input type="text" class="form-control" id="fasilitas_hotel" name="fasilitas_hotel" aria-describedby="fasilitasHotelHelp" required>
                </div>
                <div class="mb-3">
                    <label for="keterangan_fasilitas" class="form-label">Keterangan Fasilitas</label>
                    <input type="text" class="form-control" id="keterangan_fasilitas" name="keterangan_fasilitas" aria-describedby="keteranganFasilitasHelp" required>
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" aria-describedby="gambarHelp" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>


<!-- Modal Edit Kamar -->
<?php foreach($kamar as $data) :?>
    <div class="modal fade" id="ModalEditKamar<?= $data['id'] ?>" tabindex="-1" aria-labelledby="ModalEditKamar<?= $data['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" action="<?= base_url('admin/edit_kamar') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTambahKamarLabel">Edit Data <?= $data['nama_tipe_kamar'] ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Input -->
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['id'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                        <input type="text" class="form-control" id="tipe_kamar" name="tipe_kamar" aria-describedby="tipeKamarHelp" value="<?= $data['nama_tipe_kamar'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_kamar" class="form-label">Jumlah Kamar</label>
                        <input type="number" class="form-control" id="jumlah_kamar" name="jumlah_kamar" aria-describedby="jumlahKamarHelp" min="1" value="<?= $data['jumlah_kamar'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" aria-describedby="gambarHelp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
<?php endforeach;?>

<!-- Modal Edit Fasilitas Kamar -->
<?php foreach($fasilitas_kamar as $data) :?>
    <div class="modal fade" id="ModalEditFasilitasKamar<?= $data['id'] ?>" tabindex="-1" aria-labelledby="ModalEditFasilitasKamar<?= $data['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" action="<?= base_url('admin/edit_fasilitas_kamar') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTambahKamarLabel">Edit Data <?= $data['nama_tipe_kamar'] ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Input -->
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['id'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                        <select class="form-select" id="tipe_kamar" name="tipe_kamar" aria-label="Tipe kamar">
                            <?php foreach($kamar as $dataOption) :?>
                                <option value="<?= $dataOption['id'] ?>"><?= $dataOption['nama_tipe_kamar'] ?></option>
                            <?php endforeach;?>
                        </select>   
                    </div>
                    <div class="mb-3">
                        <label for="fasilitas_kamar" class="form-label">Fasilitas Kamar</label>
                        <input type="text" class="form-control" id="fasilitas_kamar" name="fasilitas_kamar" aria-describedby="fasilitasKamarHelp" value="<?= $data['fasilitas_kamar'] ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
<?php endforeach;?>

<!-- Modal Edit Fasilitas Hotel -->
<?php foreach($fasilitas_hotel as $data) :?>
    <div class="modal fade" id="ModalEditFasilitasHotel<?= $data['id'] ?>" tabindex="-1" aria-labelledby="ModalEditFasilitasHotel<?= $data['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" action="<?= base_url('admin/edit_fasilitas_hotel') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTambahKamarLabel">Edit Data Fasilitas <?= $data['fasilitas_hotel'] ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Input -->
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" id="id" name="id" aria-describedby="tipeKamarHelp" value="<?= $data['id'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="fasilitas_hotel" class="form-label">Fasilitas Hotel</label>
                        <input type="text" class="form-control" id="fasilitas_hotel" name="fasilitas_hotel" aria-describedby="fasilitasHotelHelp" value="<?= $data['fasilitas_hotel'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan_fasilitas" class="form-label">Keterangan Fasilitas</label>
                        <input type="text" class="form-control" id="keterangan_fasilitas" name="keterangan_fasilitas" aria-describedby="keteranganfasilitasHelp" value="<?= $data['desc_fasilitas_hotel'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" aria-describedby="gambarHelp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Edit Data</button>
                </div>
            </form>
        </div>
    </div>
<?php endforeach;?>



<!-- Modal Lihat Kamar -->
<?php foreach($kamar as $data) :?>
    <div class="modal fade" id="ModalLihatKamar<?= $data['id'] ?>" tabindex="-1" aria-labelledby="ModalLihatKamar<?= $data['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTambahKamarLabel">Lihat Data <?= $data['nama_tipe_kamar'] ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Input -->
                <div class="modal-body">
                    <div class="mb-3">
                        <img src="<?= base_url( 'assets/img/uploaded/' . $data['gambar_kamar']) ?>" class="img-fluid" loading="lazy">
                    </div>
                    <div class="mb-3">
                        <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                        <input type="text" class="form-control" id="tipe_kamar" name="tipe_kamar" aria-describedby="tipeKamarHelp" value="<?= $data['nama_tipe_kamar'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_kamar" class="form-label">Jumlah Kamar</label>
                        <input type="number" class="form-control" id="jumlah_kamar" name="jumlah_kamar" aria-describedby="jumlahKamarHelp" min="1" value="<?= $data['jumlah_kamar'] ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>

<!-- Modal Lihat Fasilitas Kamar -->
<?php foreach($fasilitas_kamar as $data) :?>
    <div class="modal fade" id="ModalLihatFasilitasKamar<?= $data['id'] ?>" tabindex="-1" aria-labelledby="ModalLihatFasilitasKamar<?= $data['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTambahKamarLabel">Lihat Data <?= $data['nama_tipe_kamar'] ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Input -->
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                        <input type="text" class="form-control" id="fasilitas_kamar" name="fasilitas_kamar" aria-describedby="fasilitasKamarHelp" value="<?= $data['nama_tipe_kamar'] ?>" readonly> 
                    </div>
                    <div class="mb-3">
                        <label for="fasilitas_kamar" class="form-label">Fasilitas Kamar</label>
                        <input type="text" class="form-control" id="fasilitas_kamar" name="fasilitas_kamar" aria-describedby="fasilitasKamarHelp" value="<?= $data['fasilitas_kamar'] ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>

<!-- Modal Lihat Fasilitas KaHotelmar -->
<?php foreach($fasilitas_hotel as $data) :?>
    <div class="modal fade" id="ModalLihatFasilitasHotel<?= $data['id'] ?>" tabindex="-1" aria-labelledby="ModalLihatFasilitasHotel<?= $data['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalTambahKamarLabel">Lihat Data Fasilitas <?= $data['fasilitas_hotel'] ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Input -->
                <div class="modal-body">
                    <div class="mb-3">
                        <img src="<?= base_url( 'assets/img/uploaded/' . $data['gambar_fasilitas_hotel']) ?>" class="img-fluid" loading="lazy">
                    </div>
                    <div class="mb-3">
                        <label for="fasilitas_hotel" class="form-label">Fasilitas Hotel</label>
                        <input type="text" class="form-control" id="fasilitas_hotel" name="fasilitas_hotel" aria-describedby="fasilitasHotelHelp" value="<?= $data['fasilitas_hotel'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan_fasilitas" class="form-label">Keterangan Fasilitas</label>
                        <input type="text" class="form-control" id="keterangan_fasilitas" name="keterangan_fasilitas" aria-describedby="keteranganfasilitasHelp" value="<?= $data['desc_fasilitas_hotel'] ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach;?>



