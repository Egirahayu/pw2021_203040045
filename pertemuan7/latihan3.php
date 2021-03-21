<?php
    // Mohamad Egi Rahayu
    // 203040045
    // https://github.com/Egirahayu/pw2021_203040045
    // Pertemuan 7 (21 Maret 2021)
    // Menjelaskan tentang PHP Dasar - Get & Post
?>

<!DOCTYPE html>
<html lang>
<head>
    <title>POST</title>
</head>
<body>
    <?php if( isset($_POST["submit"]) ) ?>
        <h1>Halo, Selamat Datang <?= $_POST["nama"] ?>!</h1>
    <?php endif; ?>

    <form action="" method="post">
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
    
    <!-- <form action="latihan4.php" method="post">
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form> -->

    <!-- <form action="latihan4.php" method="get">
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form> -->
</body>
</html>