<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
// Shift : PemrogramanWeb_Jumat10
?>

<?php
// Mengecek apakah data ada id yang dikirimkan
// Jika tidak, maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$anime = query("SELECT * FROM anime WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <title>Anime</title>
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $anime["img"]; ?>" width="250px">
        </div>
        <div class="keterangan">
            <p>Nama : <?= $anime["nama"]; ?></p>
            <p>Anime (<?= $anime["anime"]; ?>)</p>
            <p>Pengarang : <?= $anime["pengarang"]; ?></p>
            <p>Rilis : <?= $anime["rilis"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>