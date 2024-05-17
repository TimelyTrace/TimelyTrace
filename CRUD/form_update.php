<?php
//form edit atau update
include "koneksi.php";
$username = $_GET['username'];
$query = "SELECT * FROM tb_input WHERE username='$username'";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_array($hasil);
?>

<form action="proses_update.php" method="post">
    <table border="1">
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="username" value="<?php echo $data['username']; ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="password" value="<?php echo $data['password']; ?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Edit"></td>
            <td></td>
            <td><input type="reset" name="reset" value="Hapus"></td>
        </tr>
    </table>
</form>
