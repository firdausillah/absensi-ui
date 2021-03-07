<nav id="sidebar" class="sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand text-center" href="index.php">
            <span class="align-middle">Admin</span>
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
            <li class="sidebar-item <?= $title == 'data-guru.php' ? 'active' : '' ?>">
                <a class="sidebar-link" href="data-guru.php">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Data Guru</span>
                </a>
            </li>
            <li class="sidebar-item <?= $title == 'data-siswa.php' ? 'active' : '' ?>">
                <a class="sidebar-link" href="data-siswa.php">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Data Siswa</span>
                </a>
            </li>
    </div>
</nav>