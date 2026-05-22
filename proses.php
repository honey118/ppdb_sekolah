<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nama          = $_POST['nama'] ?? '';
    $tempat_lahir  = $_POST['tempat_lahir'] ?? '';
    $tanggal_lahir = $_POST['tanggal_lahir'] ?? '';
    $jenis_kelamin = $_POST['jenis_kelamin'] ?? '';
    $agama         = $_POST['agama'] ?? '';
    $nisn          = $_POST['nisn'] ?? '';
    $email         = $_POST['email'] ?? '';
    $no_hp         = $_POST['no_hp'] ?? '';
    $alamat        = $_POST['alamat'] ?? '';
    $nama_ayah     = $_POST['nama_ayah'] ?? '';
    $nama_ibu      = $_POST['nama_ibu'] ?? '';
    $asal_sekolah  = $_POST['asal_sekolah'] ?? '';
    $jurusan       = $_POST['jurusan'] ?? '';

    $query = "INSERT INTO tb_siswa (
                `Nama Lengkap`, 
                `Tempat Lahir`, 
                `Tanggal Lahir`, 
                `Jenis Kelamin`, 
                `Agama`, 
                `NISN`, 
                `Email`, 
                `Nomor Hp`, 
                `Alamat`, 
                `Nama Ayah`, 
                `Nama Ibu`, 
                `Asal Sekolah`, 
                `Pilah Jurusan`
              ) VALUES (
                '$nama', 
                '$tempat_lahir', 
                '$tanggal_lahir', 
                '$jenis_kelamin', 
                '$agama', 
                '$nisn', 
                '$email', 
                '$no_hp', 
                '$alamat', 
                '$nama_ayah', 
                '$nama_ibu', 
                '$asal_sekolah', 
                '$jurusan'
              )";

    if (mysqli_query($koneksi, $query)) {
        // MURNI PHP: Jika sukses masuk database, langsung dialihkan ke halaman tampil_data.php
        header("Location: tampil_data.php");
        exit(); // Menghentikan eksekusi script setelah redirect
    } else {
        // Jika gagal, kembali ke halaman form sambil membawa status gagal
        header("Location: Form.php?pesan=gagal");
        exit();
    }
}
?>