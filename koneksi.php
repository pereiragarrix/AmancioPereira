<?php
$host = "localhost";
$user = "root";
$password = ""; // Jika Anda menggunakan password, masukkan di sini
$dbname = "gym_management";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
