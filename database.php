<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "joki_game";

$conn = mysqli_connect("");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
