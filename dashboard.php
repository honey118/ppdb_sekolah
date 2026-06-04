<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard PPDB SMKN 4 Palembang</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .dashboard-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .welcome-section {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 25px;
            padding: 40px;
            margin-bottom: 30px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
        }

        .welcome-section h1 {
            font-size: 32px;
            margin-bottom: 10px;
            text-align: left;
        }

        .user-info {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 15px;
            margin-top: 20px;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .user-info p {
            text-align: left;
            margin: 8px 0;
            font-size: 15px;
        }

        .status-badge {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            margin-top: 10px;
        }

        .status-pending {
            background: rgba(251, 146, 60, 0.2);
            color: #fed7aa;
            border: 1px solid rgba(251, 146, 60, 0.4);
        }

        .status-accepted {
            background: rgba(34, 197, 94, 0.2);
            color: #86efac;
            border: 1px solid rgba(34, 197, 94, 0.4);
        }

        .status-rejected {
            background: rgba(239, 68, 68, 0.2);
            color: #fee2e2;
            border: 1px solid rgba(239, 68, 68, 0.4);
        }

        .actions-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 30px;
        }

        .action-card {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
        }

        .action-card:hover {
            transform: translateY(-5px);
            border-color: #60a5fa;
            box-shadow: 0 12px 40px rgba(96, 165, 250, 0.3);
        }

        .action-card h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .action-card p {
            font-size: 13px;
            color: #dbeafe;
            margin-bottom: 15px;
        }

        .action-card a {
            display: inline-block;
            padding: 10px 20px;
            background: linear-gradient(135deg, #3b82f6, #60a5fa);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .action-card a:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(96, 165, 250, 0.4);
        }

        .logout-btn {
            background: rgba(255, 255, 255, 0.15) !important;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .logout-btn:hover {
            background: rgba(255, 255, 255, 0.25) !important;
        }

        @media (max-width: 600px) {
            .actions-grid {
                grid-template-columns: 1fr;
            }

            .welcome-section h1 {
                font-size: 24px;
            }

            .dashboard-container {
                margin: 20px auto;
            }
        }
    </style>
</head>
<body>
    <?php
    session_start();
    require_once 'koneksi.php';

    // Cek login
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM siswa WHERE id_siswa = $user_id";
    $result = $koneksi->query($query);
    $user_data = $result->fetch_assoc();

    if (isset($_SESSION['message'])) {
        $type = $_SESSION['message_type'] ?? 'info';
        echo '<div style="position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 1000;" class="alert alert-' . $type . '">' . $_SESSION['message'] . '</div>';
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    }
    ?>

    <div class="dashboard-container">
        <div class="welcome-section">
            <h1>Selamat datang, <?php echo htmlspecialchars($user_data['nama_lengkap']); ?>!</h1>
            
            <div class="user-info">
                <p><strong>Email:</strong> <?php echo htmlspecialchars($user_data['email']); ?></p>
                <p><strong>NISN:</strong> <?php echo htmlspecialchars($user_data['nisn']); ?></p>
                <p><strong>No HP:</strong> <?php echo htmlspecialchars($user_data['no_hp']); ?></p>
                <p><strong>Status Pendaftaran:</strong>
                    <?php
                    $status_class = 'status-pending';
                    if ($user_data['status'] == 'Diterima') {
                        $status_class = 'status-accepted';
                    } elseif ($user_data['status'] == 'Ditolak') {
                        $status_class = 'status-rejected';
                    }
                    ?>
                    <span class="status-badge <?php echo $status_class; ?>">
                        <?php echo htmlspecialchars($user_data['status']); ?>
                    </span>
                </p>
                <p><strong>Tanggal Daftar:</strong> <?php echo date('d/m/Y H:i', strtotime($user_data['tanggal_daftar'])); ?></p>
            </div>
        </div>

        <div class="actions-grid">
            <div class="action-card">
                <h3>Isi Formulir</h3>
                <p>Lengkapi data diri Anda untuk melanjutkan pendaftaran</p>
                <a href="formulir.php">Buka Formulir</a>
            </div>

            <div class="action-card">
                <h3>Lihat Data</h3>
                <p>Lihat data pendaftaran Anda yang telah disimpan</p>
                <a href="lihat_data.php">Lihat Data</a>
            </div>

            <div class="action-card">
                <h3>Bantuan</h3>
                <p>Hubungi kami jika ada pertanyaan atau kendala</p>
                <a href="index.php#kontak">Hubungi Kami</a>
            </div>

            <div class="action-card">
                <h3>Keluar</h3>
                <p>Logout dari akun Anda</p>
                <a href="proses_logout.php" class="logout-btn">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
