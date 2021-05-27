<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
// Shift : PemrogramanWeb_Jumat10
?>

<?php
require 'functions.php';

$id = $_GET['id'];
$anm = query("SELECT * FROM anime WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                  </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
                  </script>";
    }
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
        <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?= $anm["id"] ?>">
            <div class="card-panel">
                <h5>Form Ubah Data Main Character Anime</h5>
                <div class="input-field">
                    <input type="text" name="img" id="img" required value="<?= $anm["img"]; ?>">
                    <label for="img">Image</label>
                </div>
                <div class="input-field">
                    <input type="text" name="nama" id="nama" required value="<?= $anm["nama"]; ?>">
                    <label for="nama">Nama</label>
                </div>
                <div class="input-field">
                    <input type="text" name="anime" id="anime" required value="<?= $anm["anime"]; ?>">
                    <label for="anime">Anime</label>
                </div>
                <div class="input-field">
                    <input type="text" name="pengarang" id="pengarang" required value="<?= $anm["pengarang"]; ?>">
                    <label for="pengarang">Pengarang</label>
                </div>
                <div class="input-field">
                    <input type="text" name="rilis" id="rilis" required value="<?= $anm["rilis"]; ?>">
                    <label for="rilis">Rilis</label>
                </div>
                <button class="waves-effect waves-light skyblue darken-1 btn" type="submit" name="ubah">Ubah Data!</button></a>
                <button class="waves-effect waves-light skyblue darken-1 btn" type="submit">
                    <a href="admin.php" style='text-decoration: none; color: white;'>Kembali</a>
                </button>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>