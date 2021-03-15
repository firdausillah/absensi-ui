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

            <li class="sidebar-item <?= ($title == 'data-guru-absen.php') ? 'active' : '' ?>">
                <a class="sidebar-link" href="data-guru-absen.php">
                    <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Absen Guru</span>
                </a>
            </li>

            <li class="sidebar-item <?= ($title == 'absensi-siswa-harian.php' or $title == 'absensi-siswa-bulanan.php') ? 'active' : '' ?>">
                <a data-target="#absen-siswa" data-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Absensi Siswa</span>
                </a>
                <ul id="absen-siswa" class="sidebar-dropdown list-unstyled collapse <?= ($title == 'absensi-siswa-harian.php' or $title == 'absensi-siswa-bulanan.php') ? 'show' : '' ?>" data-parent="#sidebar" style="">
                    <li class="sidebar-item <?= $title == 'absensi-siswa-harian.php' ? 'active' : '' ?>"><a class="sidebar-link" href="absensi-siswa-harian.php">Absensi Hari Ini</a></li>
                    <li class="sidebar-item <?= $title == 'absensi-siswa-bulanan.php' ? 'active' : '' ?>"><a class="sidebar-link" href="absensi-siswa-bulanan.php">Absensi Bulanan</a></li>
                </ul>
            </li>

            <li class="sidebar-item <?= ($title == 'data-jadwal-pelajaran.php') ? 'active' : '' ?>">
                <a class="sidebar-link" href="data-jadwal-pelajaran.php">
                    <i class="align-middle" data-feather="file"></i> <span class="align-middle">Jadwal Pelajaran</span>
                </a>
            </li>


        </ul>
    </div>
</nav>