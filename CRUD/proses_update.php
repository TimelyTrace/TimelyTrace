<?php
include "koneksi.php";
$nisn=$_POST['nisn'];
$query="UPDATE tb_input SET username='$username' WHERE password='$password'";
$hasil=mysqli_query($conn,$query);
if($hasil){
    header('location:Datapage.php');
}else{
    echo"Gagal update data";
    echo mysqli_error();
}
?>