<?php
session_start();
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = escape_input($koneksi, $_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $_SESSION['message'] = 'Email dan password harus diisi!';
        $_SESSION['message_type'] = 'error';
        header("Location: login.php");
        exit();
    }

    // Cari user berdasarkan email
    $query = "SELECT * FROM siswa WHERE email = '$email'";
    $result = $koneksi->query($query);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        
        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id_siswa'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_name'] = $row['nama_lengkap'];
            
            $_SESSION['message'] = 'Login berhasil! Selamat datang ' . $row['nama_lengkap'];
            $_SESSION['message_type'] = 'success';
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['message'] = 'Password salah!';
            $_SESSION['message_type'] = 'error';
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['message'] = 'Email tidak ditemukan!';
        $_SESSION['message_type'] = 'error';
        header("Location: login.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
