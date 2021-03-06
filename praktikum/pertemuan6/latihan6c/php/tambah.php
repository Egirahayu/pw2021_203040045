<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
// Shift : PemrogramanWeb_Jumat10
?>

<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                  </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Anime</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="card-panel">
                <h5>Form Tambah Data Main Character Anime</h5>
                <div class="input-field">
                    <input type="text" name="img" id="img" required class="validate">
                    <label for="img">Image</label>
                </div>
                <div class="input-field">
                    <input type="text" name="nama" id="nama" class="validate">
                    <label for="nama">Nama</label>
                </div>
                <div class="input-field">
                    <input type="text" name="anime" id="anime">
                    <label for="anime">Anime</label>
                </div>
                <div class="input-field">
                    <input type="text" name="pengarang" id="pengarang">
                    <label for="pengarang">Pengarang</label>
                </div>
                <div class="input-field">
                    <input type="text" name="rilis" id="rilis">
                    <label for="rilis">Rilis</label>
                </div>
                <button class="waves-effect waves-light orange darken-4 btn" type="submit" name="tambah">Tambah Data!</button></a>
                <button class="waves-effect waves-light orange darken-4 btn" type="submit">
                    <a href="admin.php" style='text-decoration: none; color: white;'>Kembali</a>
                </button>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>