<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulir Pendaftaran</h2>
        <p>Silakan isi data diri Anda dengan lengkap</p>

        <?php
        session_start();
        require_once 'koneksi.php';

        // Cek login
        if (!isset($_SESSION['user_id'])) {
            header("Location: login.php");
            exit();
        }

        // Ambil data user jika sudah ada
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM siswa WHERE id_siswa = $user_id";
        $result = $koneksi->query($query);
        $user_data = $result->fetch_assoc();

        if (isset($_SESSION['message'])) {
            $type = $_SESSION['message_type'] ?? 'info';
            echo '<div class="alert alert-' . $type . '">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        }
        ?>

        <form action="proses_form_pendaftaran.php" method="POST">
            <div class="form-group">
                <label for="nisn">NISN <span class="text-required">*</span></label>
                <input 
                    type="text" 
                    id="nisn"
                    name="nisn" 
                    placeholder="Nomor Induk Siswa Nasional" 
                    value="<?php echo isset($user_data['nisn']) ? $user_data['nisn'] : ''; ?>"
                    required>
            </div>

            <div class="form-group">
                <label for="no_hp">Nomor HP <span class="text-required">*</span></label>
                <input 
                    type="tel" 
                    id="no_hp"
                    name="no_hp" 
                    placeholder="Masukkan nomor HP" 
                    value="<?php echo isset($user_data['no_hp']) ? $user_data['no_hp'] : ''; ?>"
                    required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input 
                        type="text" 
                        id="tempat_lahir"
                        name="tempat_lahir" 
                        placeholder="Masukkan tempat lahir"
                        value="<?php echo isset($user_data['tempat_lahir']) ? $user_data['tempat_lahir'] : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input 
                        type="date" 
                        id="tanggal_lahir"
                        name="tanggal_lahir"
                        value="<?php echo isset($user_data['tanggal_lahir']) ? $user_data['tanggal_lahir'] : ''; ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="L" <?php echo (isset($user_data['jenis_kelamin']) && $user_data['jenis_kelamin'] == 'L') ? 'selected' : ''; ?>>Laki-laki</option>
                        <option value="P" <?php echo (isset($user_data['jenis_kelamin']) && $user_data['jenis_kelamin'] == 'P') ? 'selected' : ''; ?>>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input 
                        type="text" 
                        id="asal_sekolah"
                        name="asal_sekolah" 
                        placeholder="Masukkan nama sekolah asal"
                        value="<?php echo isset($user_data['asal_sekolah']) ? $user_data['asal_sekolah'] : ''; ?>">
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input 
                    type="email" 
                    id="email"
                    name="email" 
                    placeholder="Masukkan email Anda" 
                    value="<?php echo isset($user_data['email']) ? $user_data['email'] : ''; ?>"
                    disabled>
                <small class="text-secondary">Email tidak dapat diubah</small>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat Lengkap</label>
                <textarea 
                    id="alamat"
                    name="alamat" 
                    placeholder="Masukkan alamat lengkap"><?php echo isset($user_data['alamat']) ? $user_data['alamat'] : ''; ?></textarea>
            </div>

            <div class="form-group">
                <small class="text-secondary">
                    <span class="text-required">*</span> Wajib diisi
                </small>
            </div>

            <button type="submit" class="btn btn-submit">Simpan Data</button>
        </form>

        <div class="link-auth">
            <p><a href="dashboard.php">Kembali ke dashboard</a></p>
            <p><a href="proses_logout.php">Logout</a></p>
        </div>
    </div>
</body>
</html>
