<?php
require_once 'config.php';

$data_produk = [
    [
        'no' => 1,
        'gambar' => '👕',
        'nama' => 'Kaos Polos',
        'kategori' => 'Kaos',
        'harga' => 50000,
        'stok' => 25
    ],
    [
        'no' => 2,
        'gambar' => '🧥',
        'nama' => 'Hoodie Polos',
        'kategori' => 'Jaket',
        'harga' => 150000,
        'stok' => 15
    ],
    [
        'no' => 3,
        'gambar' => '👔',
        'nama' => 'Kemeja Casual',
        'kategori' => 'Kemeja',
        'harga' => 100000,
        'stok' => 20
    ],
    [
        'no' => 4,
        'gambar' => '👖',
        'nama' => 'Celana Jeans',
        'kategori' => 'Celana',
        'harga' => 175000,
        'stok' => 10
    ],
    [
        'no' => 5,
        'gambar' => '👗',
        'nama' => 'Dress Wanita',
        'kategori' => 'Dress',
        'harga' => 125000,
        'stok' => 18
    ]
];
?>

<div class="page-produk">

    <div class="section-heading">

        <div>
            <h3>Data Produk</h3>
            <p>Kelola semua produk toko baju.</p>
        </div>

        <button class="btn-primary" onclick="alert('Form tambah produk akan dibuat selanjutnya.')">
            + Tambah Produk
        </button>

    </div>


    <div class="summary-cards">

        <div class="summary-card">
            <div class="card-icon">
                <i class="fa-solid fa-shirt"></i>
            </div>

            <div>
                <small>Total Produk</small>
                <h2>120</h2>
            </div>
        </div>

        <div class="summary-card">
            <div class="card-icon">
                <i class="fa-solid fa-boxes-stacked"></i>
            </div>

            <div>
                <small>Total Stok</small>
                <h2>88</h2>
            </div>
        </div>

    </div>


    <div class="dashboard-box">

        <div class="box-header">
            <h3>Daftar Produk</h3>
        </div>

        <div class="table-responsive">

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($data_produk as $produk): ?>

                    <tr>

                        <td><?= $produk['no'] ?></td>

                        <td>
                            <span class="shirt-icon">
                                <?= $produk['gambar'] ?>
                            </span>
                        </td>

                        <td>
                            <?= e($produk['nama']) ?>
                        </td>

                        <td>
                            <?= e($produk['kategori']) ?>
                        </td>

                        <td>
                            <?= rupiah($produk['harga']) ?>
                        </td>

                        <td>
                            <?= $produk['stok'] ?>
                        </td>

                    </tr>

                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>