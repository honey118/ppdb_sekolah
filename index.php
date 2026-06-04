<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMKN 4 Palembang - Penerimaan Peserta Didik Baru</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Tambahan styling untuk halaman utama */
        header {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: 700;
            text-decoration: none;
        }

        .nav-buttons {
            display: flex;
            gap: 15px;
        }

        .nav-btn {
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .nav-btn-login {
            background: rgba(255, 255, 255, 0.15);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .nav-btn-login:hover {
            background: rgba(255, 255, 255, 0.25);
        }

        .nav-btn-register {
            background: linear-gradient(135deg, #3b82f6, #60a5fa);
            color: white;
        }

        .nav-btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(96, 165, 250, 0.4);
        }

        /* Hero Section */
        .hero {
            max-width: 1200px;
            margin: 80px auto 60px;
            padding: 0 20px;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 18px;
            color: #dbeafe;
            margin-bottom: 40px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cta-btn {
            padding: 15px 35px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .cta-btn-primary {
            background: linear-gradient(135deg, #3b82f6, #60a5fa);
            color: white;
        }

        .cta-btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(96, 165, 250, 0.5);
        }

        .cta-btn-secondary {
            background: rgba(255, 255, 255, 0.15);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .cta-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
        }

        /* Content Sections */
        .content-container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .section-title {
            font-size: 36px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 50px;
            color: white;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 60px;
        }

        .info-card {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
        }

        .info-card:hover {
            transform: translateY(-10px);
            border-color: #60a5fa;
            box-shadow: 0 12px 40px rgba(96, 165, 250, 0.3);
        }

        .info-card-icon {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .info-card h3 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        .info-card p {
            font-size: 15px;
            line-height: 1.6;
        }

        /* Timeline */
        .timeline {
            max-width: 800px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .timeline-item {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
            border-left: 4px solid #60a5fa;
        }

        .timeline-item h4 {
            color: #60a5fa;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .timeline-item p {
            text-align: left;
            font-size: 14px;
            color: #dbeafe;
        }

        /* Contact Section */
        .contact-section {
            max-width: 1000px;
            margin: 60px auto;
            padding: 40px;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .contact-item {
            text-align: center;
        }

        .contact-item h4 {
            color: #60a5fa;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .contact-item p {
            font-size: 15px;
            color: #dbeafe;
            text-align: center;
        }

        /* Footer */
        footer {
            background: rgba(0, 0, 0, 0.3);
            color: #dbeafe;
            text-align: center;
            padding: 40px 20px;
            margin-top: 60px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        footer p {
            margin: 8px 0;
            font-size: 14px;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 32px;
            }

            .hero p {
                font-size: 16px;
            }

            .section-title {
                font-size: 28px;
                margin-bottom: 30px;
            }

            .cta-buttons {
                flex-direction: column;
            }

            .cta-btn {
                width: 100%;
            }

            .nav-buttons {
                gap: 10px;
            }

            .nav-btn {
                padding: 8px 15px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-content">
            <div class="logo">PPDB SMKN 4</div>
            <div class="nav-buttons">
                <a href="login.php" class="nav-btn nav-btn-login">Login</a>
                <a href="registrasi.php" class="nav-btn nav-btn-register">Daftar</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Penerimaan Peserta Didik Baru<br>SMKN 4 Palembang</h1>
        <p>Bergabunglah dengan ribuan siswa di sekolah unggulan kami dan raih masa depan yang cerah</p>
        <div class="cta-buttons">
            <a href="registrasi.php" class="cta-btn cta-btn-primary">Daftar Sekarang</a>
            <a href="#informasi" class="cta-btn cta-btn-secondary">Lihat Informasi</a>
        </div>
    </div>

    <!-- Informasi PPDB -->
    <div class="content-container" id="informasi">
        <h2 class="section-title">Informasi Pendaftaran</h2>
        
        <div class="info-grid">
            <div class="info-card">
                <div class="info-card-icon">📋</div>
                <h3>Syarat & Ketentuan</h3>
                <p>Memiliki ijazah SMP/MTs, mengisi formulir pendaftaran lengkap, dan menyiapkan dokumen yang diperlukan</p>
            </div>

            <div class="info-card">
                <div class="info-card-icon">💻</div>
                <h3>Pendaftaran Online</h3>
                <p>Proses pendaftaran dilakukan 100% online. Daftarkan akun Anda dan lengkapi data diri dengan benar</p>
            </div>

            <div class="info-card">
                <div class="info-card-icon">✅</div>
                <h3>Verifikasi Data</h3>
                <p>Setiap data pendaftaran akan diverifikasi oleh panitia PPDB. Status akan diupdate secara berkala</p>
            </div>

            <div class="info-card">
                <div class="info-card-icon">🏫</div>
                <h3>Jurusan Tersedia</h3>
                <p>Teknik Kendaraan Ringan, Teknik Audio Video, Teknik Komputer Jaringan, Rekayasa Perangkat Lunak, Desain Pemodelan dan Informasi Bangunan, Teknik Sepeda Motor, Teknik Permesinan dan Teknik Listrik</p>
            </div>

            <div class="info-card">
                <div class="info-card-icon">📚</div>
                <h3>Fasilitas Lengkap</h3>
                <p>Laboratorium modern, perpustakaan digital, aula, dan fasilitas olahraga yang memadai</p>
            </div>

            <div class="info-card">
                <div class="info-card-icon">🎖️</div>
                <h3>Prestasi Terjamin</h3>
                <p>Lulusan kami banyak yang melanjutkan ke PTN dan DTN, serta memiliki pengalaman industri</p>
            </div>
        </div>
    </div>

    <!-- Timeline -->
    <div class="timeline">
        <h2 class="section-title">Jadwal Pendaftaran</h2>
        
        <div class="timeline-item">
            <h4>Pendaftaran Dibuka</h4>
            <p>1 Juni 2026</p>
        </div>

        <div class="timeline-item">
            <h4>Batas Pendaftaran</h4>
            <p>31 Juli 2026</p>
        </div>

        <div class="timeline-item">
            <h4>Verifikasi Data</h4>
            <p>1 - 15 Agustus 2026</p>
        </div>

        <div class="timeline-item">
            <h4>Pengumuman Hasil</h4>
            <p>20 Agustus 2026</p>
        </div>

        <div class="timeline-item">
            <h4>Daftar Ulang</h4>
            <p>21 - 31 Agustus 2026</p>
        </div>

        <div class="timeline-item">
            <h4>Tahun Ajaran Baru</h4>
            <p>1 September 2026</p>
        </div>
    </div>

    <!-- Kontak -->
    <div class="contact-section" id="kontak">
        <h2 class="section-title">Hubungi Kami</h2>
        
        <div class="contact-grid">
            <div class="contact-item">
                <h4>Alamat</h4>
                <p>Jl. Sersan Sani, Palembang<br>Sumatera Selatan 30128</p>
            </div>

            <div class="contact-item">
                <h4>Telepon</h4>
                <p>(0711) 123-4567<br>(0711) 765-4321</p>
            </div>

            <div class="contact-item">
                <h4>Email</h4>
                <p>ppdb@smkn4palembang.sch.id<br>info@smkn4palembang.sch.id</p>
            </div>

            <div class="contact-item">
                <h4>Website</h4>
                <p>www.smkn4palembang.sch.id</p>
            </div>

            <div class="contact-item">
                <h4>WhatsApp</h4>
                <p>(0821) 8765-4321</p>
            </div>

            <div class="contact-item">
                <h4>Jam Operasional</h4>
                <p>Senin - Jumat<br>08:00 - 15:30 WIB</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 PPDB SMKN 4 Palembang. Semua hak cipta dilindungi.</p>
        <p>Dikembangkan dengan ❤️ untuk kemajuan pendidikan</p>
    </footer>
</body>
</html>