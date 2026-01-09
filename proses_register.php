<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['password']);

// simpan ke database
mysqli_query($conn, "INSERT INTO users (nama, email, password)
VALUES ('$nama', '$email', '$password')");

// setelah daftar, arahkan ke login
header("Location: login.php");
?>
