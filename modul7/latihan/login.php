<?php
session_start();
require 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    
    if (mysqli_num_rows($result) === 1) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        $error = "Username atau Password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <h2>Halaman Login User yang Terdaftar!</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="">
        <label>Username</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit" name="login">Login!</button>
    </form>
    <br>
    <a href="register.php">Buat akun baru!</a>
</body>
</html>