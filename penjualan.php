<?php
require_once 'config.php';

$total_penjualan = 5250000;
$total_transaksi = 45;

$data_penjualan = [
    [
        'no' => 1,
        'tanggal' => '10/11/2026',
        'pelanggan' => 'Siti Aisyah',
        'total' => 150000,
        'status' => 'Selesai'
    ],
    [
        'no' => 2,
        'tanggal' => '10/11/2026',
        'pelanggan' => 'Rina Putri',
        'total' => 120000,
        'status' => 'Selesai'
    ],
    [
        'no' => 3,
        'tanggal' => '09/11/2026',
        'pelanggan' => 'Andi Pratama',
        'total' => 100000,
        'status' => 'Proses'
    ]
];
?>

<div class="page-penjualan">

    <!-- RINGKASAN PENJUALAN -->
    <div class="section-heading">
        <h3>Data Penjualan</h3>

        <select class="filter-select">
            <option>Pilih Periode</option>
            <option>Hari Ini</option>
            <option>Minggu Ini</option>
            <option>Bulan Ini</option>
            <option>Tahun Ini</option>
        </select>
    </div>

    <div class="summary-cards">

        <div class="summary-card">
            <div class="card-icon">
                <i class="fa-solid fa-bag-shopping"></i>
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


    <!-- RIWAYAT PENJUALAN -->
    <div class="dashboard-box">

        <div class="box-header">
            <h3>Riwayat Penjualan</h3>

            <a href="#">Lihat Semua &raquo;</a>
        </div>

        <div class="table-responsive">

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pelanggan</th>
                        <th>Total Belanja</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($data_penjualan as $item): ?>

                    <tr>
                        <td><?= $item['no'] ?></td>

                        <td><?= $item['tanggal'] ?></td>

                        <td><?= e($item['pelanggan']) ?></td>

                        <td><?= rupiah($item['total']) ?></td>

                        <td>
                            <span class="status">
                                <?= e($item['status']) ?>
                            </span>
                        </td>
                    </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>

    </div>

</div>