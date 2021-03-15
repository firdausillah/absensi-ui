<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="shortcut icon" href="../assets/img/icons/logo-absenin-sm.png" />
    <?php $get_title = explode('/', $_SERVER['REQUEST_URI']);
    $title = $get_title[3]; ?>
    <title>Admin | <?= ($title == '' or $title == 'index.php') ? 'Dashboard' : $title ?></title>

    <link href="../assets/datatables/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../assets/css/app.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div class="wrapper">