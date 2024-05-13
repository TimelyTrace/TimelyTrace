<?php
//memanggil file koneksi php
    include "koneksi.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $kirim=$_POST['kirim'];

//proses kirim data ke database mysql
if(isset($_POST['kirim'])){
    // Pastikan variabel POST tersedia sebelum mengaksesnya
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Proses kirim data ke database mysql
    $query="INSERT INTO `tb_user`(`id_user`, `username`, `email`, `password`) VALUES ('','$username','$email','$password')";
    $hasil=mysqli_query($conn,$query);
    if($hasil){
        // Registrasi berhasil, lakukan redirect
        header("Location: landingpage.php");
        exit();
    } else {
        echo "Registrasi User Gagal!";
    }
}
?>