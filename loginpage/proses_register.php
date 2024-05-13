<?php
    //memanggil file koneksi.php
    include "koneksi.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $nama=$_POST['nama'];
    $level="user";//level otomatis diisi user pd saat registrasi
    
    //format acak password harus sama dengan proses_login.php
    $pengacak="p3ng4c4k";
    $password_acak=md5($pengacak.md5($password).$pengacak);
    $kirim=$_POST['kirim'];

    //proses kirim data ke database MYSQL
    if($kirim){
        $query="INSERT INTO `tb_user`(`id_user`, `username`, `email`, `password`, `level`) VALUES (NULL,'$username','$email','$password','$level')";
        $hasil=mysqli_query($conn,$query);
        echo "Registrasi User Berhasil<br>";
        echo "<a href='login.php'>Login User</a>";
    } else {
        echo "Registrasi User Gagal!";
    }
?>