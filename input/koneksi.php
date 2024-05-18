<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// koneksi ke mysqli
$host = "localhost";
$user = "root";
$pass = "";
$database = "db_timelytrace";
$conn = mysqli_connect($host, $user, $pass, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful";
}
?>
