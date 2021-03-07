<?php include('layouts/header.php'); ?>
<?php include('layouts/sidebar.php'); ?>
<?php include('layouts/navbar.php'); ?>
<!-- Content -->
<div class="row">
    <div class="col-md-4 col-xl-3">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title mb-0">Profile</h5>
            </div>
            <div class="card-body text-center">
                <img src="../assets/img/avatars/avatar-4.jpg" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128">
                <h5 class="card-title mb-0">Christina Mason</h5>
                <div class="text-muted mb-0">X Multimedia</div>
            </div>
            <hr class="my-0">
            <div class="card-body">
                <h5 class="h6 card-title">About</h5>
                <ul class="list-unstyled mb-0">
                    <li class="mb-1">
                        <span><i class="fas fa-phone"></i> Telfon <a href="#">085212125044</a></span>
                    </li>
                    <li class="mb-1">
                        <span><i class="fas fa-home"></i> Alamat <a href="#">senepolor, rt 04 rw o5, barurejo, siliragung, banyuwangi</a></span>
                    </li>
                    <li class="mb-1">
                        <span><i class="fas fa-birthday-cake"></i> Tanggal Lahir <a href="#">21-Februari-2002</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-8 col-xl-9">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Aktivitas Absen Kelas</h5>
            </div>
            <div class="card-body h-100">

                <div class="d-flex align-items-start">
                    <img src="../assets/img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2 mr-2" alt="Christina Mason">
                    <div class="flex-grow-1">
                        <strong>Christina Mason</strong> membuat Absen untuk <strong>Kelas x Multimedia</strong> pada mata pelajaran <strong>Bahasa Indonesia</strong><br>
                        <small class="float-end text-navy">5 menit lalu</small>
                    </div>
                </div>

                <hr>
                <div class="d-flex align-items-start">
                    <img src="../assets/img/avatars/avatar-4.jpg" width="36" height="36" class="rounded-circle me-2 mr-2" alt="Vanesa Cristin">
                    <div class="flex-grow-1">
                        <strong>Vanesa Cristin X MM</strong> telah absen pada mata pelajaran <strong>Bahasa Indonesia</strong> pada <strong>Senin, 06 Maret 2021 jam 11.00</strong><br>
                        <small class="float-end text-navy">5 menit lalu</small>
                    </div>
                </div>

                <hr>
                <div class="d-grid">
                    <a href="#" class="btn btn-primary">Load more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Content -->
<?php include('layouts/footer.php'); ?>