<?php
include "koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];

$query="UPDATE tb_web SET username='$username' WHERE password='$password';";
$hasil=mysqli_query($conn,$query);
if($hasil){
    header('location:Data User.php');
}else{
    echo"Gagal update data";
    echo mysqli_error();
}
?>