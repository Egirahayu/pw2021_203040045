<?php
// Mohamad Egi Rahayu
// 203040045
// https://github.com/Egirahayu/pw2021_203040045
// Pertemuan 11 (30 April 2021)
// Delete, Update and Searching Data
?>

<?php
require 'functions.php';

// Cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'latihan3.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'latihan3.php';
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
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <div class="container">
    <form action="" method="post">
      <div class="card-panel">
        <h5>Form Tambah Data Mahasiswa</h5>
        <div class="input-field">
          <input type="text" name="nama" id="nama" required autofocus autocomplete="off">
          <label for="nama">Nama</label>
        </div>
        <div class="input-field">
          <input type="text" name="nrp" id="nrp" required autocomplete="off">
          <label for="nrp">Nrp</label>
        </div>
        <div class="input-field">
          <input type="text" name="email" id="email" required autocomplete="off">
          <label for="email">Email</label>
        </div>
        <div class="input-field">
          <input type="text" name="jurusan" id="jurusan" required autocomplete="off">
          <label for="jurusan">Jurusan</label>
        </div>
        <div class="input-field">
          <input type="text" name="gambar" id="gambar" required autocomplete="off">
          <label for="gambar">Gambar</label>
        </div>
        <button class="waves-effect waves-light orange darken-4 btn" type="submit" name="tambah">Tambah Data!</button></a>
        <button class="waves-effect waves-light orange darken-4 btn" type="submit">
          <a href="index.php" style='text-decoration: none; color: white;'>Kembali</a>
        </button>
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>