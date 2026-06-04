# 🎓 PPDB SMKN 4 Palembang

Sistem Penerimaan Peserta Didik Baru (PPDB) Online untuk SMKN 4 Palembang

## 📋 Daftar Isi

- [Deskripsi](#deskripsi)
- [Fitur Utama](#fitur-utama)
- [Persyaratan Sistem](#persyaratan-sistem)
- [Instalasi](#instalasi)
- [Struktur Database](#struktur-database)
- [Panduan Penggunaan](#panduan-penggunaan)
- [Halaman-Halaman](#halaman-halaman)
- [Akun Demo](#akun-demo)

## 📖 Deskripsi

PPDB SMKN 4 Palembang adalah sistem penerimaan siswa baru secara online yang dirancang untuk mempermudah proses pendaftaran dan verifikasi data calon peserta didik. Sistem ini menggunakan teknologi web modern dengan HTML, PHP, CSS, dan MySQL.

## ✨ Fitur Utama

✅ **Registrasi Siswa** - Mendaftarkan akun baru dengan validasi email dan NISN
✅ **Login Aman** - Sistem autentikasi menggunakan password hashing (bcrypt)
✅ **Form Pendaftaran Lengkap** - Formulir komprehensif untuk data siswa
✅ **Dashboard Siswa** - Dashboard untuk melihat status pendaftaran
✅ **Admin Panel** - Interface admin untuk mengelola data siswa
✅ **Sistem Status** - Tracking status: Belum Diverifikasi, Diterima, Ditolak
✅ **Responsive Design** - Kompatibel dengan desktop dan mobile

## 💻 Persyaratan Sistem

- PHP 7.4 atau lebih tinggi
- MySQL 5.7 atau lebih tinggi
- Web Server (Apache/Nginx)
- Browser modern (Chrome, Firefox, Safari, Edge)

## 🚀 Instalasi

### 1. Persiapan Database

```bash
# Buka phpMyAdmin atau MySQL client
# Buat database baru
CREATE DATABASE ppdb_sekolah;

# Import file SQL
# Gunakan file: ppdb_sekolah.sql
```

### 2. Konfigurasi Koneksi

File `koneksi.php` sudah dikonfigurasi untuk:
- Host: localhost
- User: root
- Password: (kosong)
- Database: ppdb_sekolah

Jika konfigurasi server Anda berbeda, edit `koneksi.php` sesuai kebutuhan.

### 3. Upload File

Letakkan semua file di folder:
```
C:\laragon\www\ppdb_sekolah\
```

### 4. Akses Sistem

Buka browser dan akses:
```
http://localhost/ppdb_sekolah/
```

## 🗄️ Struktur Database

### Tabel: siswa

```sql
CREATE TABLE siswa (
  id_siswa INT PRIMARY KEY AUTO_INCREMENT,
  nama_lengkap VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  nisn VARCHAR(20) NOT NULL UNIQUE,
  jenis_kelamin ENUM('L','P') NOT NULL,
  tempat_lahir VARCHAR(50),
  tanggal_lahir DATE,
  alamat TEXT,
  asal_sekolah VARCHAR(100),
  no_hp VARCHAR(15) NOT NULL,
  status ENUM('Belum Diverifikasi','Diterima','Ditolak') DEFAULT 'Belum Diverifikasi',
  tanggal_daftar TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)
```

## 📚 Panduan Penggunaan

### Untuk Calon Siswa

1. **Daftar Akun Baru**
   - Klik tombol "Daftar" di halaman utama
   - Isi data: Nama, Email, NISN, Password, No HP
   - Sistem akan otomatis membuat akun

2. **Login ke Sistem**
   - Gunakan email dan password yang sudah didaftarkan
   - Akses dashboard siswa

3. **Isi Formulir Pendaftaran**
   - Klik "Buka Formulir" di dashboard
   - Lengkapi semua data yang diperlukan
   - Klik "Simpan Data"

4. **Pantau Status**
   - Lihat status pendaftaran di dashboard
   - Status akan diperbarui oleh admin

### Untuk Admin

1. **Akses Admin Panel**
   - Buka: `http://localhost/ppdb_sekolah/admin.php`
   - Lihat statistik pendaftaran

2. **Kelola Data Siswa**
   - Filter berdasarkan status
   - Lihat detail siswa
   - Ubah status pendaftaran

3. **Update Status**
   - Klik tombol "Edit" pada data siswa
   - Ubah status: Belum Diverifikasi → Diterima atau Ditolak

## 📄 Halaman-Halaman

### Halaman Publik

| Halaman | URL | Deskripsi |
|---------|-----|-----------|
| Beranda | `/` | Halaman utama dengan info PPDB |
| Login | `/login.php` | Halaman login siswa |
| Registrasi | `/registrasi.php` | Halaman pendaftaran akun baru |

### Halaman Siswa (Perlu Login)

| Halaman | URL | Deskripsi |
|---------|-----|-----------|
| Dashboard | `/dashboard.php` | Dashboard utama siswa |
| Formulir | `/formulir.php` | Form pendaftaran lengkap |
| Lihat Data | `/lihat_data.php` | Melihat data pendaftaran |

### Halaman Admin

| Halaman | URL | Deskripsi |
|---------|-----|-----------|
| Admin Dashboard | `/admin.php` | Dashboard admin dengan statistik |
| Detail Siswa | `/detail_siswa.php?id=X` | Detail data siswa |
| Ubah Status | `/ubah_status.php?id=X` | Form ubah status |

### File Proses (Backend)

| File | Fungsi |
|------|--------|
| `proses_login.php` | Proses login siswa |
| `proses_registrasi.php` | Proses registrasi akun baru |
| `proses_form_pendaftaran.php` | Proses submit form pendaftaran |
| `proses_logout.php` | Proses logout |

## 🎨 Styling

Semua halaman menggunakan file CSS terpadu:
- **File:** `style.css`
- **Tema:** Blue Gradient dengan Glass-morphism effect
- **Warna Utama:** #0f172a, #1e3a8a, #2563eb
- **Responsive:** Mobile-first design

## 🔐 Keamanan

✅ Password di-hash menggunakan bcrypt (PASSWORD_BCRYPT)
✅ Input validation dan sanitization
✅ Session management untuk autentikasi
✅ SQL Injection protection

## 📋 Akun Demo

Untuk testing, Anda bisa membuat akun baru melalui halaman registrasi.

**Contoh Data Demo:**
- Nama: John Doe
- Email: john@example.com
- NISN: 1234567890123
- Password: password123

## 🐛 Troubleshooting

### Koneksi Database Gagal
- Pastikan MySQL berjalan
- Cek konfigurasi di `koneksi.php`
- Pastikan database `ppdb_sekolah` sudah dibuat

### Password Lupa
- Admin bisa reset password melalui database
- Gunakan query: `UPDATE siswa SET password = PASSWORD('newpassword') WHERE id_siswa = X`

### Halaman Blank
- Cek error PHP di error log
- Enable error display di `php.ini`

## 📞 Kontak & Support

**Email:** ppdb@smkn4palembang.sch.id
**Telepon:** (0711) 123-4567
**WhatsApp:** (0821) 8765-4321
**Website:** www.smkn4palembang.sch.id

## 📜 Lisensi

Copyright © 2026 SMKN 4 Palembang. Semua hak cipta dilindungi.

---

**Dikembangkan dengan ❤️ untuk kemajuan pendidikan**
