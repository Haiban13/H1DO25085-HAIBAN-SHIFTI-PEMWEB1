<!DOCTYPE html>
<html>
<head>
    <title>Percobaan 4 Functions & Statements</title>
</head>
<body>
<?php
// 1. Fungsi Sederhana
function text() {
    echo "Hello world! <br><br>";
}
text();

// 2. Fungsi dengan Parameter
function olahraga($sport) {
    echo "Saya bermain $sport <br>";
}
olahraga("sepak bola");
olahraga("basket");
olahraga("voli");
olahraga("badminton");
olahraga("golf");
echo "<br>";

// 3. Fungsi dengan Return Value dan Type Hinting
function penjumlahan(int $a, int $b) {
    return $a + $b;
}
echo penjumlahan(5, 2) . "<br><br>";

// 4. Fungsi dengan Pass by Reference
function tambah_dua(&$value) {
    $value += 2;
}
$num = 4;
tambah_dua($num);
echo $num . "<br><br>";

// 5. Fungsi dengan Pass by Reference dan Switch-Case Statement
function lahir(&$bulanKelahiran) {
    switch ($bulanKelahiran) {
        case "Januari":
            echo "Anda lahir di bulan Januari!";
            break;
        case "Februari":
            echo "Anda lahir di bulan Februari!";
            break;
        case "Maret":
            echo "Anda lahir di bulan Maret!";
            break;
        default:
            echo "Bulan kelahiran Anda bukan Januari, Februari ataupun Maret";
    }
}

$bulan = "November";
lahir($bulan);
?>
</body>
</html>
