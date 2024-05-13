<?php
//memanggil file koneksi php
    include "koneksi.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $kirim=$_POST['kirim'];

//proses kirim data ke database mysql
if($kirim){
    $query="INSERT INTO `tb_user`(`id_user`, `username`, `email`, `password`) VALUES ('','$username','$email','$password')";
    $hasil=mysqli_query($conn,$query);
    echo "Registrasi user berhasil<br>";
    echo "<a href='login.php'>Login User</a>";
} else {
    echo "Registrasi User Gagal!";
}
?>