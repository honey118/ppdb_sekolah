<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi PPDB SMKN 4 Palembang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-auth">
        <h2>Registrasi PPDB</h2>
        <p>Buat akun untuk memulai pendaftaran</p>

        <?php
        session_start();
        if (isset($_SESSION['message'])) {
            $type = $_SESSION['message_type'] ?? 'info';
            echo '<div class="alert alert-' . $type . '">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        }
        ?>

        <form action="proses_registrasi.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input 
                    type="text" 
                    id="nama"
                    name="nama_lengkap" 
                    placeholder="Masukkan nama lengkap" 
                    required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input 
                    type="email" 
                    id="email"
                    name="email" 
                    placeholder="Masukkan email Anda" 
                    required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input 
                    type="password" 
                    id="password"
                    name="password" 
                    placeholder="Buat password yang kuat" 
                    required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Konfirmasi Password</label>
                <input 
                    type="password" 
                    id="confirm_password"
                    name="confirm_password" 
                    placeholder="Konfirmasi password Anda" 
                    required>
            </div>

            <button type="submit" class="btn btn-submit">Daftar</button>
        </form>

        <div class="link-auth">
            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
            <p><a href="index.php">Kembali ke halaman utama</a></p>
        </div>
    </div>
</body>
</html>
