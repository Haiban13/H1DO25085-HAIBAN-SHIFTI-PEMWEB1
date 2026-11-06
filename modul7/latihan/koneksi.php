<?php
$host = "localhost";
$user = "root";
$pass = "h13dbroot";
$db   = "latihan"; // Sesuaikan nama database Anda

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>