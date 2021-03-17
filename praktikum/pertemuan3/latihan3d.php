<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    $terkenal = [
        [
            "nama" => "Cristiano Ronaldo",
            "club" => "Juventus",
            "main" => "100",
            "gol" => "76",
            "assist" => "30"
        ],
        [
            "nama" => "Lionel Messi",
            "club" => "Barcelona",
            "main" => "120",
            "gol" => "80",
            "assist" => "12"
        ],
        [
            "nama" => "Luca Modric",
            "club" => "Real Madrid",
            "main" => "87",
            "gol" => "12",
            "assist" => "48"
        ],
        [
            "nama" => "Mohammad Salah",
            "club" => "Liverpool",
            "main" => "90",
            "gol" => "103",
            "assist" => "8"
        ],
        [
            "nama" => "Neymar Jr",
            "club" => "Paris Saint Germain",
            "main" => "109",
            "gol" => "56",
            "assist" => "15"
        ],
        [
            "nama" => "Sadio Mane",
            "club" => "Liverpool",
            "main" => "63",
            "gol" => "30",
            "assist" => "70"
        ],
        [
            "nama" => "Zlatan Ibrahimovic",
            "club" => "Ac Milan",
            "main" => "100",
            "gol" => "10",
            "assist" => "12"
        ]
    ];

    $totalMain = 0;
    $totalGol = 0;
    $totalAssist = 0;
    for( $j = 0; $j < count( $terkenal ); $j++) {
        $totalMain += $terkenal[$j]["main"];
        $totalGol += $terkenal[$j]["gol"];
        $totalAssist += $terkenal[$j]["assist"];
    }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Latihan 3D</title>
    <style>
        table, th, td {
            border : 2px solid black;
            padding : 5px;
            border-collapse : collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th> NO </th>
            <th> NAMA </th>
            <th> CLUB </th>
            <th> MAIN </th>
            <th> GOL </th>
            <th> ASSIST </th>
        </tr>

        <?php foreach( $terkenal as $no => $pemain) : ?>
            <tr>
                <td> <?= $no+1; ?> </td>
                <td> <?= $pemain["nama"]; ?> </td>
                <td> <?= $pemain["club"]; ?> </td>
                <td> <?= $pemain["main"]; ?> </td>
                <td> <?= $pemain["gol"]; ?> </td>
                <td> <?= $pemain["assist"]; ?> </td>
            </tr>
        <?php endforeach; ?>

        <tr style="font-weight:bold">
            <td>#</td>
            <td colspan="2" style="text-align: center;">Jumlah</td>
            <td><?= $totalMain; ?></td>
            <td><?= $totalGol; ?></td>
            <td><?= $totalAssist; ?></td>
        </tr>
    </table>
</body>
</html>