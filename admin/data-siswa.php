<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/navbar.php'); ?>
<!-- Content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-4">
                        <h4>Data Siswa</h4>
                    </div>
                    <div class="col-8">
                        <div class="text-right d-none d-lg-block">
                            <a href="#" class="btn btn-success"><i class="align-middle mr-2" data-feather="printer"></i>Print</a>
                            <a href="#" class="btn btn-success"><i class="align-middle mr-2" data-feather="upload"></i>Import</a>
                            <a href="data-siswa-form.php" class="btn btn-primary"><i class="align-middle mr-2" data-feather="plus-square"></i>Tambah Data</a>
                            <a href="#" class="btn btn-danger" onclick='Hapus()'><i class="align-middle mr-2" data-feather="delete"></i>Hapus</a>
                        </div>
                        <div class="text-right d-block d-lg-none">
                            <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="printer"></i></a>
                            <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="upload"></i></a>
                            <a href="data-siswa-form.php" class="btn btn-primary btn-sm"><i class="align-middle" data-feather="plus-square"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" onclick='Hapus()'><i class="align-middle" data-feather="delete"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive m-4">
                <table class="table mb-0" id="example1">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Username</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><input type="checkbox" name="checked[]" class="form-check-input"></th>
                            <td><a href="data-siswa-detail.php" style="color:#495057">Lina Ambarwati</a></td>
                            <td><img src="../assets/img/avatars/avatar-4.jpg" height="70px" alt="../assets/img/avatars/avatar.jpg"></td>
                            <td>X Multimedia</td>
                            <td>ambarwati09</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Aksi
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="data-siswa-detail.php"><i class="align-middle mr-2" data-feather="eye"></i> Detail</a>
                                    <a class="dropdown-item" href="data-siswa-form.php"><i class="align-middle mr-2" data-feather="edit"></i> Edit</a>
                                    <a class="dropdown-item" onclick='Hapus()' href="#"><i class="align-middle mr-2" data-feather="delete"></i> Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th><input type="checkbox" name="checked[]" class="form-check-input"></th>
                            <td><a href="data-siswa-detail.php" style="color:#495057">Leny Wati</a></td>
                            <td><img src="../assets/img/avatars/avatar-3.jpg" height="70px" alt="../assets/img/avatars/avatar-2.jpg"></td>
                            <td>XI Keperawatan</td>
                            <td>leny12</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked>
                                </div>
                            </td>
                            <td>
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Aksi
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="data-siswa-detail.php"><i class="align-middle mr-2" data-feather="eye"></i> Detail</a>
                                    <a class="dropdown-item" href="data-siswa-form.php"><i class="align-middle mr-2" data-feather="edit"></i> Edit</a>
                                    <a class="dropdown-item" href="#"><i class="align-middle mr-2" data-feather="delete"></i> Hapus</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- end Content -->
<?php include('layouts/footer.php'); ?>