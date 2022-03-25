<!-- Modal Tambah Kamar -->
<div class="modal fade" id="ModalTambahKamar" tabindex="-1" aria-labelledby="ModalTambahKamarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" action="" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTambahKamarLabel">Tambah Kamar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Input -->
            <div class="modal-body">
                <div class="mb-3">
                    <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                    <input type="text" class="form-control" id="tipe_kamar" name="tipe_kamar" aria-describedby="tipeKamarHelp">
                </div>
                <div class="mb-3">
                    <label for="jumlah_kamar" class="form-label">Jumlah Kamar</label>
                    <input type="number" class="form-control" id="jumlah_kamar" name="jumlah_kamar" aria-describedby="jumlahKamarHelp">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" aria-describedby="gambarHelp">
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
        <form class="modal-content" action="" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTambahKamarLabel">Tambah Fasilitas Kamar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Input -->
            <div class="modal-body">
                <div class="mb-3">
                    <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                    <input type="text" class="form-control" id="tipe_kamar" name="tipe_kamar" aria-describedby="tipeKamarHelp">
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
        <form class="modal-content" action="" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTambahKamarLabel">Tambah Fasilitas Hotel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Input -->
            <div class="modal-body">
                <div class="mb-3">
                    <label for="fasilitas_hotel" class="form-label">Fasilitas Hotel</label>
                    <input type="text" class="form-control" id="fasilitas_hotel" name="fasilitas_hotel" aria-describedby="fasilitasHotelHelp">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" aria-describedby="gambarHelp">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>