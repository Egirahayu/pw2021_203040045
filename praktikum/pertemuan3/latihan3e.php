<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    $anime = [
        [
            "nama" => "Monkey D. Luffy",
            "anime" => "One Piece",
            "rilis" => "1999",
            "status" => "On-Going",
            "gambar" => "Luffy.png"
        ],
        [
            "nama" => "Uzumaki Naruto",
            "anime" => "Naruto Shippuden",
            "rilis" => "2007",
            "status" => "Completed",
            "gambar" => "Naruto.png"
        ],
        [
            "nama" => "Eren Yeager",
            "anime" => "Attack On Titan (Shingeki No Kyojin)",
            "rilis" => "2013",
            "status" => "On-Going",
            "gambar" => "Eren.png"
        ],
        [
            "nama" => "Asta",
            "anime" => "Black Clover",
            "rilis" => "2017",
            "status" => "On-Going",
            "gambar" => "Asta.png"
        ],
        [
            "nama" => "Aang",
            "anime" => "Avatar : The Last Airbender",
            "rilis" => "2005",
            "status" => "Completed",
            "gambar" => "Aang.png"
        ],
        [
            "nama" => "Saitama",
            "anime" => "One Punch Man",
            "rilis" => "2015",
            "status" => "On-Going",
            "gambar" => "Saitama.png"
        ],
        [
            "nama" => "Uzumaki Boruto",
            "anime" => "Boruto : Naruto Next Generation",
            "rilis" => "2017",
            "status" => "On-Going",
            "gambar" => "Boruto.png"
        ],
        [
            "nama" => "Son Goku",
            "anime" => "Dragon Ball",
            "rilis" => "1986",
            "status" => "Completed",
            "gambar" => "Goku.png"
        ],
        [
            "nama" => "Tanjiro Kamado",
            "anime" => "Demon Slayer : Kimetsu No Yaiba",
            "rilis" => "2019",
            "status" => "On-Going",
            "gambar" => "Tanjiro.png"
        ],
        [
            "nama" => "Yuji Itadori",
            "anime" => "Jujutsu Kaisen",
            "rilis" => "2019",
            "status" => "On-Going",
            "gambar" => "Yuji.png"
        ]
    ];
    sort($anime);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Anime</title>
    <style>
        .container {
            width : 1500px;
        }

        h3 {
            margin-bottom : 25px;
            font-size : 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="center">List Main Character (MC) Anime</h3>
        
        <table class="striped">
            <thead>
                <tr class="orange darken-2">
                    <th class="center">No</th>
                    <th class="center">Image</th>
                    <th>Nama MC</th>
                    <th>Anime</th>
                    <th>Rilis</th>
                    <th class="center">Status Anime</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach( $anime as $no => $anm) : ?>
                        <tr class="grey darken-3 white-text">
                            <td class="center"> <?= $no+1; ?> </td>
                            <td class="center"> <img src="img/<?= $anm["gambar"]; ?>"></td>
                            <td> <?= $anm["nama"]; ?> </td>
                            <td> <?= $anm["anime"]; ?> </td>
                            <td> <?= $anm["rilis"]; ?> </td>
                            <td class="center "> <a class="waves-effect waves-light btn"> <?= $anm["status"]; ?> </a> </td>
                        </tr>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>