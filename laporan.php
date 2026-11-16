<?php
require_once 'config.php';

$total_pendapatan = 5250000;
$total_transaksi = 45;

$data_laporan = [
    [
        'no' => 1,
        'tanggal' => '10/11/2026',
        'transaksi' => 'TRX001',
        'produk' => 'Kaos Polos',
        'jumlah' => 3,
        'total' => 150000
    ],
    [
        'no' => 2,
        'tanggal' => '10/11/2026',
        'transaksi' => 'TRX002',
        'produk' => 'Hoodie Polos',
        'jumlah' => 1,
        'total' => 150000
    ],
    [
        'no' => 3,
        'tanggal' => '09/11/2026',
        'transaksi' => 'TRX003',
        'produk' => 'Kemeja Casual',
        'jumlah' => 2,
        'total' => 200000
    ]
];
?>

<div class="page-laporan">

    <div class="section-heading">
        <div>
            <h3>Laporan Penjualan</h3>
            <p>Ringkasan pendapatan dan transaksi toko.</p>
        </div>

        <button class="btn-primary"
                onclick="window.print()">
            <i class="fa-solid fa-print"></i>
            Cetak Laporan
        </button>
    </div>


    <!-- RINGKASAN LAPORAN -->

    <div class="summary-cards">

        <div class="summary-card">

            <div class="card-icon">
                <i class="fa-solid fa-money-bill-wave"></i>
            </div>

            <div>
                <small>Total Pendapatan</small>
                <h2><?= rupiah($total_pendapatan) ?></h2>
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


    <!-- FILTER LAPORAN -->

    <div class="dashboard-box">

        <div class="box-header">
            <h3>Filter Laporan</h3>
        </div>

        <div class="filter-area">

            <label>Tanggal Awal</label>
            <input type="date" id="tanggalAwal">

            <label>Tanggal Akhir</label>
            <input type="date" id="tanggalAkhir">

            <button class="btn-primary">
                Tampilkan
            </button>

        </div>

    </div>


    <!-- TABEL LAPORAN -->

    <div class="dashboard-box">

        <div class="box-header">
            <h3>Detail Laporan Penjualan</h3>
        </div>

        <div class="table-responsive">

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>ID Transaksi</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($data_laporan as $laporan): ?>

                    <tr>

                        <td><?= $laporan['no'] ?></td>

                        <td><?= $laporan['tanggal'] ?></td>

                        <td><?= $laporan['transaksi'] ?></td>

                        <td><?= e($laporan['produk']) ?></td>

                        <td><?= $laporan['jumlah'] ?></td>

                        <td><?= rupiah($laporan['total']) ?></td>

                    </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>