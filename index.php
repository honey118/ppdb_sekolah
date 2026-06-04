<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PPDB - Portal Pendaftaran Siswa Baru</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
      color: #333;
    }

    /* Header */
    header {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 20px 0;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .header-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .logo-area h1 {
      font-size: 24px;
      font-weight: bold;
    }

    .logo-area p {
      font-size: 12px;
      opacity: 0.9;
    }

    .nav-button {
      background: white;
      color: #667eea;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .nav-button:hover {
      background: #f0f0f0;
      transform: translateY(-2px);
    }

    /* Hero Section */
    .hero {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 80px 20px;
      text-align: center;
      margin-bottom: 40px;
    }

    .hero h2 {
      font-size: 42px;
      margin-bottom: 15px;
      font-weight: bold;
    }

    .hero p {
      font-size: 18px;
      margin-bottom: 30px;
      opacity: 0.95;
    }

    .cta-buttons {
      display: flex;
      gap: 15px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .btn {
      padding: 14px 35px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      display: inline-block;
    }

    .btn-primary {
      background: white;
      color: #667eea;
    }

    .btn-primary:hover {
      background: #f0f0f0;
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .btn-secondary {
      background: transparent;
      color: white;
      border: 2px solid white;
    }

    .btn-secondary:hover {
      background: white;
      color: #667eea;
    }

    /* Main Content */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .section {
      margin-bottom: 60px;
    }

    .section-title {
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 30px;
      text-align: center;
      color: #333;
      border-bottom: 3px solid #667eea;
      padding-bottom: 15px;
    }

    /* Info Cards */
    .info-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
      margin-bottom: 40px;
    }

    .card {
      background: white;
      border-radius: 8px;
      padding: 30px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      border-top: 4px solid #667eea;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .card h3 {
      font-size: 20px;
      margin-bottom: 15px;
      color: #667eea;
    }

    .card p {
      color: #666;
      line-height: 1.8;
    }

    /* Timeline */
    .timeline {
      background: white;
      border-radius: 8px;
      padding: 40px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .timeline-item {
      display: flex;
      gap: 30px;
      margin-bottom: 30px;
      padding-bottom: 30px;
      border-bottom: 1px solid #eee;
    }

    .timeline-item:last-child {
      border-bottom: none;
    }

    .timeline-date {
      background: #667eea;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      min-width: 120px;
      text-align: center;
      font-weight: bold;
    }

    .timeline-content h4 {
      color: #333;
      margin-bottom: 5px;
      font-size: 18px;
    }

    .timeline-content p {
      color: #666;
    }

    /* Footer */
    footer {
      background: #333;
      color: white;
      padding: 40px 20px 20px;
      margin-top: 60px;
    }

    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin-bottom: 30px;
    }

    .footer-section h4 {
      margin-bottom: 15px;
      color: #667eea;
    }

    .footer-section p, .footer-section a {
      color: #ccc;
      text-decoration: none;
      margin-bottom: 10px;
      display: block;
      line-height: 1.8;
    }

    .footer-section a:hover {
      color: white;
    }

    .footer-bottom {
      text-align: center;
      border-top: 1px solid #555;
      padding-top: 20px;
      color: #999;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .hero h2 {
        font-size: 28px;
      }

      .hero p {
        font-size: 16px;
      }

      .section-title {
        font-size: 24px;
      }

      .header-container {
        flex-direction: column;
        gap: 15px;
      }

      .timeline-item {
        flex-direction: column;
      }

      .cta-buttons {
        flex-direction: column;
      }

      .btn {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="logo-area">
        <div>
          <h1>🎓 PPDB</h1>
          <p>Portal Penerimaan Peserta Didik Baru</p>
        </div>
      </div>
      <button class="nav-button">Masuk</button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h2>Selamat Datang di PPDB Kami</h2>
      <p>Daftarkan dirimu sekarang dan bergabunglah dengan ribuan siswa yang telah memilih kami</p>
      <div class="cta-buttons">
        <button class="btn btn-primary">📝 Daftar Sekarang</button>
        <button class="btn btn-secondary">ℹ️ Pelajari Lebih Lanjut</button>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <div class="container">
    <!-- Info Section -->
    <section class="section">
      <h2 class="section-title">Informasi PPDB</h2>
      <div class="info-cards">
        <div class="card">
          <h3>📌 Tentang PPDB</h3>
          <p>PPDB adalah sistem penerimaan siswa baru yang terbuka dan transparan. Kami berkomitmen untuk memberikan kesempatan yang sama kepada semua calon siswa yang memenuhi persyaratan.</p>
        </div>
        <div class="card">
          <h3>✅ Persyaratan</h3>
          <p>Persyaratan pendaftaran meliputi dokumen identitas, nilai rapor, dan surat rekomendasi dari sekolah asal. Semua dokumen harus dalam kondisi lengkap dan asli.</p>
        </div>
        <div class="card">
          <h3>🎯 Pendaftaran Online</h3>
          <p>Proses pendaftaran dilakukan sepenuhnya secara online melalui portal ini. Anda dapat menyelesaikan pendaftaran kapan saja dan di mana saja dengan koneksi internet.</p>
        </div>
      </div>
    </section>

    <!-- Timeline Section -->
    <section class="section">
      <h2 class="section-title">Jadwal Penting</h2>
      <div class="timeline">
        <div class="timeline-item">
          <div class="timeline-date">1 - 10 Juni</div>
          <div class="timeline-content">
            <h4>Pendaftaran Dibuka</h4>
            <p>Portal pendaftaran PPDB resmi dibuka. Pastikan Anda menyiapkan semua dokumen yang diperlukan sebelum mendaftar.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-date">11 - 15 Juni</div>
          <div class="timeline-content">
            <h4>Verifikasi Dokumen</h4>
            <p>Tim kami akan melakukan verifikasi terhadap semua dokumen yang telah diupload. Mohon bersabar menunggu hasil verifikasi.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-date">16 - 20 Juni</div>
          <div class="timeline-content">
            <h4>Tes Masuk (Jika diperlukan)</h4>
            <p>Calon siswa yang lulus verifikasi dokumen akan mengikuti tes masuk. Detil tempat dan waktu tes akan diumumkan lebih lanjut.</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-date">25 Juni</div>
          <div class="timeline-content">
            <h4>Pengumuman Hasil</h4>
            <p>Hasil akhir PPDB akan diumumkan melalui portal ini. Anda dapat mengecek status penerimaan Anda secara langsung.</p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <div class="footer-section">
        <h4>Tentang Kami</h4>
        <p>PPDB adalah platform resmi penerimaan siswa baru yang dirancang untuk memberikan pengalaman pendaftaran yang mudah dan transparan bagi calon siswa.</p>
      </div>
      <div class="footer-section">
        <h4>Tautan Penting</h4>
        <a href="#beranda">Beranda</a>
        <a href="#pendaftaran">Pendaftaran</a>
        <a href="#informasi">Informasi</a>
        <a href="#kontak">Hubungi Kami</a>
      </div>
      <div class="footer-section">
        <h4>Hubungi Kami</h4>
        <p>📧 Email: ppdb@sekolah.com</p>
        <p>📞 Telepon: (0711) 123-4567</p>
        <p>📍 Alamat: Jalan Pendidikan No. 123, Palembang</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 PPDB - Semua Hak Dilindungi Undang-Undang</p>
    </div>
  </footer>
</body>
</html>