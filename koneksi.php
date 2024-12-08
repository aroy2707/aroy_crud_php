<?php
// Konfigurasi database
$host = "localhost"; // Host database
$user = "root";      // Username database (default XAMPP)
$password = "";      // Password database (default XAMPP tidak ada password)
$database = "ekampus"; // Nama database yang telah Anda buat

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil!";
?>