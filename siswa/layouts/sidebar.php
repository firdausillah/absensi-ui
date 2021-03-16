<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand text-center" href="index.php">
            <span class="align-middle"> <img src="../assets/img/icons/logo-absenin-sm-white.png" class="mr-1" height="20px" alt="Logo"> Absen-In</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Menu
            </li>

            <li class="sidebar-item <?= ($title == '' or $title == 'index.php') ? 'active' : '' ?>">
                <a class="sidebar-link" href="index.php">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item <?= ($title == 'data-siswa-absen.php') ? 'active' : '' ?>">
                <a class="sidebar-link" href="data-siswa-absen.php">
                    <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Absen Siswa</span>
                </a>
            </li>

            <li class="sidebar-item <?= ($title == 'data-jadwal-pelajaran.php') ? 'active' : '' ?>">
                <a class="sidebar-link" href="data-jadwal-pelajaran.php">
                    <i class="align-middle" data-feather="file"></i> <span class="align-middle">Jadwal Pelajaran</span>
                </a>
            </li>


        </ul>
    </div>
</nav>