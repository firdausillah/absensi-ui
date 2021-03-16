<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/navbar.php'); ?>
<!-- Content -->
<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"><strong>Form Absen Siswa</strong></h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="inputStatu">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="Hadir" disabled>Hadir</option>
                            <option value="Izin">Izin</option>
                            <option value="Sakit">Sakit</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="inputKeterangan">Keterangan</label>
                        <textarea class="form-control" name="keterangan" placeholder="Keterangan Ketidakhadiran" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="inputKeterangan">Tanggal</label>
                        <input type="date" name="tanggl" value="<?php echo date('Y-m-d'); ?>" disabled class="form-control" id="inputAlamat">
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