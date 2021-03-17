<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    $terkenal = [
       "Cristiano Ronaldo" => "Juventus",
       "Lionel Messi" => "Barcelona",
       "Luka Modric" => "Real Madrid",
       "Mohammad Salah" => "Liverpool",
       "Neymar Jr" => "Paris Saint Germain",
       "Sadio Mane" => "Liverpool",
       "Zlatan Ibrahimovic" => "Ac Milan",
    ];
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Latihan 3C</title>
    <style>
        table tr td {
            padding-right : 14px;
        }
        
        * {
            font-size : 18px;
        }
    </style>
</head>
<body>
    <h1>Daftar pemain bola terkenal dan clubnya</h1>

    <table>
        <?php foreach ($terkenal as $nama => $club) : ?>
            <tr>
                <td><b><?= $nama; ?></b></td>
                <td>:</td>
                <td><?= $club; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>