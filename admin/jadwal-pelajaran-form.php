<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/navbar.php'); ?>
<!-- Content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"><strong>Form Jadwal Pelajaran</strong></h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Tahun Pelajaran</label>
                        <input type="text" name="year" class="form-control" placeholder="Tahun Pelajaran">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jadwal Pelajaran (PDF)</label>
                        <input type="file" name="jadwal" class="form-control">
                    </div>
                    <a href="#" type="submit" class="btn btn-primary">Submit</a>
                    <a href="data-guru.php" class="btn btn-success">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end Content -->
<?php include('layouts/footer.php'); ?>