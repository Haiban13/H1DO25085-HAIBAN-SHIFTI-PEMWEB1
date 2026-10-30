<?php
include("koneksi.php");
$result = mysqli_query($koneksi, "SELECT * FROM posts ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Post News Ter-Update!</title>
</head>
<body>
    <h1>Post News Ter-Update!</h1>
    <p><a href="tambah_post.php">Tambah Post</a></p>
    
    <ol>
    <?php while ($row = mysqli_fetch_array($result)) { ?>
        <li>
            <strong><?php echo htmlspecialchars($row['judul']); ?></strong>
            <a href="edit_post.php?id=<?php echo $row['id']; ?>">Edit</a>
            <a href="delete_post.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin menghapus post ini?');">Delete</a>
            <?php 
                $paragraphs = explode("\n\n", $row['konten']);
                foreach ($paragraphs as $p) {
                    echo "<p>" . nl2br(htmlspecialchars($p)) . "</p>";
                }
            ?>
        </li>
    <?php } ?>
    </ol>
</body>
</html>
