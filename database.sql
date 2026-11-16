CREATE DATABASE IF NOT EXISTS toko_baju;

USE toko_baju;

-- TABEL PRODUK
CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100) NOT NULL,
    kategori VARCHAR(100),
    harga DECIMAL(12,2) NOT NULL,
    stok INT NOT NULL,
    gambar VARCHAR(255)
);

-- TABEL PENJUALAN
CREATE TABLE penjualan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tanggal DATETIME DEFAULT CURRENT_TIMESTAMP,
    nama_pelanggan VARCHAR(100),
    total_harga DECIMAL(12,2) NOT NULL,
    status VARCHAR(30) DEFAULT 'Selesai'
);

-- TABEL DETAIL PENJUALAN
CREATE TABLE detail_penjualan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    penjualan_id INT,
    produk_id INT,
    jumlah INT NOT NULL,
    harga DECIMAL(12,2) NOT NULL,

    FOREIGN KEY (penjualan_id)
    REFERENCES penjualan(id),

    FOREIGN KEY (produk_id)
    REFERENCES produk(id)
);

-- DATA PRODUK
INSERT INTO produk
(nama_produk, kategori, harga, stok)
VALUES
('Kaos Polos', 'Kaos', 50000, 25),
('Hoodie Polos', 'Jaket', 150000, 15),
('Kemeja Casual', 'Kemeja', 100000, 20),
('Celana Jeans', 'Celana', 175000, 10),
('Dress Wanita', 'Dress', 125000, 18);

-- DATA PENJUALAN
INSERT INTO penjualan
(nama_pelanggan, total_harga, status)
VALUES
('Siti Aisyah', 150000, 'Selesai'),
('Rina Putri', 120000, 'Selesai'),
('Andi Pratama', 100000, 'Proses');