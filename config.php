<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "toko_baju";

// Menghubungkan ke database
$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>