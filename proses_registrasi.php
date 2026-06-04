<?php
session_start();
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_lengkap = escape_input($koneksi, $_POST['nama_lengkap'] ?? '');
    $email = escape_input($koneksi, $_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Validasi input
    if (empty($nama_lengkap) || empty($email) || empty($password)) {
        $_SESSION['message'] = 'Semua field wajib diisi!';
        $_SESSION['message_type'] = 'error';
        header("Location: registrasi.php");
        exit();
    }

    // Validasi email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message'] = 'Format email tidak valid!';
        $_SESSION['message_type'] = 'error';
        header("Location: registrasi.php");
        exit();
    }

    // Validasi password match
    if ($password !== $confirm_password) {
        $_SESSION['message'] = 'Password dan konfirmasi password tidak sesuai!';
        $_SESSION['message_type'] = 'error';
        header("Location: registrasi.php");
        exit();
    }

    // Validasi password strength
    if (strlen($password) < 6) {
        $_SESSION['message'] = 'Password minimal harus 6 karakter!';
        $_SESSION['message_type'] = 'error';
        header("Location: registrasi.php");
        exit();
    }

    // Cek email sudah terdaftar
    $query_check_email = "SELECT id_siswa FROM siswa WHERE email = '$email'";
    $result_email = $koneksi->query($query_check_email);
    if ($result_email->num_rows > 0) {
        $_SESSION['message'] = 'Email sudah terdaftar!';
        $_SESSION['message_type'] = 'error';
        header("Location: registrasi.php");
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert ke database (hanya data akun dasar)
    $query = "INSERT INTO siswa (nama_lengkap, email, password, status) 
              VALUES ('$nama_lengkap', '$email', '$hashed_password', 'Belum Diverifikasi')";

    if ($koneksi->query($query)) {
        $user_id = $koneksi->insert_id;
        
        // Set session
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $nama_lengkap;

        $_SESSION['message'] = 'Registrasi berhasil! Silakan lengkapi data pendaftaran Anda di formulir berikutnya.';
        $_SESSION['message_type'] = 'success';
        header("Location: formulir.php");
        exit();
    } else {
        $_SESSION['message'] = 'Registrasi gagal: ' . $koneksi->error;
        $_SESSION['message_type'] = 'error';
        header("Location: registrasi.php");
        exit();
    }
} else {
    header("Location: registrasi.php");
    exit();
}
?>
