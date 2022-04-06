
<div class="container py-5">
    <div class="card">
        <div class="card-body">
            <!-- Tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="kamar-tab" data-bs-toggle="tab" data-bs-target="#kamar" type="button" role="tab" aria-controls="kamar" aria-selected="true">Kamar</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="fasilitas-kamar-tab" data-bs-toggle="tab" data-bs-target="#fasilitas-kamar" type="button" role="tab" aria-controls="fasilitas-kamar" aria-selected="true">Fasilitas Kamar</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="fasilitas-hotel-tab" data-bs-toggle="tab" data-bs-target="#fasilitas-hotel" type="button" role="tab" aria-controls="fasilitas-hotel" aria-selected="false">Fasilitas Hotel</button>
                </li>
            </ul>
            <!-- Content -->
            <div class="tab-content" id="myTabContent">

                <!-- Content Kamar -->
                <div class="tab-pane fade show active mt-3" id="kamar" role="tabpanel" aria-labelledby="kamar-tab">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3 float-end" data-bs-toggle="modal" data-bs-target="#ModalTambahKamar">
                    Tambah Data
                    </button>
                    <!-- Table -->
                    <div class="table-responsive-md col-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="25%">Tipe Kamar</th>
                                    <th width="15%">Jumlah Kamar</th>
                                    <th width="25%">Gambar</th>
                                    <th width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($kamar as $data) :?>
                                    <tr>
                                        <td><?= $data['nama_tipe_kamar'] ?></td>
                                        <td><?= $data['jumlah_kamar'] ?></td>
                                        <td>
                                            <img src="<?= base_url( 'assets/img/' . $data['gambar_kamar']) ?>" class="img-fluid" loading="lazy">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-secondary btn-sm mb-1 mb-md-0" data-bs-toggle="modal" data-bs-target="#ModalLihatKamar<?= $data['id'] ?>">Lihat</button>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-1 mb-md-0" data-bs-toggle="modal" data-bs-target="#ModalEditKamar<?= $data['id'] ?>">Edit</button>
                                            <a href="<?= base_url( 'admin/hapus_kamar/' . $data['id']) ?>" onclick="return confirm('Hapus Data ?')" type="button" class="btn btn-outline-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>

                <!-- Content Fasilitas Kamar -->
                <div class="tab-pane fade mt-3" id="fasilitas-kamar" role="tabpanel" aria-labelledby="fasilitas-kamar-tab">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3 float-end" data-bs-toggle="modal" data-bs-target="#ModalTambahFasilitasKamar">
                    Tambah Data
                    </button>
                    <!-- Table -->
                    <div class="table-responsive- col-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="25%">Tipe Kamar</th>
                                    <th width="25%">Fasilitas</th>
                                    <th width="15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($fasilitas_kamar as $data) :?>
                                    <tr>
                                        <td><?= $data['nama_tipe_kamar'] ?></td>
                                        <td><?= $data['fasilitas_kamar'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-outline-secondary btn-sm mb-1 mb-md-0" data-bs-toggle="modal" data-bs-target="#ModalLihatFasilitasKamar<?= $data['id'] ?>">Lihat</button>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-1 mb-md-0" data-bs-toggle="modal" data-bs-target="#ModalEditFasilitasKamar<?= $data['id'] ?>">Edit</button>
                                            <a href="<?= base_url( 'admin/hapus_fasilitas_kamar/' . $data['id']) ?>" onclick="return confirm('Hapus Data ?')" type="button" class="btn btn-outline-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>

                <!-- Content Fasilitas Hotel -->
                <div class="tab-pane fade mt-3" id="fasilitas-hotel" role="tabpanel" aria-labelledby="fasilitas-hotel-tab">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3 float-end" data-bs-toggle="modal" data-bs-target="#ModalTambahFasilitasHotel">
                    Tambah Data
                    </button>
                    <!-- Table -->
                    <div class="table-responsive-md col-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="15%">Fasilitas</th>
                                    <th width="25%">Keterangan Fasilitas</th>
                                    <th width="20%">Gambar</th>
                                    <th width="15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($fasilitas_hotel as $data) :?>
                                    <tr>
                                        <td><?= $data['fasilitas_hotel'] ?></td>
                                        <td><?= $data['keterangan_fasilitas'] ?></td>
                                        <td>
                                            <img src="<?= base_url( 'assets/img/' . $data['gambar_fasilitas_hotel']) ?>" class="img-fluid" loading="lazy">
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-outline-secondary btn-sm mb-1 mb-md-0" data-bs-toggle="modal" data-bs-target="#ModalLihatFasilitasHotel<?= $data['id'] ?>">Lihat</button>
                                            <button type="button" class="btn btn-outline-primary btn-sm mb-1 mb-md-0" data-bs-toggle="modal" data-bs-target="#ModalEditFasilitasHotel<?= $data['id'] ?>">Edit</button>
                                            <a href="<?= base_url( 'admin/hapus_fasilitas_hotel/' . $data['id']) ?>" onclick="return confirm('Hapus Data ?')" type="button" class="btn btn-outline-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <!-- End Table -->
                </div>
            </div>
        </div>
    </div>
</div>