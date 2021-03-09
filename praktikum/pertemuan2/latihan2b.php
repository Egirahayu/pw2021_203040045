<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    $jawabanIsset = "Isset adalah = Function yang digunakan untuk menyatakan variabel sudah di set atau tidak. <br><br>";
    $jawabanEmpty = "Empty adalah = Function yang digunakan untuk memeriksa variabel kosong atau tidak.";

    function soal($style) {
        return "<div class =\"$style\">" . $GLOBALS['jawabanIsset'] . $GLOBALS['jawabanEmpty'] . "</div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2B</title>
    <style>
        .style {
            padding : 10px;
            font-size : 18px;
            width : fit-content;
            border : 1px solid black
        }
    </style>
</head>
<body>
    <?php echo soal("style"); ?>
</body>
</html>