<?php
require 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // Disarankan menggunakan password_hash()
    $konfirmasi = $_POST['konfirmasi'];

    if ($password === $konfirmasi) {
        // Cek username apakah sudah ada
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        if (mysqli_num_rows($result) > 0) {
            $error = "Username sudah terdaftar!";
        } else {
            $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
            if (mysqli_query($conn, $query)) {
                header("Location: login.php");
                exit();
            } else {
                $error = "Registrasi gagal!";
            }
        }
    } else {
        $error = "Password dan konfirmasi password tidak cocok!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
</head>
<body>
    <h2>Halaman Registrasi Akun Mahasiswa</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="">
        <label>Username</label><br>
        <input type="text" name="username" required><br><br>
        
        <label>Password</label><br>
        <input type="password" name="password" required><br><br>
        
        <label>Konfirmasi Password</label><br>
        <input type="password" name="konfirmasi" required><br><br>
        
        <button type="submit" name="register">Register!</button>
    </form>
    <br>
    <a href="login.php">Sudah memiliki akun?</a>
</body>
</html>