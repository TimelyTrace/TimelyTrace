<?php
include "koneksi.php"; // Menghubungkan ke file koneksi.php

// Query untuk membaca data dari tabel siswa_terlambat
$query = "SELECT * FROM tb_nput";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Tampilkan data dalam tabel HTML
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['kelas'] . "</td>";
        echo "<td>" . $row['absen'] . "</td>";
        echo "<td>" . $row['tanggal'] . "</td>";
        echo "<td>" . $row['alasan'] . "</td>";
        echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a></td>";
        echo "<td><a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a></td>";
        echo "</tr>";
    }
} else {
    echo "Tidak ada data.";
}
?>
