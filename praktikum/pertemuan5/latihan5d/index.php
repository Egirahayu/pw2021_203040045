<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    // Menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // Melakukan query dari database
    $anime = query("SELECT * FROM anime");
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Anime</title>
</head>
<body>
    <div class="container">
        <?php foreach( $anime as $anm) : ?>
            <p class="nama">
                <a href="php/detail.php?id= <?= $anm['id'] ?>">
                    <?= $anm["nama"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>