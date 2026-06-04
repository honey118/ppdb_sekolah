<?php
session_start();
require_once 'koneksi.php';

// Cek login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $nisn = escape_input($koneksi, $_POST['nisn'] ?? '');
    $no_hp = escape_input($koneksi, $_POST['no_hp'] ?? '');
    $tempat_lahir = escape_input($koneksi, $_POST['tempat_lahir'] ?? '');
    $tanggal_lahir = escape_input($koneksi, $_POST['tanggal_lahir'] ?? '');
    $jenis_kelamin = escape_input($koneksi, $_POST['jenis_kelamin'] ?? '');
    $asal_sekolah = escape_input($koneksi, $_POST['asal_sekolah'] ?? '');
    $alamat = escape_input($koneksi, $_POST['alamat'] ?? '');

    // Validasi input
    if (empty($nisn) || empty($no_hp)) {
        $_SESSION['message'] = 'NISN dan Nomor HP wajib diisi!';
        $_SESSION['message_type'] = 'error';
        header("Location: formulir.php");
        exit();
    }

    // Update database
    $query = "UPDATE siswa SET 
              nisn = '$nisn',
              no_hp = '$no_hp',
              tempat_lahir = '$tempat_lahir',
              tanggal_lahir = '$tanggal_lahir',
              jenis_kelamin = '$jenis_kelamin',
              asal_sekolah = '$asal_sekolah',
              alamat = '$alamat'
              WHERE id_siswa = $user_id";

    if ($koneksi->query($query)) {
        $_SESSION['message'] = 'Data pendaftaran berhasil disimpan!';
        $_SESSION['message_type'] = 'success';
        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['message'] = 'Gagal menyimpan data: ' . $koneksi->error;
        $_SESSION['message_type'] = 'error';
        header("Location: formulir.php");
        exit();
    }
} else {
    header("Location: formulir.php");
    exit();
}
?>
