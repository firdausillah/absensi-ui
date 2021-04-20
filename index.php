<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="shortcut icon" href="assets/img/icons/logo-absenin-sm.png" />
    <title>Absen-In | Login</title>

    <link href="assets/datatables/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/util.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body class="bg-login">
    <div class="limiter">
        <div class="container-login100">
            <div class="animated flipInX wrap-login100" style="padding-top:30px">
                <div id="formlogin" action="ceklogin.php" class="login100-form validate-form">
                    <span class="animated infinite pulse delay-5s login100-form-title p-b-26 ">
                        <img src="assets/img/icons/absen-in.png" style="max-height:80px" class="img-responsive" alt="Responsive image">
                    </span>
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-center active" id="form-siswa-tab" data-toggle="tab" href="#form-siswa" role="tab" aria-controls="form-siswa" aria-selected="true">
                                <img class="mb-2" src="assets/img/icons/siswa.png" height="70" alt="siswa">
                                <h5>SISWA</h5>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-center" id="form-guru-tab" data-toggle="tab" href="#form-guru" role="tab" aria-controls="form-guru" aria-selected="false">
                                <img class="mb-2" src="assets/img/icons/guru.png" height="70" alt="guru">
                                <h5>GURU</h5>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="form-siswa" role="tabpanel" aria-labelledby="form-siswa-tab">
                            <form action="">
                                <div class="wrap-input100 validate-input" data-validate="Enter Username" required="">
                                    <input class="input100" type="text" name="username" autocomplete="off">
                                    <span class="focus-input100" data-placeholder="Username"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <span class="btn-show-pass">
                                        <i class="zmdi zmdi-eye"></i>
                                    </span>
                                    <input class="input100" type="password" name="password">
                                    <span class="focus-input100" data-placeholder="Password"></span>
                                </div>

                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button class="login100-form-btn">
                                            Login
                                        </button>
                                    </div>
                                    <p><small>Support By X-Candy CBT v2.9.2 r1</small></p>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="form-guru" role="tabpanel" aria-labelledby="form-guru-tab">
                            <form id="form-guru" action="">
                                <div class="wrap-input100 validate-input" data-validate="Enter Username" required="">
                                    <input class="input100" type="text" name="username" autocomplete="off">
                                    <span class="focus-input100" data-placeholder="Username"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <span class="btn-show-pass">
                                        <i class="zmdi zmdi-eye"></i>
                                    </span>
                                    <input class="input100" type="password" name="password">
                                    <span class="focus-input100" data-placeholder="Password"></span>
                                </div>

                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button class="login100-form-btn">
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script>
        function Hapus() {
            Swal.fire({
                text: 'Apakah anda yakin akan menghapus data ini?',
                icon: 'error',
                confirmButtonText: 'Hapus'
            })
        }
    </script>
</body>

</html>