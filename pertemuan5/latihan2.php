<?php
    // Mohamad Egi Rahayu
    // 203040045
    // https://github.com/Egirahayu/pw2021_203040045
    // Pertemuan 5 (11 Maret 2021)
    // Menjelaskan tentang PHP Dasar - Array (Pengulangan Array)

    // Pengulangan pada array
    // for / foreach
    // $angka = [3, 2, 15, 20, 11, 77, 89];
    // $angka = [3, 2, 15, 20, 11, 77, 89, 8];
    // $angka = [3, 2, 15, 20, 11];
    $angka = [3, 2, 15, 20, 11, 88, 1, 45];
?>

<!DOCTYPE html>
<head>
    <title>Latihan 2</title>
    <style>
        .kotak {
            width : 50px;
            height : 50px;
            background-color : salmon;
            text-align : center;
            line-height : 50px;
            margin : 3px;
            float : left;
        }

        .clear{ clear : both; }
    </style>
</head>
<body>
    <!-- <?php for( $i = 0; $i < 7; $i++ ) { ?>
        <div>3</div>
        <div class ="kotak"> <?php echo $angka[$i]; ?></div>
    <?php } ?> -->

    <?php for( $i = 0; $i < count($angka); $i++ ) { ?>
        <div class ="kotak"> <?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $angka as $a ) { ?>
        <div class ="kotak"> <?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $angka as $a ) : ?>
        <div class ="kotak"> <?php echo $a; ?></div>
    <?php endforeach; ?>
</body>
</html>