<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/navbar.php'); ?>
<!-- Content -->
<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-header">
                <div class="d-none d-lg-block">
                    <div class="row">
                        <div class="col-6">
                            <h4>Data Absen Siswa</h4>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <div class="input-group">
                                    <select name="kelas" disabled class="form-control">
                                        <option value="x-mm">X Multimedia</option>
                                        <option value="xi-mm" selected>XI Multimedia</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                    </div>
                                    <a href="#" class="ml-2 btn btn-success"><i class="align-middle mr-2" data-feather="printer"></i>Print</a>
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
                                <select name="kelas" class="form-control">
                                    <option value="x-mm">X Multimedia</option>
                                    <option value="xI-mm">XI Multimedia</option>
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                                </div>
                                <a href="#" class="ml-2 btn btn-success btn-sm"><i class="align-middle" data-feather="printer"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="table-responsive m-4">
                <table class="table mb-0 table-hover " id="example1">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="data-siswa-detail.php" style="color:#495057">Andi Wijaya</a></td>
                            <td>X Keperawatan</td>
                            <td>
                                <span class="badge bg-success">Hadir</span>
                            </td>
                            <td>
                                <a href="#" class="tombol-edit btn btn-secondary btn-sm" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="data-siswa-detail.php" style="color:#495057">Arif Brata</a></td>
                            <td>XI Multimedia</td>
                            <td>
                                <span class="badge bg-warning">Izin</span>
                            </td>
                            <td>
                                <a href="#" class="tombol-edit btn btn-secondary btn-sm" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end Content -->
<!-- modal -->
<!-- BEGIN edit modal -->
<div class="modal fade bd-example-modal-sm" id="defaultModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-3">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="tanpaKeterangan" checked="">
                    <label class="form-check-label" for="tanpaKeterangan">Tanpa Keterangan</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="hadir" checked="">
                    <label class="form-check-label" for="hadir">Hadir</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="izin" checked="">
                    <label class="form-check-label" for="izin">Izin</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="sakit" checked="">
                    <label class="form-check-label" for="sakit">Sakit</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- END edit modal -->
<?php include('layouts/footer.php'); ?>