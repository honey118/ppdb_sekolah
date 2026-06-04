# 🚀 QUICK START GUIDE - PPDB SMKN 4 PALEMBANG

## ⚡ Akses Cepat

### Halaman Utama
```
http://localhost/ppdb_sekolah/
http://localhost/ppdb_sekolah/index.php
```

### Untuk Siswa
```
Login              → http://localhost/ppdb_sekolah/login.php
Registrasi         → http://localhost/ppdb_sekolah/registrasi.php
Dashboard          → http://localhost/ppdb_sekolah/dashboard.php
Isi Formulir       → http://localhost/ppdb_sekolah/formulir.php
Lihat Data         → http://localhost/ppdb_sekolah/lihat_data.php
```

### Untuk Admin
```
Admin Dashboard    → http://localhost/ppdb_sekolah/admin.php
Detail Siswa       → http://localhost/ppdb_sekolah/detail_siswa.php?id=1
Ubah Status        → http://localhost/ppdb_sekolah/ubah_status.php?id=1
```

### Proses Backend
```
Login              → http://localhost/ppdb_sekolah/proses_login.php
Registrasi         → http://localhost/ppdb_sekolah/proses_registrasi.php
Form Pendaftaran   → http://localhost/ppdb_sekolah/proses_form_pendaftaran.php
Logout             → http://localhost/ppdb_sekolah/proses_logout.php
```

---

## 🔑 Alur Pengguna

### Siswa Baru - Langkah 1-7

**Step 1: Ke Halaman Utama**
```
Kunjungi: http://localhost/ppdb_sekolah/
```

**Step 2: Klik "Daftar Sekarang"**
```
Tombol CTA di hero section
↓
Redirect ke registrasi.php
```

**Step 3: Isi Formulir Registrasi**
```
Nama Lengkap     : [Input Teks]
Email            : [Input Email]
NISN             : [Input Teks]
Password         : [Min 6 karakter]
Confirm Password : [Sama dengan password]
No HP            : [Input Telepon]
↓
Klik Tombol "Daftar"
```

**Step 4: Login ke Sistem**
```
Kunjungi: login.php
Email    : [Sesuai registrasi]
Password : [Sesuai registrasi]
↓
Klik "Login"
```

**Step 5: Akses Dashboard**
```
Tampil di: dashboard.php
↓
Klik "Buka Formulir"
```

**Step 6: Isi Formulir Pendaftaran Lengkap**
```
Nama Lengkap
NISN
Email
No HP
Tempat Lahir
Tanggal Lahir
Jenis Kelamin
Asal Sekolah
Alamat
↓
Klik "Simpan Data"
```

**Step 7: Pantau Status**
```
Dashboard akan menampilkan status:
- Belum Diverifikasi (pending verification)
- Diterima (accepted)
- Ditolak (rejected)
```

---

## 👨‍💼 Admin - Langkah 1-5

**Step 1: Ke Admin Dashboard**
```
Kunjungi: http://localhost/ppdb_sekolah/admin.php
```

**Step 2: Lihat Statistik**
```
Total Pendaftar    : [Angka]
Belum Diverifikasi : [Angka]
Diterima           : [Angka]
Ditolak            : [Angka]
```

**Step 3: Filter Data (Opsional)**
```
Dropdown Status:
- Semua Status
- Belum Diverifikasi
- Diterima
- Ditolak
↓
Pilih dan form otomatis submit
```

**Step 4: Lihat Detail Siswa**
```
Tabel dengan kolom:
No | Nama | Email | NISN | No HP | Status | Tanggal | Aksi
↓
Klik "👁️ Lihat" → detail_siswa.php
```

**Step 5: Ubah Status Siswa**
```
Di detail_siswa.php
↓
Klik "✏️ Ubah Status"
↓
ubah_status.php
↓
Pilih Status Baru:
- Belum Diverifikasi
- Diterima
- Ditolak
↓
Klik "Simpan Perubahan"
↓
Kembali ke detail dengan status terupdate
```

---

## 📝 Field Form Pendaftaran

### Registrasi Awal
```
✓ Nama Lengkap      (Required)
✓ Email             (Required, Unique)
✓ NISN              (Required, Unique)
✓ Password          (Required, Min 6 chars)
✓ Confirm Password  (Required, Match password)
✓ No HP             (Required)
```

### Form Pendaftaran Lengkap
```
✓ Nama Lengkap      (Required, Pre-filled)
✓ NISN              (Required, Pre-filled)
✓ Email             (Required, Pre-filled)
✓ No HP             (Required, Pre-filled)
- Tempat Lahir      (Optional)
- Tanggal Lahir     (Optional)
- Jenis Kelamin     (Optional)
- Asal Sekolah      (Optional)
- Alamat Lengkap    (Optional)
```

