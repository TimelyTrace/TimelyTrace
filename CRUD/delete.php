<?php
include "koneksi.php";
$nisn=$_GET['nisn'];
$query="DELETE FROM `tb_input` where nisn='$nisn'";
$hasil=mysqli_query($conn,$query);
if($hasil){
?>
<script language="javascript">document.location.href="Datapage.php"</script>    
<?php
}else{
    echo "gagal hapus data";
}
?>