<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    // Mengecek apakah data ada id yang dikirimkan
    // Jika tidak, maka akan dikembalikan ke halaman index.php
    if( !isset($_GET['id'])) {
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Anime</title>
</head>
<body class="grey darken-3">
    <div class="container">
        <div class="row">
            <div class="col m3">
                <div class="card">
                    <div class="card-image">
                        <img src="../assets/img/<?= $anime["img"]; ?>">
                    </div>
                    <div class="card-content red darken-4 white-text">
                        <p>Nama : <?= $anime["nama"]; ?></p>
                        <p><?= $anime["anime"]; ?></p>
                        <p>Rilis : <?= $anime["rilis"]; ?></p>
                        <p>Status : <?= $anime["status"]; ?></p>
                    </div>
                    <div class="card-action green light-2">
                        <a href="../index.php" class="waves-effect waves-light skyblue btn">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>