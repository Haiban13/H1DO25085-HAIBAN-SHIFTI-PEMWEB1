<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['hapus'])) {
        $q = mysqli_prepare($db, 'DELETE FROM kurir WHERE id=?');
        mysqli_stmt_bind_param($q, 'i', $_POST['id']);
    } else {
        $id = (int)($_POST['id'] ?? 0);
        $nama = trim($_POST['nama']);
        $hp = trim($_POST['nomor_hp']);

        if ($id) {
            $q = mysqli_prepare($db, 'UPDATE kurir SET nama=?, nomor_hp=? WHERE id=?');
            mysqli_stmt_bind_param($q, 'ssi', $nama, $hp, $id);
        } else {
            $q = mysqli_prepare($db, 'INSERT INTO kurir (nama, nomor_hp) VALUES (?, ?)');
            mysqli_stmt_bind_param($q, 'ss', $nama, $hp);
        }
    }

    mysqli_stmt_execute($q);
    header('Location: kurir.php');
    exit;
}

$edit = isset($_GET['edit'])
    ? mysqli_fetch_assoc(mysqli_query($db, 'SELECT * FROM kurir WHERE id=' . (int)$_GET['edit']))
    : null;
$rows = mysqli_query($db, 'SELECT * FROM kurir ORDER BY id');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>CRUD Kurir</title>
</head>
<body>
    <h1>Data Kurir</h1>

    <form method="post">
        <input type="hidden" name="id" value="<?= e($edit['id'] ?? '') ?>">
        <input name="nama" placeholder="Nama" required value="<?= e($edit['nama'] ?? '') ?>">
        <input name="nomor_hp" placeholder="Nomor HP" required value="<?= e($edit['nomor_hp'] ?? '') ?>">
        <button>Simpan</button>
        <a href="kurir.php">Batal</a>
    </form>

    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Nomor HP</th>
            <th>Aksi</th>
        </tr>
        <?php while ($r = mysqli_fetch_assoc($rows)): ?>
            <tr>
                <td><?= e($r['id']) ?></td>
                <td><?= e($r['nama']) ?></td>
                <td><?= e($r['nomor_hp']) ?></td>
                <td>
                    <a href="?edit=<?= e($r['id']) ?>">Edit</a>
                    <form method="post" style="display:inline">
                        <input type="hidden" name="id" value="<?= e($r['id']) ?>">
                        <button name="hapus" onclick="return confirm('Hapus kurir ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endwhile ?>
    </table>

    <p>
        <a href="index.php">Halaman index</a> ·
        <a href="barang.php">Barang</a> ·
        <a href="pembeli.php">Pembeli</a>
    </p>
</body>
</html>
