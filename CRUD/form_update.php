<?php
include "koneksi.php";

<<<<<<< HEAD
if(isset($_GET['nisn'])) {
    echo "NISN: " . $nisn . "<br>";
    $nisn = $_GET['nisn'];
    $query = "SELECT * FROM `tb_input` WHERE nisn='$nisn'";
    $hasil = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($hasil);
=======
// Pastikan variabel $_POST['nisn'] di-set
if (isset($_POST['nisn'])) {
    $nisn = $_POST['nisn'];

    // Persiapkan pernyataan
    $query = "SELECT * FROM tb_input WHERE nisn=nisn";
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
>>>>>>> 568e710a2cf5d7d119277e5d8e51b7859ee2384c
}
?>

<form action="proses_update.php" method="post">
    <table class="table table-bordered m-2" style="width: 98%;">
        <tr class="text-center">
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>No Absen</th>
            <th>Tanggal Terlambat</th>
            <th>Alasan</th>
            <th>Action</th>
        </tr>
        <?php
        if(isset($data)) {
        ?>
        <tr>
            <td><input type="text" name="nisn" value="<?php echo $data['nisn']; ?>" readonly="readonly"></td>
            <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            <td>
                <select class="form-control" id="kelas" name="kelas" style="background-color: #EEEEEE;">
                    <option value="X RPL A" <?php if($data['kelas'] == 'X RPL A') echo 'selected'; ?>>X RPL A</option>
                    <option value="X RPL B" <?php if($data['kelas'] == 'X RPL B') echo 'selected'; ?>>X RPL B</option>
                    <option value="X RPL C" <?php if($data['kelas'] == 'X RPL C') echo 'selected'; ?>>X RPL C</option>
                </select>
            </td>
            <td><input type="text" name="absen" value="<?php echo $data['absen']; ?>"></td>
            <td><input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>"></td>
            <td><input type="text" name="alasan" value="<?php echo $data['alasan']; ?>"></td>
            <td><input type="submit" name="submit" value="KIRIM"></td>
        </tr>
        <?php
        } else {
            echo "<tr><td colspan='7' class='text-center'>Data tidak ditemukan.</td></tr>";
        }
        ?>
    </table>
</form>
