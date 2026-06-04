<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .data-container {
            max-width: 700px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .data-section {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
        }

        .data-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .data-item:last-child {
            border-bottom: none;
        }

        .data-label {
            font-weight: 600;
            color: var(--text-secondary);
            font-size: 14px;
        }

        .data-value {
            color: white;
            font-size: 15px;
        }

        .button-group {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .button-group a {
            flex: 1;
            padding: 12px;
            text-align: center;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-edit {
            background: linear-gradient(135deg, #3b82f6, #60a5fa);
            color: white;
        }

        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(96, 165, 250, 0.4);
        }

        .btn-back {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }

        .btn-back:hover {
            background: rgba(255, 255, 255, 0.25);
        }
    </style>
</head>
<body>
    <?php
    session_start();
    require_once 'koneksi.php';

    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM siswa WHERE id_siswa = $user_id";
    $result = $koneksi->query($query);
    $user_data = $result->fetch_assoc();
    ?>

    <div class="data-container">
        <div class="data-section">
            <h2>Data Pendaftaran Anda</h2>
            
            <div class="data-item">
                <span class="data-label">Nama Lengkap</span>
                <span class="data-value"><?php echo htmlspecialchars($user_data['nama_lengkap']); ?></span>
            </div>

            <div class="data-item">
                <span class="data-label">NISN</span>
                <span class="data-value"><?php echo htmlspecialchars($user_data['nisn']); ?></span>
            </div>

            <div class="data-item">
                <span class="data-label">Email</span>
                <span class="data-value"><?php echo htmlspecialchars($user_data['email']); ?></span>
            </div>

            <div class="data-item">
                <span class="data-label">No HP</span>
                <span class="data-value"><?php echo htmlspecialchars($user_data['no_hp']); ?></span>
            </div>

            <div class="data-item">
                <span class="data-label">Tempat Lahir</span>
                <span class="data-value"><?php echo htmlspecialchars($user_data['tempat_lahir'] ?? '-'); ?></span>
            </div>

            <div class="data-item">
                <span class="data-label">Tanggal Lahir</span>
                <span class="data-value"><?php echo !empty($user_data['tanggal_lahir']) ? date('d/m/Y', strtotime($user_data['tanggal_lahir'])) : '-'; ?></span>
            </div>

            <div class="data-item">
                <span class="data-label">Jenis Kelamin</span>
                <span class="data-value"><?php echo $user_data['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'; ?></span>
            </div>

            <div class="data-item">
                <span class="data-label">Asal Sekolah</span>
                <span class="data-value"><?php echo htmlspecialchars($user_data['asal_sekolah'] ?? '-'); ?></span>
            </div>

            <div class="data-item">
                <span class="data-label">Alamat</span>
                <span class="data-value"><?php echo htmlspecialchars($user_data['alamat'] ?? '-'); ?></span>
            </div>

            <div class="data-item">
                <span class="data-label">Status</span>
                <span class="data-value"><?php echo htmlspecialchars($user_data['status']); ?></span>
            </div>

            <div class="button-group">
                <a href="formulir.php" class="btn-edit">Edit Data</a>
                <a href="dashboard.php" class="btn-back">Kembali</a>
            </div>
        </div>
    </div>
</body>
</html>
