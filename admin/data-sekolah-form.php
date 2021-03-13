<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/navbar.php'); ?>
<!-- Content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"><strong>Form Data Sekolah</strong></h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputName4">Nama Sekolah</label>
                            <input type="text" name="name" class="form-control" id="inputName4" placeholder="Nama Sekolah">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputNomorInduk4">Nomor Induk</label>
                            <input type="text" name="induk" class="form-control" id="inputNomorInduk4" placeholder="Nomor Induk">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputKepalaSekolah">Kepala Sekolah</label>
                            <input type="text" name="headmaster" class="form-control" id="inputKepalaSekolah" placeholder="Kepala Sekolah">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputNIP">NIP Kepala Sekolah</label>
                            <input type="text" name="nip" class="form-control" id="inputNIP" placeholder="NIP Kepala Sekolah">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="inputAlamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Alamat Lengkap">
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputLogo">Logo</label>
                            <input type="file" name="logo" class="form-control" id="inputLogo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nomor Telfon</label>
                            <input type="text" name="telfon" class="form-control" placeholder="Nomor Telfon">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">E-Mail</label>
                            <input type="text" name="email" class="form-control" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Website</label>
                        <input type="text" name="website" class="form-control" placeholder="Website">
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