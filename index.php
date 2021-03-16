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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body class="bg-login">
    <main class="d-flex w-100 h-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <div class="text-center mb-3">
                                        <img src="assets/img/icons/absen-in.png" alt="Absen-In" class="img-fluid" width="150">
                                    </div>
                                    <form>
                                        <div class="mb-3 mt-5">
                                            <h1>Login</h1>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password">
                                        </div>
                                        <div class="text-center mt-3">
                                            <a href="admin" class="btn btn-lg btn-primary btn-block btn-pill">Sign in</a>
                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

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