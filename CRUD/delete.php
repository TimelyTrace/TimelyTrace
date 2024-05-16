<?php
include "koneksi.php";
$username=$_GET['username'];
$query="DELETE FROM tb_input where username='$username'";
$hasil=mysqli_query($conn,$query);
if($hasil){
?>
<script language="javascript">document.location.href="Datapage.php"</script>    
<?php
}else{
    echo "gagal hapus data";
}
?>