<?php
// Konfigurasi Database
$host = "localhost";
$user = "root";
$password = "";
$database = "ppdb_sekolah";

// Membuat koneksi
$koneksi = new mysqli($host, $user, $password, $database);

// Mengecek koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

// Mengatur charset UTF-8
$koneksi->set_charset("utf8mb4");

// Variabel untuk status
$status_siswa = array(
    'Belum Diverifikasi' => 'Belum Diverifikasi',
    'Diterima' => 'Diterima',
    'Ditolak' => 'Ditolak'
);

// Fungsi bantuan untuk escape input
function escape_input($koneksi, $data) {
    return $koneksi->real_escape_string(trim($data));
}

// Fungsi untuk redirect dengan pesan
function redirect_with_message($url, $message, $type = 'success') {
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $type;
    header("Location: " . $url);
    exit();
}
?>
