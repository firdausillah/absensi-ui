<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/navbar.php'); ?>
<!-- Content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputName4">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" id="inputName4" placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputTelfon4">Nomor Telfon</label>
                            <input type="text" name="telfon" class="form-control" id="inputTelfon4" placeholder="Nomor Telfon">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputUsername">Username</label>
                            <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputPassword4">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="inputKelas4">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="inputKelas4" placeholder="Kelas">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="inputprogli4">Program Keahlian</label>
                            <input type="text" name="progli" class="form-control" id="inputprogli4" placeholder="Program Keahlian">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="inputTglLahir4">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" id="inputTglLahir4" placeholder="Tanggal Lahir">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="inputAlamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Alamat Lengkap">
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputGambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="inputGambar">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputGambar">Status</label>
                            <select class="form-control" name="status" id="">
                                <option value="aktif">Aktif</option>
                                <option value="nonaktif">Nonaktif</option>
                            </select>
                        </div>
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