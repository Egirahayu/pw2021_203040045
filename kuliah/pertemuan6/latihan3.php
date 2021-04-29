<?php
    // Mohamad Egi Rahayu
    // 203040045
    // https://github.com/Egirahayu/pw2021_203040045
    // Pertemuan 6 (12 Maret 2021)
    // Menjelaskan tentang PHP Dasar - Membuat Array assosciative

    $anime = [
        [
            "nama" => "Monkey D. Luffy",
            "anime" => "One Piece",
            "rilis" => "1997",
            "status" => "On-Going",
            "gambar" => "Luffy.jpg",
        ],
        [
            "nama" => "Uzumaki Naruto",
            "anime" => "Naruto Shippuden",
            "rilis" => "2007",
            "status" => "Tamat",
            "gambar" => "Naruto.jpg",
        ],
        [
            "nama" => "Eren Yeager",
            "anime" => "Attack On Titan (Shingeki No Kyojin)",
            "rilis" => "2013",
            "status" => "On-Going",
            "gambar" => "Eren.jpg",
        ],
        [
            "nama" => "Asta",
            "anime" => "Black Clover",
            "rilis" => "2015",
            "status" => "On-Going",
            "gambar" => "Asta.jpg",
        ],
        [
            "nama" => "Aang",
            "anime" => "Avatar : The Last Airbender",
            "rilis" => "2005",
            "status" => "Tamat",
            "gambar" => "Aang.jpg",
        ]
    ];
?>

<!DOCTYPE html>
<head>
    <title>Main Character Anime</title>
</head>
<body>
    <h1>Main Character Anime</h1>

    <?php foreach( $anime as $anm ) : ?>
        <ul>
            <li>
                <img src="img/<?= $anm["gambar"];?>"">
            </li>
            <li>Nama Character :  <?= $anm["nama"]; ?> </li>
            <li>Anime <?= $anm["anime"]; ?> </li>
            <li>Rilis :  <?= $anm["rilis"]; ?> </li>
            <li>Status :  <?= $anm["status"]; ?> </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>