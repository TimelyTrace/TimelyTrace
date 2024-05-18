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

<<<<<<< HEAD
    if($hasil) {
        echo "Data berhasil diperbarui.";
=======
    // Menjalankan query dan memeriksa hasilnya
    if ($conn->query($query) === TRUE) {
        echo "Data berhasil masuk database<br>";
        echo $nama . "<br>";
        echo $kelas . "<br>";
        echo $absen . "<br>";
        echo $tanggal . "<br>";
        echo $alasan . "<br>";
        echo "<a href='../CRUD/Datapage.php'>ke CRUD</a>";
>>>>>>> 568e710a2cf5d7d119277e5d8e51b7859ee2384c
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($conn);
    }
}
?>
?>
