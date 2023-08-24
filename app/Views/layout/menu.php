<li class="menu-header">Main Menu</li>
<li><a href="<?= site_url() ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
</li>
<li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Master Data</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= site_url('siswa') ?>">Siswa</a></li>
        <li><a class="nav-link" href="<?= site_url() ?>">Guru</a></li>
        <li><a class="nav-link" href="<?= site_url() ?>">Jurusan</a></li>
        <li><a class="nav-link" href="<?= site_url() ?>">DUDI</a></li>
    </ul>
</li>
<li><a class="nav-link" href="<?= site_url() ?>"><i class="far fa-square"></i> <span>Keuangan</span></a></li>
</li>