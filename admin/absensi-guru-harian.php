<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/navbar.php'); ?>
<!-- Content -->
<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <h4>Data Absen Guru</h4>
                    </div>
                    <div class="col-6">
                        <div class="text-right d-none d-lg-block">
                            <a href="#" class="btn btn-success"><i class="align-middle mr-2" data-feather="printer"></i>Print</a>
                        </div>
                        <div class="text-right d-block d-lg-none">
                            <a href="#" class="btn btn-success btn-sm"><i class="align-middle" data-feather="printer"></i></a>
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
                            <th scope="col">NIP</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="data-guru-detail.php" style="color:#495057">Andi Wijaya</a></td>
                            <td>0979 8 69065</td>
                            <td>
                                <span class="badge bg-success">Hadir</span>
                            </td>
                            <td>
                                <a href="#" class="tombol-edit btn btn-secondary btn-sm" data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="data-guru-detail.php" style="color:#495057">Arif Brata</a></td>
                            <td>7987 9 86576</td>
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