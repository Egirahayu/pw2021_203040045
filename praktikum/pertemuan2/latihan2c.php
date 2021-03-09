<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    function tumpukanbola($tumpukan) {
        for($x = 1; $x <= $tumpukan; $x++) {
            for($y = 1; $y <= $x; $y++) {
                echo "<div class=\"bola\">$x</div>";
            }
            echo "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2C</title>
    <style>
        .bola {
            height : 50px;
            width : 50px;
            margin : 5px 5px 0 0;
            background-color : salmon;
            text-align : center;
            line-height : 50px;
            border : 1px solid black;
            display : inline-block;
            border-radius : 100%;
        }
    </style>
</head>
<body>
    <?php tumpukanbola(7) ?>
</body>
</html>