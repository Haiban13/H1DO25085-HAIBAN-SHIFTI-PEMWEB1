<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Array Multidimensi</title>
</head>
<body>
<?php
// Deklarasi array multidimensi dengan 3 elemen
$data_mahasiswa = array(
    array("nama" => "Romi",  "asal" => "Bogor",  "umur" => 22),
    array("nama" => "Anto",  "asal" => "Depok",  "umur" => 23),
    array("nama" => "Putri", "asal" => "Bangka", "umur" => 21)
);

// Iterasi/Looping menampilkan data sesuai format keluaran
foreach ($data_mahasiswa as $mhs) {
    echo $mhs["nama"] . "<br>";
    echo "Asal: " . $mhs["asal"] . "<br>";
    echo "Umur: " . $mhs["umur"] . "<br><br>";
}
?>
</body>
</html>
