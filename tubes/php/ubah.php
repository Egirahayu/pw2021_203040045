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

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- css materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- materialize icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- shortcut icon -->
    <link rel="shortcut icon" href="../assets/img/logo/ER.png">
    <title>Ubah Data MC Anime</title>
    <style>
        body {
            background-image: url(../assets/img/background/unsplash.jpg);
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?= $anm["id"] ?>">
            <div class="card-panel">
                <h5>Form Ubah Data Main Character Anime</h5>
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
                <div class="file-field input-field">
                    <input type="hidden" name="gambar_lama" value="<?= $anm['img']; ?>">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" multiple name="gambar" class="gambar" onchange="previewImage()">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload Gambar">
                    </div>
                    <img src="../assets/img/<?= $anm['img']; ?>" width="120px" style="display: block;" class="img-preview">
                </div>
                <button class="waves-effect waves-light skyblue darken-1 btn" type="submit" name="ubah">Ubah Data!</button></a>
                <button class="waves-effect waves-light skyblue darken-1 btn" type="submit">
                    <a href="admin.php" style='text-decoration: none; color: white;'>Kembali</a>
                </button>
            </div>
        </form>
    </div>

    <!-- script materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- script lokal -->
    <script src="../js/script.js"></script>
</body>

</html>