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

if (isset($_POST["cari"])) {
    $anime = cari($_POST["keyword"]);
}
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
    <form action="" method="post">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari!</button>
    </form>
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

        <?Php if (empty($anime)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>

            <?php $i = 1; ?>

            <?php foreach ($anime as $anm) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $anm['id']; ?>"><button>Ubah</button></a>
                        <a href="hapus.php?id=<?= $anm['id']; ?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $anm['img']; ?>" width="100px"></td>
                    <td><?= $anm['nama']; ?></td>
                    <td><?= $anm['anime']; ?></td>
                    <td><?= $anm['pengarang']; ?></td>
                    <td><?= $anm['rilis']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>

</html>