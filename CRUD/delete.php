<?php
include "koneksi.php";
$username=$_GET['username'];
$query="DELETE FROM tb_web where username='$username'";
$hasil=mysqli_query($conn,$query);
if($hasil){
?>
<script labguage="javascript">document.location.href="Data User.php"</script>    
<?php
}else{
    echo "gagal hapus data";
}
?>