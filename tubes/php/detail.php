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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- css lokal -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- shortcut icon -->
    <link rel="shortcut icon" href="../assets/img/logo/ER.png">
    <title>Halaman Detail</title>
</head>

<body class="grey darken-3">
    <div class="container">
        <h3 style="margin-left: -10px">Detail Main Character</h3>

        <div class="row">
            <div class="col m5">
                <div class="card">
                    <div class="card-image">
                        <img src="../assets/img/<?= $anime['img']; ?>" width="250px">
                    </div>
                    <div class="card-content red darken-4 white-text">
                        <p>Nama : <?= $anime['nama']; ?></p>
                        <p>Anime (<?= $anime['anime']; ?>)</p>
                        <p>Pengarang : <?= $anime['pengarang']; ?></p>
                        <p>Rilis : <?= $anime['rilis']; ?></p>
                    </div>
                    <div class="card-action green light-2">
                        <a href="list.php" class="waves-effect waves-light skyblue btn">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- script materialize -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>