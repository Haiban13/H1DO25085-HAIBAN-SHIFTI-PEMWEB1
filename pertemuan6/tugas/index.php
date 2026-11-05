<?php
require 'koneksi.php';

$rows = mysqli_query($db, '
    SELECT b.id, b.nama AS barang, p.nama AS pembeli, k.nama AS kurir
    FROM barang b
    JOIN pembeli p ON p.id = b.id
    JOIN kurir k ON k.id = b.id
    ORDER BY b.id
');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data COD</title>
</head>
<body>
    <h1>Menampilkan data dari database!</h1>

    <nav>
        <a href="barang.php">Barang</a> ·
        <a href="pembeli.php">Pembeli</a> ·
        <a href="kurir.php">Kurir</a>
    </nav>

    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Nama Pembeli</th>
            <th>Nama Kurir</th>
        </tr>
        <?php while ($r = mysqli_fetch_assoc($rows)): ?>
            <tr>
                <td><?= e($r['id']) ?></td>
                <td><?= e($r['barang']) ?></td>
                <td><?= e($r['pembeli']) ?></td>
                <td><?= e($r['kurir']) ?></td>
            </tr>
        <?php endwhile ?>
    </table>
</body>
</html>
