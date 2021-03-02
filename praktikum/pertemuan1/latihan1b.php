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
    <title>Latihan 1B</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for( $i = 1; $i <= 5; $i++ ) : ?>
                <th>Kolom <?= $i;?></th>
            <?php endfor; ?>
        </tr>
                
            <!-- tambahkan baris kode php untuk menampilkan bagian body table -->
        <?php for( $i = 1; $i <= 5; $i++ ) : ?>
            <tr>
                <th>Baris <?= $i;?></th>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td>Baris <?=$i; ?>, Kolom <?=$j; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>