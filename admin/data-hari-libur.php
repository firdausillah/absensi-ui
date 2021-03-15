<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/navbar.php'); ?>
<!-- Content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-none d-lg-block">
                    <div class="row">
                        <div class="col-6">
                            <h4>Data Absen Siswa</h4>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <div class="input-group">
                                    <input type="month" value="<?= date('Y-m'); ?>" class="form-control" aria-label="Date" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                    </div>
                                    <a href="#" class="ml-2 btn btn-primary"><i class="align-middle mr-2" data-feather="plus-square"></i>Tambah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-block d-lg-none">
                    <div class="row">
                        <div class="text-center col-12">
                            <h4>Data Absen Siswa</h4>
                        </div>
                        <div class="text-center col-12">
                            <div class="input-group">
                                <input type="month" value="<?= date('Y-m'); ?>" class="form-control" aria-label="Date" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                </div>
                                <a href="#" class="ml-2 btn btn-primary btn-sm"><i class="align-middle" data-feather="plus-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive m-4">
                <table class="table mb-0 table-hover" id="example1">
                    <thead>
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>14 Maret 2021</td>
                            <td>Hari Raya Hindu</td>
                            <td>
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Aksi
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="data-jam-absen-guru-form.php"><i class="align-middle mr-2" data-feather="edit"></i> Edit</a>
                                    <a class="dropdown-item" onclick='Hapus()' href="#"><i class="align-middle mr-2" data-feather="delete"></i> Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>12 Maret 2021</td>
                            <td>Isra'mi'raj</td>
                            <td>
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Aksi
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="data-jam-absen-guru-form.php"><i class="align-middle mr-2" data-feather="edit"></i> Edit</a>
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