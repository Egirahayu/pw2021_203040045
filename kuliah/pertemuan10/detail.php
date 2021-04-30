<?php
// Mohamad Egi Rahayu
// 203040045
// https://github.com/Egirahayu/pw2021_203040045
// Pertemuan 10 (30 April 2021)
// Koneksi ke database localhost/phpmyadmin
?>

<?php
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
            <a href="" class="waves-effect waves-light blue darken-2 btn">Ubah</a>
            <a href="" class="waves-effect waves-light red darken-2 btn">Hapus</a> <br><br>
            <a href="latihan3.php" class="waves-effect waves-light skyblue btn">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>