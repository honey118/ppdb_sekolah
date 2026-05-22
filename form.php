<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Sekolah</title>
    <style>
        body{
            margin:0; padding:0; box-sizing:border-box; font-family:'Segoe UI', sans-serif;
            min-height:100vh; display:flex; justify-content:center; align-items:center;
            padding:30px; overflow:auto; background: linear-gradient(135deg, #0f172a, #1e3a8a, #2563eb); position:relative;
        }
        body::before, body::after{ content:''; position:absolute; border-radius:50%; filter:blur(100px); opacity:0.7; }
        body::before{ width:350px; height:350px; background:#60a5fa; top:-100px; left:-100px; }
        body::after{ width:300px; height:300px; background:#93c5fd; bottom:-80px; right:-80px; }
        .container{
            width:100%; max-width:550px; padding:40px; border-radius:25px; background:rgba(255,255,255,0.12);
            backdrop-filter:blur(18px); border:1px solid rgba(255,255,255,0.2); box-shadow:0 8px 32px rgba(0,0,0,0.25); color:white; position:relative; z-index:1;
        }
        h2{ text-align:center; font-size:30px; margin-bottom:10px; }
        p{ text-align:center; color:#dbeafe; margin-bottom:30px; font-size:14px; }
        .form-group{ margin-bottom:18px; }
        label{ display:block; margin-bottom:8px; font-size:14px; font-weight:600; }
        input, select, textarea{
            width:100%; padding:14px; border:none; outline:none; border-radius:12px;
            background:rgba(255,255,255,0.15); color:white; font-size:14px; border:1px solid rgba(255,255,255,0.2); transition:0.3s;
        }
        input::placeholder, textarea::placeholder{ color:#dbeafe; }
        input:focus, select:focus, textarea:focus{ background:rgba(255,255,255,0.2); border:1px solid #93c5fd; box-shadow:0 0 15px rgba(147,197,253,0.5); }
        select option{ color:black; }
        .btn-submit{
            width:100%; padding:15px; border:none; border-radius:14px; cursor:pointer;
            background:linear-gradient(135deg,#3b82f6,#60a5fa); color:white; font-size:16px; font-weight:bold; transition:0.3s; margin-top:10px;
        }
        .btn-submit:hover{ transform:translateY(-2px); box-shadow:0 8px 20px rgba(96,165,250,0.5); }
        
        /* Style alert notifikasi PHP */
        .alert-gagal {
            padding: 15px; background: rgba(239, 68, 68, 0.2); 
            border: 1px solid rgba(239, 68, 68, 0.4); border-radius: 12px;
            color: #fee2e2; margin-bottom: 20px; font-size: 14px; text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pendaftaran Siswa Baru</h2>
        <p>Silakan isi data diri anda dengan lengkap</p>
        
        <!-- Menampilkan pesan error murni dari PHP jika proses database gagal -->
        <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal'): ?>
            <div class="alert-gagal">
                ❌ Gagal menyimpan data! Silakan cek kembali data Anda.
            </div>
        <?php endif; ?>
        
        <!-- Form mengirimkan data langsung ke proses_pendaftaran.php -->
        <form action="proses_pendaftaran.php" method="POST">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" placeholder="Masukkan tempat lahir">
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <div class="form-group">
                <label>NISN</label>
                <input type="text" name="nisn" placeholder="Masukkan NISN">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="contoh@gmail.com">
            </div>
            <div class="form-group">
                <label>Nomor Hp</label>
                <input type="tel" name="no_hp" placeholder="080000">
            </div>
            <div class="form-group">
                <label>Alamat Lengkap</label>
                <textarea rows="3" name="alamat" placeholder="Masukkan alamat lengkap"></textarea>
            </div>
            <div class="form-group">
                <label>Nama Ayah</label>
                <input type="text" name="nama_ayah" placeholder="Masukkan nama ayah">
            </div>
            <div class="form-group">
                <label>Nama Ibu</label>
                <input type="text" name="nama_ibu" placeholder="Masukkan nama ibu">
            </div>
            <div class="form-group">
                <label>Asal Sekolah</label>
                <input type="text" name="asal_sekolah" placeholder="Masukkan sekolah asal">
            </div>
            <div class="form-group">
                <label>Pilih Jurusan</label>
                <select name="jurusan">
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                    <option value="Teknik Audio Video">Teknik Audio Video</option>
                    <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                    <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                    <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                    <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
                    <option value="Desain Pemodelan Dan Informasi Bangunan">Desain Pemodelan Dan Informasi Bangunan</option>
                </select>
            </div>
            <button type="submit" class="btn-submit">Daftar Sekarang</button>
        </form>
    </div>
</body>
</html>