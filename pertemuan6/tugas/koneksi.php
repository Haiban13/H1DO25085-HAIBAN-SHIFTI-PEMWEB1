<?php
$db = mysqli_connect('localhost', 'root', '', 'modul_6_tugas') or die('Koneksi database gagal.');
function e($value) { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); }
