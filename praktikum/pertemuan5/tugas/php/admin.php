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

if (isset($_GET["cari"])) {
    $anime = cari($_GET["keyword"]);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Anime</title>
</head>

<body>
    <div class="container">
        <h3 class="center">List Main Character (MC) Anime</h3>

        <div class="row">
            <div class="col m9 s12">
                <div class="add">
                    <a href="tambah.php" class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">add</i></a>
                </div>
            </div>
            <div class="col m3 s12">
                <div class="search">
                    <form action="" method="get">
                        <input type="text" name="keyword" size="30" autofocus>
                        <button type="submit" name="cari">Cari!</button>
                    </form>
                </div>
            </div>
        </div>

        <table class="striped">
            <tr class="orange darken-2">
                <th class="center">No</th>
                <th class="center">Opsi</th>
                <th class="center">Image</th>
                <th>Nama MC</th>
                <th>Anime</th>
                <th>Pengarang</th>
                <th class="center">Rilis</th>
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
                    <tr class="grey darken-3 white-text">
                        <td class="center"><?= $i; ?></td>
                        <td class="center">
                            <a href="ubah.php?id=<?= $anm['id']; ?>" class="waves-effect waves-light blue darken-2 btn">Ubah</a>
                            <a href="hapus.php?id=<?= $anm['id']; ?>" class="waves-effect waves-light red darken-2 btn" onclick="return confirm('Hapus Data?')">Hapus</a>
                        </td>
                        <td class="center"><img src="../assets/img/<?= $anm['img']; ?>" width="100px"></td>
                        <td><?= $anm['nama']; ?></td>
                        <td><?= $anm['anime']; ?></td>
                        <td><?= $anm['pengarang']; ?></td>
                        <td class="center"><?= $anm['rilis']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>