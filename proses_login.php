<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
$data = mysqli_fetch_array($query);

if ($data) {
    $_SESSION['login'] = true;
    $_SESSION['nama'] = $data['nama'];
    header("Location: dashboard.php");
} else {
    echo "Login gagal";
}
?>
