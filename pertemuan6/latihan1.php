<?php
    // Mohamad Egi Rahayu
    // 203040045
    // https://github.com/Egirahayu/pw2021_203040045
    // Pertemuan 5 (11 Maret 2021)
    // Menjelaskan tentang PHP Dasar - Review array

    // array
    // membuat array
    // $hari = array("Senin", "Selasa", "Rabu");
    // $bulan = ["Januari", "Februari", "Maret"];
    // $arr = [100, "teks", true];

    // menampilkan array
    // versi debugging
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";

    // Menampilkan 1 element pada array
    // echo $arr[0];
?>

<!DOCTYPE html>
<head>
    <title>Latihan Array</title>
    <style>
        .kotak {
            width : 30px;
            height : 30px;
            background-color : #BADA55;
            text-align : center;
            line-height : 30px;
            margin : 3px;
            float : left;
            transition : 0.5s;
        }

        .kotak:hover {
            transform :rotate(360deg);
            border-radius : 50%;
        }

        .clear {
            clear : both;
        }
    </style>
</head>
<body>
    <?php 
        // $angka = [1, 2, 3, 4, 5, 6, 7, 8, 9]; 
        // $angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
        // echo $angka[1][1];
        // echo $angka[2][2];

        $angka = [
            [1, 2, 3], 
            [4, 5, 6], 
            [7, 8, 9]
        ];
    ?>

    <!-- <?php foreach( $angka as $a ) : ?>
        <div class ="kotak"> <?= $a; ?> </div>
    <?php endforeach; ?> -->

    <?php foreach( $angka as $a ) : ?>
        <?php foreach( $a as $b ) : ?>
            <div class ="kotak"> <?= $b; ?> </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>