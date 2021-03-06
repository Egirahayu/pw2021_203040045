<?php
// Mohamad Egi Rahayu
// 203040045
// https://github.com/Egirahayu/pw2021_203040045
// Pertemuan 13 (13 Mei 2021)
// Live searching & Upload gambar
?>

<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// Ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}
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
      margin-left: 185px;
    }

    .search {
      width: 325px;
      margin-left: -180px;
    }

    .logout {
      margin-top: 15px;
      margin-left: 185px;
    }
  </style>
</head>

<body>
  <div class="logout">
    <a href="logout.php" class="waves-effect waves-light skyblue btn-large">Logout</a>
  </div>

  <h3 class="center">Daftar Mahasiswa</h3>

  <div class="row">
    <div class="col m9 s12">
      <div class="add">
        <a href="tambah.php" class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">add</i></a>
      </div>
    </div>
    <div class="col m3 s12">
      <div class="search">
        <form action="" method="POST">
          <input type="text" name="keyword" size="30" placeholder="Masukkan keyword pencarian..." autofocus autocomplete="off" class="keyword">
          <button type="submit" name="cari" class="tombol-cari">Cari!</button>
        </form>
      </div>
    </div>
  </div>

  <div class="container">
    <table class="striped">
      <tr class="orange darken-2">
        <th class="center">No</th>
        <th class="center">Gambar</th>
        <th>Nama</th>
        <th class="center">Aksi</th>
      </tr>

      <?php if (empty($mahasiswa)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data mahasiswa tidak ditemukan</h1>
          </td>
        </tr>
      <?php endif; ?>

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
    <script src="js/script.js"></script>
</body>

</html>