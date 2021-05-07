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

// Jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// Mengambil id dari URL
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
          </script>";
} else {
  echo "<script>
            alert('Data gagal dihapus!');
            document.location.href = 'index.php';
          </script>";
}
?>