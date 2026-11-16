<?php
require_once 'config.php';

// Data dashboard
$total_produk = 120;
$total_penjualan = 5250000;
$total_transaksi = 45;
?>

<div class="page-dashboard">

    <!-- KARTU RINGKASAN -->
    <div class="summary-cards">

        <div class="summary-card">
            <div class="card-icon">
                <i class="fa-solid fa-shirt"></i>
            </div>

            <div>
                <small>Total Produk</small>
                <h2><?= $total_produk ?></h2>
            </div>
        </div>


        <div class="summary-card">
            <div class="card-icon">
                <i class="fa-solid fa-money-bill-wave"></i>
            </div>

            <div>
                <small>Total Penjualan</small>
                <h2><?= rupiah($total_penjualan) ?></h2>
            </div>
        </div>


        <div class="summary-card">
            <div class="card-icon">
                <i class="fa-solid fa-receipt"></i>
            </div>

            <div>
                <small>Total Transaksi</small>
                <h2><?= $total_transaksi ?></h2>
            </div>
        </div>

    </div>


    <!-- GRAFIK PENJUALAN -->
    <div class="dashboard-box">

        <div class="box-header">
            <h3>Grafik Penjualan</h3>
        </div>

        <div class="chart-container">
            <canvas id="grafikPenjualan"></canvas>
        </div>

    </div>


    <!-- PENJUALAN TERBARU -->
    <div class="dashboard-box">

        <div class="box-header">
            <h3>Penjualan Terbaru</h3>

            <a href="index.php?page=penjualan">
                Lihat Semua &raquo;
            </a>
        </div>

        <div class="product-list">

            <div class="product-item">
                <span class="shirt-icon">👕</span>
                <div>
                    <strong>Kaos Polos</strong>
                    <small>Rp 80.000</small>
                </div>
                <small>10/11/2026</small>
            </div>

            <div class="product-item">
                <span class="shirt-icon">👕</span>
                <div>
                    <strong>Hoodie Polos</strong>
                    <small>Rp 150.000</small>
                </div>
                <small>10/11/2026</small>
            </div>

            <div class="product-item">
                <span class="shirt-icon">👕</span>
                <div>
                    <strong>Kemeja Casual</strong>
                    <small>Rp 100.000</small>
                </div>
                <small>09/11/2026</small>
            </div>

        </div>

    </div>

</div>


<script>
const grafik = document.getElementById('grafikPenjualan');

new Chart(grafik, {
    type: 'line',

    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei'],

        datasets: [{
            label: 'Penjualan',
            data: [10, 15, 20, 18, 28],

            borderColor: '#222',
            backgroundColor: '#222',
            borderWidth: 2,

            tension: 0.3
        }]
    },

    options: {
        responsive: true,
        maintainAspectRatio: false,

        plugins: {
            legend: {
                display: true
            }
        },

        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>