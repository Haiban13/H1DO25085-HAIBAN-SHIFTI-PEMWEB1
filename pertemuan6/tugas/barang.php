<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['hapus'])) {
        $q = mysqli_prepare($db, 'DELETE FROM barang WHERE id=?');
        mysqli_stmt_bind_param($q, 'i', $_POST['id']);
    } else {
        $id = (int)($_POST['id'] ?? 0);
        $nama = trim($_POST['nama']);
        $harga = (int)$_POST['harga'];

        if ($id) {
            $q = mysqli_prepare($db, 'UPDATE barang SET nama=?, harga=? WHERE id=?');
            mysqli_stmt_bind_param($q, 'sii', $nama, $harga, $id);
        } else {
            $q = mysqli_prepare($db, 'INSERT INTO barang (nama, harga) VALUES (?, ?)');
            mysqli_stmt_bind_param($q, 'si', $nama, $harga);
        }
    }

    mysqli_stmt_execute($q);
    header('Location: barang.php');
    exit;
}

$edit = isset($_GET['edit'])
    ? mysqli_fetch_assoc(mysqli_query($db, 'SELECT * FROM barang WHERE id=' . (int)$_GET['edit']))
    : null;
$rows = mysqli_query($db, 'SELECT * FROM barang ORDER BY id');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>CRUD Barang</title>
</head>
<body>
    <h1>Data Barang</h1>

    <form method="post">
        <input type="hidden" name="id" value="<?= e($edit['id'] ?? '') ?>">
        <label>
            Nama
            <input name="nama" required value="<?= e($edit['nama'] ?? '') ?>">
        </label>
        <label>
            Harga
            <input type="number" name="harga" min="0" required value="<?= e($edit['harga'] ?? '') ?>">
        </label>
        <button>Simpan</button>
        <a href="barang.php">Batal</a>
    </form>

    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php while ($r = mysqli_fetch_assoc($rows)): ?>
            <tr>
                <td><?= e($r['id']) ?></td>
                <td><?= e($r['nama']) ?></td>
                <td>Rp<?= number_format($r['harga'], 0, ',', '.') ?></td>
                <td>
                    <a href="?edit=<?= e($r['id']) ?>">Edit</a>
                    <form method="post" style="display:inline">
                        <input type="hidden" name="id" value="<?= e($r['id']) ?>">
                        <button name="hapus" onclick="return confirm('Hapus barang ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endwhile ?>
    </table>

    <p>
        <a href="index.php">Halaman index</a> ·
        <a href="pembeli.php">Pembeli</a> ·
        <a href="kurir.php">Kurir</a>
    </p>
</body>
</html>
