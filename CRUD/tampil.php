<?php
include "koneksi.php"; //panggil file koneksi
$query="SELECT * FROM tb_web"; //buat query sql
$hasil=mysqli_query($conn, $query); //jalankan query sql
$no=1;
$jum=mysqli_num_rows($hasil); //menghitung banyak row/baris data
echo "Banyak Data: ".$jum."<br>";
//perulangan untuk nampilkan data dari database
while ($data=mysqli_fetch_array($hasil))
?>
<tr>
<td><?php echo $no++;?></td>
<td><?php echo $data['username'];?></td>
<td><?php echo $data['password'];?></td>
<td><a href="form_update.php?nis=<?php echo $data['username'];?>">Edit</a></td>
<td><a href="delete.php?nis=<?php echo $data['username'];?>"onclick="return confirm('apakah anda yakin?')">Hapus</a></td>
</tr>
<?php