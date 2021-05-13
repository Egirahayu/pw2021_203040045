<?php
// Mohamad Egi Rahayu
// 203040045
// https://github.com/Egirahayu/pw2021_203040045
// Pertemuan 13 (13 Mei 2021)
// Live searching & Upload gambar
?>

<?php
require 'functions.php';

// Jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// Ambil id dari URL
$id = $_GET['id'];

// Query mahasiswa berdasarkan id
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// Cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal diubah!');
            document.location.href = 'index.php';
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
  <title>Ubah Data Mahasiswa</title>
  <style>
    .img-preview {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" id="id" value="<?= $mahasiswa["id"] ?>">
      <div class="card-panel">
        <h5>Form Ubah Data Mahasiswa</h5>
        <div class="input-field">
          <input type="text" name="nama" id="nama" required value="<?= $mahasiswa['nama']; ?>" autofocus>
          <label for="nama">Nama</label>
        </div>
        <div class="input-field">
          <input type="text" name="nrp" id="nrp" required value="<?= $mahasiswa['nrp']; ?>">
          <label for="nrp">Nrp</label>
        </div>
        <div class="input-field">
          <input type="text" name="email" id="email" required value="<?= $mahasiswa['email']; ?>">
          <label for="email">Email</label>
        </div>
        <div class="input-field">
          <input type="text" name="jurusan" id="jurusan" required value="<?= $mahasiswa['jurusan']; ?>">
          <label for="jurusan">Jurusan</label>
        </div>
        <div class="file-field input-field">
          <input type="hidden" name="gambar_lama" value="<?= $mahasiswa['gambar']; ?>">
          <div class="btn">
            <span>File</span>
            <input type="file" multiple name="gambar" class="gambar" onchange="previewImage()">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload Gambar">
          </div>
          <img src="img/<?= $mahasiswa['gambar']; ?>" width="120px" style="display: block;" class="img-preview">
        </div>
        <button class="waves-effect waves-light skyblue darken-1 btn" type="submit" name="ubah">Ubah Data!</button></a>
        <button class="waves-effect waves-light skyblue darken-1 btn" type="submit">
          <a href="index.php" style='text-decoration: none; color: white;'>Kembali</a>
        </button>
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>