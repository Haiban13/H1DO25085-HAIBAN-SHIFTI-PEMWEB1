<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Index</title>
</head>
<body>
    <h1>Hallo <?php echo htmlspecialchars($username); ?></h1>
    <p>Selamat Datang Di Halaman Latihan Belajar Session dan User Authentication!</p>
    
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>