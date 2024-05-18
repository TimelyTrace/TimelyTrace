<?php
// Form edit atau update
include "koneksi.php";

// Pastikan variabel $_POST['nisn'] di-set
if (isset($_POST['nisn'])) {
    $nisn = $_POST['nisn'];

    // Persiapkan pernyataan
    $query = "SELECT * FROM tb_input WHERE nisn=?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        // Ikat parameter
        $stmt->bind_param("s", $nisn);

        // Eksekusi pernyataan
        $stmt->execute();

        // Ambil hasil
        $hasil = $stmt->get_result();

        if ($hasil->num_rows > 0) {
            $data = $hasil->fetch_array(MYSQLI_ASSOC);
            // $data sekarang berisi data dari baris yang ditemukan
            // Pastikan untuk menggunakan $data sesuai kebutuhan
        } else {
            echo "Data tidak ditemukan untuk NISN: " . htmlspecialchars($nisn);
        }

        // Tutup pernyataan
        $stmt->close();
    } else {
        echo "Gagal menyiapkan pernyataan: " . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
} else {
    echo "NISN tidak diberikan.";
}
?>


<form action="proses_update.php" method="post">
    <table border="1">
        <tr>
            <td>Nisn</td>
            <td>:</td>
            <td><input type="text" name="username" value="<?php echo $data['username']; ?>"></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td><input type="text" name="password" value="<?php echo $data['password']; ?>"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="username" value="<?php echo $data['username']; ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Edit"></td>
            <td></td>
            <td><input type="reset" name="reset" value="Reset"></td>
        </tr>
    </table>
</form>
