<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
// Shift : PemrogramanWeb_Jumat10
?>

<?php
// Menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan query dari database
$anime = query("SELECT * FROM anime");
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">
    <title>Anime</title>
</head>

<body>
    <div class="add">
        <a href="tambah.php"><button>Tambah Data</button></a>
    </div>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Opsi</th>
            <th>Image</th>
            <th>Nama MC</th>
            <th>Anime</th>
            <th>Pengarang</th>
            <th>Rilis</th>
        </tr>
        <?php $i = 1; ?>

        <?php foreach ($anime as $anm) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $anm['img']; ?>" width="100px"></td>
                <td><?= $anm['nama']; ?></td>
                <td><?= $anm['anime']; ?></td>
                <td><?= $anm['pengarang']; ?></td>
                <td><?= $anm['rilis']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>