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
            <li class="sidebar-item <?= ($title == 'data-kelas.php' or $title == 'data-jam-absen-guru.php' or $title == 'jadwal-pelajaran-form.php' or $title == 'data-sekolah-form.php' or $title == 'data-hari-libur.php' or $title == 'data-jam-absen-guru.php' or $title == 'data-jam-absen-siswa.php') ? 'active' : '' ?>">
                <a data-target="#ui" data-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Master Data</span>
                </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse <?= ($title == 'data-kelas.php' or $title == 'data-jam-absen-guru.php' or $title == 'jadwal-pelajaran-form.php' or $title == 'data-sekolah-form.php' or $title == 'data-hari-libur.php' or $title == 'data-jam-absen-guru.php' or $title == 'data-jam-absen-siswa.php') ? 'show' : '' ?>" data-parent="#sidebar" style="">
                    <li class="sidebar-item <?= $title == 'data-kelas.php' ? 'active' : '' ?>"><a class="sidebar-link" href="data-kelas.php">Kelas</a></li>
                    <li class="sidebar-item <?= $title == 'data-jam-absen-guru.php' ? 'active' : '' ?>"><a class="sidebar-link" href="data-jam-absen-guru.php">Jam Absen Guru</a></li>
                    <li class="sidebar-item <?= $title == 'data-jam-absen-siswa.php' ? 'active' : '' ?>"><a class="sidebar-link" href="data-jam-absen-siswa.php">Jam Absen Siswa</a></li>
                    <li class="sidebar-item <?= $title == 'data-hari-libur.php' ? 'active' : '' ?>"><a class="sidebar-link" href="data-hari-libur.php">Daftar Hari Libur</a></li>
                    <li class="sidebar-item <?= $title == 'jadwal-pelajaran-form.php' ? 'active' : '' ?>"><a class="sidebar-link" href="jadwal-pelajaran-form.php">Jadwal Pelajaran</a></li>
                    <li class="sidebar-item <?= $title == 'data-sekolah-form.php' ? 'active' : '' ?>"><a class="sidebar-link" href="data-sekolah-form.php">Data Sekolah</a></li>
                </ul>
            </li>
            <li class="sidebar-item <?= $title == 'data-guru.php' ? 'active' : '' ?>">
                <a class="sidebar-link" href="data-guru.php">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Data Guru</span>
                </a>
            </li>
            <li class="sidebar-item <?= $title == 'data-siswa.php' ? 'active' : '' ?>">
                <a class="sidebar-link" href="data-siswa.php">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Data Siswa</span>
                </a>
            <li class="sidebar-item <?= $title == 'data-user.php' ? 'active' : '' ?>">
                <a class="sidebar-link" href="data-user.php">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Data User</span>
                </a>
            </li>

            <li class="sidebar-header">
                Absensi
            </li>

            <li class="sidebar-item <?= ($title == 'absensi-guru-harian.php' or $title == 'absensi-guru-bulanan.php') ? 'active' : '' ?>">
                <a data-target="#absen-guru" data-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                    <i class="align-middle" data-feather="user-check"></i> <span class="align-middle">Absensi Guru</span>
                </a>
                <ul id="absen-guru" class="sidebar-dropdown list-unstyled collapse <?= ($title == 'absensi-guru-harian.php' or $title == 'absensi-guru-bulanan.php') ? 'show' : '' ?>" data-parent="#sidebar" style="">
                    <li class="sidebar-item <?= $title == 'absensi-guru-harian.php' ? 'active' : '' ?>"><a class="sidebar-link" href="absensi-guru-harian.php">Absensi Hari Ini</a></li>
                    <li class="sidebar-item <?= $title == 'absensi-guru-bulanan.php' ? 'active' : '' ?>"><a class="sidebar-link" href="absensi-guru-bulanan.php">Absensi Bulanan</a></li>
                </ul>
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

        </ul>
    </div>
</nav>