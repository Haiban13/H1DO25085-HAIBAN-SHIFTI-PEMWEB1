<!DOCTYPE html>
<html>
<head>
    <title>Percobaan 1 Variabel</title>
</head>
<body>
<?php
// Inisialisasi variabel name
$name = "Soedirman"; // Ganti "Soedirman" dengan nama Anda

// Mendemonstrasikan penggabungan string (concatenation)
echo "Nama saya adalah " . $name . "<br>";

// PHP bersifat case-sensitive terhadap nama variabel
$NAME = "Soedirman (Capital)";
$Name = "Soedirman (Titlecase)";

echo "Nama saya adalah " . $NAME . "<br>";
echo "Nama saya adalah " . $Name . "<br><br>";

$text = "Universitas Jenderal Soedirman";
echo "Saya merupakan mahasiswa $text <br>";
echo "Saya merupakan mahasiswa " . $text . "<br><br>";

// Re-assign (mengubah nilai) variabel
$contoh = "Merah";
$contoh = "Biru";
echo $contoh . "<br><br>";

// Variabel Angka
$number1 = 123;
$number2 = 456;
$number3 = 789;
echo $number1 . $number2 . $number3 . "<br>";

// Deklarasi variabel sebelum ditampilkan
$var = "Ini merupakan percobaan variabel";
echo $var;
?>
</body>
</html>
