<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $nama; ?></span>
                        <img class="img-profile rounded-circle" src="<?php base_url();?> assets/img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('login/logout'); ?>">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Content Row -->
            <div class="row">
                <!-- Table Kamar -->
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <!-- Card Header -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Kamar</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <!-- Top -->
                            <div class="d-flex">
                                <!-- Search -->
                                <form class="d-inline-block form-inline mr-auto navbar-search" action="" method="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="search" aria-describedby="search" placeholder="Cari">
                                    </div>
                                </form>

                                <!-- Button Tambah Data -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahData" class="d-inline-block btn btn-sm btn-primary shadow-sm">
                                    <i class="fas fa-download fa-sm text-white-50"></i>Tambah Data
                                </button>

                                <!-- Modal Tambah Data -->
                                <form action="" method="" class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Input Item -->
                                                <div class="form-group">
                                                    <label for="input">Input</label>
                                                    <input type="text" class="form-control" id="input" aria-describedby="input" name="">
                                                </div>
                                                <!-- Input Item -->
                                                <div class="form-group">
                                                    <label for="input">Input</label>
                                                    <input type="text" class="form-control" id="input" aria-describedby="input" name="">
                                                </div>
                                                <!-- Input Item -->
                                                <div class="form-group">
                                                    <label for="input">Input</label>
                                                    <input type="text" class="form-control" id="input" aria-describedby="input" name="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                <button type="submit" name="" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Table -->
                            <div class="table-responsive mt-4">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Button</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-primary shadow-sm">Ubah</a>
                                                <a href="#" class="btn btn-sm btn-danger shadow-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-primary shadow-sm">Ubah</a>
                                                <a href="#" class="btn btn-sm btn-danger shadow-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->