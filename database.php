<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "joki_game";

$conn = mysqli_connect("127.0.0.1", "root", "", "joki_game", 3307);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
