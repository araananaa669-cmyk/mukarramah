<?php
session_start();

$halaman = $_GET['page'] ?? 'dashboard';

$daftar_halaman = [
    'dashboard',
    'penjualan',
    'produk',
    'laporan'
];

if (!in_array($halaman, $daftar_halaman)) {
    $halaman = 'dashboard';
}

function aktif($page, $halaman) {
    return $page === $halaman ? 'active' : '';
}

function e($nilai) {
    return htmlspecialchars((string)$nilai, ENT_QUOTES, 'UTF-8');
}

function rupiah($nilai) {
    return 'Rp ' . number_format($nilai, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manajemen Toko Baju</title>

    <link rel="stylesheet" href="assets/style.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

<div class="app">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            <div class="logo-icon">
                <i class="fa-solid fa-shirt"></i>
            </div>

            <div>
                <h3>TOKO<br>BAJU</h3>
                <small>Manajemen Toko</small>
            </div>
        </div>

        <nav>

            <a href="index.php?page=dashboard"
               class="<?= aktif('dashboard', $halaman) ?>">
                <i class="fa-solid fa-house"></i>
                <span>Dashboard</span>
            </a>

            <a href="index.php?page=penjualan"
               class="<?= aktif('penjualan', $halaman) ?>">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Penjualan</span>
            </a>

            <a href="index.php?page=produk"
               class="<?= aktif('produk', $halaman) ?>">
                <i class="fa-solid fa-shirt"></i>
                <span>Produk</span>
            </a>

            <a href="index.php?page=laporan"
               class="<?= aktif('laporan', $halaman) ?>">
                <i class="fa-solid fa-chart-column"></i>
                <span>Laporan</span>
            </a>

            <a href="logout.php">
    <i class="fa-solid fa-right-from-bracket"></i>
    <span>Logout</span>
</a>

        </nav>

    </aside>


    <!-- KONTEN UTAMA -->
    <main class="main-content">

        <header class="topbar">

            <div>
                <h2>
                    <?= ucfirst($halaman) ?>
                </h2>

                <p>
                    Selamat datang di Sistem Manajemen Toko Baju
                </p>
            </div>

            <div class="admin">
                <i class="fa-solid fa-user"></i>
                <span>Admin Administrator</span>
            </div>

        </header>


        <section class="content">

            <?php
            include $halaman . '.php';
            ?>

        </section>

        <footer>
            © 2026 Toko Baju | Sistem Informasi Manajemen
        </footer>

    </main>

</div>

<script src="assets/script.js"></script>

</body>
</html>