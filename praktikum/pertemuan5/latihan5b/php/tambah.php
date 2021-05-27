<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
// Shift : PemrogramanWeb_Jumat10
?>


<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                  </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
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
    <h3>Form Tambah Data Main Character Anime</h3>

    <form action="" method="post">
        <ul>
            <li>
                <label for="img">Image :</label><br>
                <input type="text" name="img" id="img" required><br><br>
            </li>
            <li>
                <label for="nama">Nama MC :</label><br>
                <input type="text" name="nama" id="nama" required><br><br>
            </li>
            <li>
                <label for="anime">Anime :</label><br>
                <input type="text" name="anime" id="anime" required><br><br>
            </li>
            <li>
                <label for="pengarang">Pengarang :</label><br>
                <input type="text" name="pengarang" id="pengarang" required><br><br>
            </li>
            <li>
                <label for="rilis">Rilis :</label><br>
                <input type="text" name="rilis" id="rilis" required><br><br>
            </li>
            <br>
            <button type="submit" name="tambah">Tambah Data!</button>
            <button type="submit">
                <a href="admin.php" style='text-decoration: none; color: black;'>Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>