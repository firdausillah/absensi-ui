<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/navbar.php'); ?>
<!-- Content -->
<main class="content">
    <div class="container-fluid p-0">

        <div class="row mb-2 mb-xl-3">
            <div class="col-auto d-none d-sm-block">
                <h3>Data Guru</h3>
            </div>

            <div class="col-auto ml-auto text-right mt-n1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                        <li class="breadcrumb-item active" aria-current="page">Data Guru</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-right">
                        <a href="#" class="btn btn-success"><i class="align-middle mr-2" data-feather="printer"></i>Print</a>
                        <a href="#" class="btn btn-success"><i class="align-middle mr-2" data-feather="plus-square"></i>Import</a>
                        <a href="data-guru-form.php" class="btn btn-primary"><i class="align-middle mr-2" data-feather="plus-square"></i>Tambah Data</a>
                        <a href="#" class="btn btn-danger" onclick='Hapus()'><i class="align-middle mr-2" data-feather="delete"></i>Hapus</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><input type="checkbox" name="checked[]" class="form-check-input"></th>
                                    <td>Andi Wijaya</td>
                                    <td><img src="../assets/img/avatars/avatar.jpg" height="70px" alt="../assets/img/avatars/avatar.jpg"></td>
                                    <td>andiwijaya</td>
                                    <td>Aktif</td>
                                    <td>
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Aksi
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="data-guru-detail.php"><i class="align-middle mr-2" data-feather="eye"></i> Detail</a>
                                            <a class="dropdown-item" href="data-guru-form.php"><i class="align-middle mr-2" data-feather="edit"></i> Edit</a>
                                            <a class="dropdown-item" onclick='Hapus()' href="#"><i class="align-middle mr-2" data-feather="delete"></i> Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th><input type="checkbox" name="checked[]" class="form-check-input"></th>
                                    <td>Arif Brata</td>
                                    <td><img src="../assets/img/avatars/avatar-2.jpg" height="70px" alt="../assets/img/avatars/avatar-2.jpg"></td>
                                    <td>arif123</td>
                                    <td>tidak aktif</td>
                                    <td>
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Aksi
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="data-guru-detail.php"><i class="align-middle mr-2" data-feather="eye"></i> Detail</a>
                                            <a class="dropdown-item" href="data-guru-form.php"><i class="align-middle mr-2" data-feather="edit"></i> Edit</a>
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
    </div>
</main>
<!-- end Content -->
<?php include('layouts/footer.php'); ?>