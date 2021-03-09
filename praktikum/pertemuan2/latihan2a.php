<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    function gantiStyle($tulisan, $style1, $style2) {
        return "<div class=\"$style1 $style2\">$tulisan</div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2A</title>
    <style>
        .tulisan {
            color : #8c782d;
            font : italic bolder 28px arial;
        }

        .wrapper {
            border : 1px solid black;
            padding : 10px;
            width : fit-content;
            box-shadow : 0 0 5px rgba(0, 0, 0, 20)
        }
    </style>
</head>
<body>
    <?php echo gantiStyle("Selamat datang di praktikum PW", "tulisan", "wrapper") ?>
</body>
</html>