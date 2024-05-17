<?php
include "koneksi.php";
$username=$_GET['nisn'];
<<<<<<< HEAD
$query="DELETE FROM 'tb_input' WHERE nisn='$nisn'";
=======
$query="DELETE FROM tb_input where nisn='$nisn'";
>>>>>>> 9eb4f27f0009a5380d845e3bd09f3c3756bc88d0
$hasil=mysqli_query($conn,$query);
if($hasil){
?>
<script language="javascript">document.location.href="Datapage.php"</script>    
<?php
}else{
    echo "gagal hapus data";
}
?>