<?php
    // Mohamad Egi Rahayu
    // 203040045
    // https://github.com/Egirahayu/pw2021_203040045
    // Pertemuan 3 (22 Februari 2021)
    // Menjelaskan tentang PHP Dasar - Control Flow (Struktur Kendali)

    // pengulangan
    // for
    // while
    // do.. while
    // foreach : pengulangan khusus array

    // for ( $i = 0; $i < 5; $i++) {
    //     echo "Hello World! <br>";
    // }

    // $i = 0;
    // while( $i < 5 ) {
    //     echo "Hello World! <br>";
    // }

    // $i = 0;
    // while( $i < 5 ) {
    //     echo "Hello World! <br>";
    // $i++;
    // }

    // $i = 10;
    // while( $i < 5 ) {
    //     echo "Hello World! <br>";
    // $i++;
    // }

    // $i = 0;
    // do {
    //     echo "Hello World! <br>";
    // $i++;
    // } while( $i < 5);

    // $i = 10;
    // do {
    //     echo "Hello World! <br>";
    // $i++;
    // } while( $i < 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- <?php 
            for( $i = 1; $i <=  3; $i++) {
                echo "<tr>";
                for ( $j = 1; $j <= 5; $j++) {
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?> -->

        <!-- <?php for( $i = 1; $i <= 3; $i++ ) { ?>
            <tr>
                <?php for( $j = 1; $j <= 5; $j++ ) { ?>
                    <td><?php echo"$i, $j" ?></td>
                <?php } ?>
            </tr>
        <?php } ?> -->

        <!-- <?php for( $i = 1; $i <= 3; $i++ ) : ?>
            <tr>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td><?= "$i, $j" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?> -->

        <!-- <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 1 ) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td><?= "$i, $j" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?> -->

        <!-- <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <?php if( $i % 2 == 0 ) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td><?= "$i, $j" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?> -->

        <!-- <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
        </tr> -->
    </table>
</body>
</html>