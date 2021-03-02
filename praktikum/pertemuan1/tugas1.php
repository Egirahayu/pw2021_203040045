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
    <title>Tugas 1</title>
    <style>
        .kotak {
            width : 50px;
            height : 50px;
            display : inline-block;
            border : 2px solid black;
        }

        .biru {
            background-color : lightblue;
        }

        .salmon {
            background-color : salmon;
        }
    </style>
</head>
<body>
    <?php for ($y = 1; $y <= 6; $y++) :
          for ($z = 1; $z <= 6; $z++) :

        if ($y %2==!0) :
            if ($z %2==!0) : ?>
                <div class="kotak biru"></div>
            <?php else: ?>
                <div class="kotak salmon"></div>
            <?php endif; ?>
        
        <?php else:
            if ($z %2==!0) : ?>
                <div class="kotak salmon"></div>
            <?php else: ?>
                <div class="kotak biru"></div>
            <?php endif; ?>
        <?php endif; ?>

        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>