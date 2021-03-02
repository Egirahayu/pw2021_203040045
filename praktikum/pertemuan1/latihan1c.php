<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1C</title>
    <style>
        h3 {
            background-color : salmon;
            display : inline-block;
            width : 50px;
            height : 50px;
            line-height : 50px;
            text-align : center;
            border-radius : 100%;
            border : 2px solid black;
            margin : 0px 5px 10px 0px;
        }
    </style>
</head>
<body>
    <?php for ( $x = 1; $x <= 3; $x++) : ?>
        <?php for ($y = 1; $y <= $x; $y++) : ?>
            <h3><?= $x; ?></h3>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>