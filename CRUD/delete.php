<?php
// Sertakan file koneksi ke database
include "koneksi.php";

// Periksa apakah parameter nisn telah diterima melalui query string
if (isset($_GET['nis'])) {
    // Escape parameter untuk mencegah SQL Injection
    $nisn = mysqli_real_escape_string($conn, $_GET['nis']);

    // Query untuk menghapus data berdasarkan nisn
    $query = "DELETE FROM tb_input WHERE nisn = '$nisn'";

    // Jalankan query
    $result = mysqli_query($conn, $query);

    // Periksa apakah query berhasil dijalankan
    if ($result) {
        // Redirect kembali ke halaman sebelumnya setelah menghapus data
        header("Location: Datapage.php"); // Ganti index.php dengan halaman yang sesuai
        exit();
    } else {
        // Jika query gagal dijalankan, tampilkan pesan error
        echo "Error: " . mysqli_error($conn);
    }
}

// Tutup koneksi ke database
mysqli_close($conn);
=======
$nisn = $_GET['nisn'];
$query = "DELETE FROM `tb_input` WHERE nisn='$nisn'";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    ?>
    <script language="javascript">
        document.location.href = "Datapage.php"
    </script>
<?php
} else {
    echo "Gagal hapus data: " . mysqli_error($conn); // Menampilkan pesan kesalahan
}
?>
