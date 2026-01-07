<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// akun admin (sementara)
$admin_user = "admin";
$admin_pass = "123456";

if ($username === $admin_user && $password === $admin_pass) {
    $_SESSION['admin'] = true;
    header("Location: dashboard.php");
    exit;
} else {
    echo "<script>
        alert('Username atau password salah!');
        window.location='admin.php';
    </script>";
}
