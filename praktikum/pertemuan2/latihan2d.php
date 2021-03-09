<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    function hitungDeterminan($a, $b, $c, $d) {
        $hasil = ($a * $d) - ($b * $c);

        echo "<table style = 'border-left : ; border-right : ;' cellspacing = '5' cellpadding = '5'>
                <tr>
                    <td> $a </td>
                    <td> $b </td>
                </tr>
                <tr>
                    <td> $c </td>
                    <td> $d </td>
                </tr>
             </table>";
        echo "<b>Determinan dari matriks tersebut adalah $hasil</b>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2D</title>
</head>
<body>
    <?php hitungDeterminan(5, 2, 7, 8) ?>
</body>
</html>