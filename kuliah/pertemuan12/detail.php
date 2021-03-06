<?php
// Mohamad Egi Rahayu
// 203040045
// https://github.com/Egirahayu/pw2021_203040045
// Pertemuan 12 (7 Mei 2021)
// Login & Registrasi
?>

<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Ambil id dari URL
$id = $_GET['id'];

// Query mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Detail Mahasiswa</title>
  <style>
    h3 {
      margin-left: 30px;
    }
  </style>
</head>

<body class="grey darken-3">
  <div class="container">
    <h3 class="white-text">Detail Mahasiswa</h3>

    <div class="row">
      <div class="col m5">
        <div class="card">
          <div class="card-image">
            <img src="img/<?= $mahasiswa['gambar']; ?>">
          </div>
          <div class="card-content red darken-4 white-text">
            <p>NRP : <?= $mahasiswa['nrp']; ?></p>
            <p>Nama : <?= $mahasiswa['nama']; ?></p>
            <p>Email : <?= $mahasiswa['email']; ?></p>
            <p>Jurusan : <?= $mahasiswa['jurusan']; ?></p>
          </div>
          <div class="card-action green light-2">
            <a href="ubah.php?id=<?= $mahasiswa['id']; ?>" class="waves-effect waves-light blue darken-2 btn">Ubah</a>
            <a href="hapus.php?id=<?= $mahasiswa['id']; ?>" onclick="return confirm('apakah anda yakin?');" class="waves-effect waves-light red darken-2 btn">Hapus</a> <br><br>
            <a href="index.php" class="waves-effect waves-light skyblue btn">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>