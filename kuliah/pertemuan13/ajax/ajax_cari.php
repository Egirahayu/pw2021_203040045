<?php
// Mohamad Egi Rahayu
// 203040045
// https://github.com/Egirahayu/pw2021_203040045
// Pertemuan 13 (13 Mei 2021)
// Live searching & Upload gambar
?>

<?php
require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>

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