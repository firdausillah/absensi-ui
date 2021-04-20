<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/navbar.php'); ?>
<!-- Content -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title"><strong>Form Data User</strong></h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nama User</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama User">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Level</label>
                            <select class="form-control" name="level" id="level">
                                <option value="Admin">Admin</option>
                                <option value="Admin">Kepala Sekolah</option>
                                <option value="Guru">Guru</option>
                                <option value="Siswa">Siswa</option>
                            </select>
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
                    <a href="#" type="submit" class="btn btn-primary">Submit</a>
                    <a href="data-user.php" class="btn btn-success">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end Content -->
<?php include('layouts/footer.php'); ?>