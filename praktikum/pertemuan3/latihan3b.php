<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    $terkenal = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Latihan 3B</title>
</head>
<body>
    <h1>Daftar pemain bola terkenal</h1>

    <ol>
        <li> <?= $terkenal[0]; ?> </li>
        <li> <?= $terkenal[1]; ?> </li>
        <li> <?= $terkenal[2]; ?> </li>
        <li> <?= $terkenal[3]; ?> </li>
        <li> <?= $terkenal[4]; ?> </li>
    </ol>

    <?php
        array_push($terkenal, "Luca Modric", "Sadio Mane"); // Menambah elemen pada array
        sort($terkenal); // Mengurutkan nama sesuai abjad (A-Z)
    ?>

    <h1>Daftar pemain bola terkenal baru</h1>

    <ol>
        <li> <?= $terkenal[0]; ?> </li>
        <li> <?= $terkenal[1]; ?> </li>
        <li> <?= $terkenal[2]; ?> </li>
        <li> <?= $terkenal[3]; ?> </li>
        <li> <?= $terkenal[4]; ?> </li>
        <li> <?= $terkenal[5]; ?> </li>
        <li> <?= $terkenal[6]; ?> </li>
    </ol>
</body>
</html>