<?php
// Mohamad Egi Rahayu
// 203040045
// https://github.com/Egirahayu/pw2021_203040045
// Pertemuan 10 (30 April 2021)
// Koneksi ke database localhost/phpmyadmin
?>

<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    .container {
      width: 1000px;
    }

    h3 {
      margin-bottom: 25px;
      font-size: 30px;
    }

    .add {
      margin-bottom: 25px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h3 class="center">Daftar Mahasiswa</h3>

    <div class="add">
      <a href="tambah.php" class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">add</i></a>
    </div>

    <table class="striped">
      <tr class="orange darken-2">
        <th class="center">No</th>
        <th class="center">Gambar</th>
        <th>Nama</th>
        <th class="center">Aksi</th>
      </tr>

      <?php $i = 1;
      foreach ($mahasiswa as $mhs) : ?>
        <tr class="grey darken-3 white-text">
          <td class="center"><?= $i++; ?></td>
          <td class="center"><img src="img/<?= $mhs['gambar']; ?>" width="100px" height="100px"></td>
          <td><?= $mhs['nama']; ?></td>
          <td class="center">
            <a href="detail.php?id=<?= $mhs['id']; ?>" class="waves-effect waves-light green btn">Lihat detail</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>