<?php
include("koneksi.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $konten = $_POST['konten'];

    mysqli_query($koneksi, "UPDATE posts SET judul='$judul', konten='$konten' WHERE id=$id");
    header("Location: index.php");
}

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM posts WHERE id=$id");
$data = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Post Berita</title>
</head>
<body>
    <h1>Edit Post Berita!</h1>
    <a href="index.php">Batal</a>
    <br/><br/>
    <form method="post" action="edit_post.php">
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" value="<?php echo htmlspecialchars($data['judul']); ?>" required></td>
            </tr>
            <tr>
                <td valign="top">Konten</td>
                <td><textarea name="konten" rows="10" cols="40" required><?php echo htmlspecialchars($data['konten']); ?></textarea></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $data['id']; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
