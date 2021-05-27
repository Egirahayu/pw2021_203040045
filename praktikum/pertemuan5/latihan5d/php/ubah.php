<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
// Shift : PemrogramanWeb_Jumat10
?>

<?php
require 'functions.php';

$id = $_GET['id'];
$anm = query("SELECT * FROM anime WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                  </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
                  </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <title>Anime</title>
</head>

<body>
    <h3>Form Ubah Data Main Character Anime</h3>

    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $anm["id"] ?>">
        <ul>
            <li>
                <label for="img">Image :</label><br>
                <input type="text" name="img" id="img" required value="<?= $anm["img"]; ?>"><br><br>
            </li>
            <li>
                <label for="nama">Nama MC :</label><br>
                <input type="text" name="nama" id="nama" required value="<?= $anm["nama"]; ?>"><br><br>
            </li>
            <li>
                <label for="anime">Anime :</label><br>
                <input type="text" name="anime" id="anime" required value="<?= $anm["anime"]; ?>"><br><br>
            </li>
            <li>
                <label for="pengarang">Pengarang :</label><br>
                <input type="text" name="pengarang" id="pengarang" required value="<?= $anm["pengarang"]; ?>"><br><br>
            </li>
            <li>
                <label for="rilis">Rilis :</label><br>
                <input type="text" name="rilis" id="rilis" required value="<?= $anm["rilis"]; ?>"><br><br>
            </li>
            <br>
            <button type="submit" name="ubah">Ubah Data!</button>
            <button type="submit">
                <a href="admin.php" style='text-decoration: none; color: black;'>Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>