<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PPDB SMKN 4 Palembang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-auth">
        <h2>PPDB SMKN 4</h2>
        <p>Login untuk melanjutkan pendaftaran</p>

        <?php
        session_start();
        if (isset($_SESSION['message'])) {
            $type = $_SESSION['message_type'] ?? 'info';
            echo '<div class="alert alert-' . $type . '">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        }
        ?>

        <form action="proses_login.php" method="POST">
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
                    placeholder="Masukkan password Anda" 
                    required>
            </div>

            <button type="submit" class="btn btn-submit">Login</button>
        </form>

        <div class="link-auth">
            <p>Belum punya akun? <a href="registrasi.php">Daftar sekarang</a></p>
            <p><a href="index.php">Kembali ke halaman utama</a></p>
        </div>
    </div>
</body>
</html>
