<?php
// Memanggil file koneksi.php
include "koneksi.php";

// Mengambil data dari form
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$absen = $_POST['absen'];
$tanggal = $_POST['tanggal'];
$alasan = $_POST['alasan'];

if(isset($_POST['submit'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $absen = $_POST['absen'];
    $tanggal = $_POST['tanggal'];
    $alasan = $_POST['alasan'];

    $query = "UPDATE `tb_input` SET nama='$nama', kelas='$kelas', absen='$absen', tanggal='$tanggal', alasan='$alasan' WHERE nisn='$nisn'";
    $hasil = mysqli_query($conn, $query);

    if($hasil) {
        echo "Data berhasil diperbarui.";
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($conn);
    }
}
?>
?>
