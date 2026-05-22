<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "ppdb_sekolah";

// Mengubah ke mysqli agar cocok dengan mysqli_query
$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>