---

## 🔐 Session & Login

### Cookies & Session
```
Session Name  : PHPSESSID
Session Vars  : 
  - user_id
  - user_email
  - user_name
  - message (notification)
  - message_type (success/error/warning/info)
```

### Logout
```
Kunjungi: proses_logout.php
↓
Destroy session
↓
Redirect ke index.php
```

---

## 📊 Database Queries Penting

### Cek Data Siswa
```sql
SELECT * FROM siswa;
SELECT * FROM siswa WHERE status = 'Belum Diverifikasi';
SELECT * FROM siswa WHERE email = 'user@example.com';
```

### Update Status
```sql
UPDATE siswa SET status = 'Diterima' WHERE id_siswa = 1;
UPDATE siswa SET status = 'Ditolak' WHERE id_siswa = 2;
```

### Reset Password (Admin)
```sql
UPDATE siswa SET password = SHA2('newpassword', 256) WHERE id_siswa = 1;
-- Or for bcrypt, gunakan function PHP: password_hash()
```

---

## 🎨 CSS Classes Penting

### Container
```css
.container              /* Max 550px, centered */
.container-auth        /* Auth pages, max 420px */
.content-container     /* Content pages, max 1200px */
.admin-container       /* Admin pages, max 1200px */
```

### Buttons
```css
.btn                   /* Base button */
.btn-primary           /* Blue gradient */
.btn-secondary         /* Transparent white */
.btn-submit            /* Submit button */
.cta-btn              /* Call-to-action button */
```

### Alert
```css
.alert                 /* Base alert */
.alert-success        /* Green */
.alert-error          /* Red */
.alert-warning        /* Orange */
.alert-info           /* Blue */
```

### Cards
```css
.info-card            /* Info card with hover */
.stat-card            /* Stat display card */
.action-card          /* Action card */
.timeline-item        /* Timeline item */
```

---

## 🐛 Debugging Tips

### Cek Koneksi Database
```php
// Di koneksi.php, akan muncul error jika gagal
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
```

### Cek Session
```php
session_start();
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
```

### Cek POST Data
```php
echo "<pre>";
print_r($_POST);
echo "</pre>";
```

### Lihat SQL Query
```php
echo $query;  // Lihat query yang akan dijalankan
```

---

## ⏱️ Jadwal Penting

```
1 Juni 2026         → Pendaftaran Dibuka
31 Juli 2026        → Batas Pendaftaran
1-15 Agustus 2026   → Verifikasi Data
20 Agustus 2026     → Pengumuman Hasil
21-31 Agustus 2026  → Daftar Ulang
1 September 2026    → Tahun Ajaran Baru
```

---

## 📞 Kontak SMKN 4 Palembang

```
Alamat    : Jl. Mayor Zuriyanto, Palembang, Sumatera Selatan 30128
Telepon   : (0711) 123-4567 / (0711) 765-4321
Email     : ppdb@smkn4palembang.sch.id
WhatsApp  : (0821) 8765-4321
Website   : www.smkn4palembang.sch.id
Jam Kerja : Senin-Jumat 08:00-15:30 WIB
```

---

## 🎓 Jurusan di SMKN 4

1. **Teknik Elektronika**
2. **Teknik Informatika**
3. **Teknik Mesin**
4. **Akuntansi**
5. **Administrasi Perkantoran**

---

## ✅ Checklist Deployment

- [ ] Database ppdb_sekolah sudah dibuat
- [ ] File SQL sudah diimport
- [ ] koneksi.php sudah dikonfigurasi
- [ ] Folder ppdb_sekolah sudah di www/
- [ ] PHP server berjalan (Laragon/XAMPP)
- [ ] MySQL berjalan
- [ ] Akses http://localhost/ppdb_sekolah/ berhasil
- [ ] Bisa registrasi akun baru
- [ ] Bisa login
- [ ] Bisa isi form pendaftaran
- [ ] Bisa akses admin.php
- [ ] Bisa ubah status siswa

---

## 🚀 Next Steps

1. **Testing Lengkap**
   - Test semua flow (registrasi → login → form → admin)
   - Test di mobile device
   - Test di berbagai browser

2. **Customization** (Opsional)
   - Ubah nama sekolah di halaman
   - Ubah kontak sekolah
   - Ubah jadwal PPDB
   - Ubah warna sesuai identitas sekolah

3. **Production Ready**
   - Enable HTTPS
   - Setup automated backups
   - Implementasi email notifications
   - Setup monitoring & logging

---

**Dokumentasi dibuat: 4 Juni 2026**
**Sistem: PPDB SMKN 4 Palembang v1.0**
