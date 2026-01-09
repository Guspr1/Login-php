<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Selamat datang, <?php echo $_SESSION['nama']; ?></h2>

<a href="logout.php">Logout</a>
