<?php
    // Mohamad Egi Rahayu
    // 203040045
    // https://github.com/Egirahayu/pw2021_203040045
    // Pertemuan 5 (11 Maret 2021)
    // Menjelaskan tentang PHP Dasar - Array (Array Numerik)

    // $mahasiswa = ["Mohamad Egi Rahayu", "203040045", "Teknik Informatika", "203040045@mail.unpas.ac.id"];
    // $mahasiswa = [
    //     ["Mohamad Egi Rahayu", "203040045", "Teknik Informatika", "egirahayu@mail.unpas.ac.id"], 
    //     ["Moch Andre Alfarisi", "193040046", "Teknik Industri", "andrealfarisi@gmail.com"],
    //     ["Fajar Rizki Nugraha", "183040047", "Teknik Informatika", "fajarnugraha@yahoo.com"]
    // ];

    // Array Numerik
    // Array yang index nya angka
    $mahasiswa = [
        ["203040045", "Mohamad Egi Rahayu", "Teknik Informatika", "egirahayu@mail.unpas.ac.id"], 
        ["193040046", "Moch Andre Alfarisi", "Teknik Industri", "andrealfarisi@gmail.com"],
        ["183040047", "Fajar Rizki Nugraha", "Teknik Informatika", "fajarnugraha@yahoo.com"]
    ];
?>

<!DOCTYPE html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <!-- <li>Mohamad Egi Rahayu</li>
        <li>203040045</li>
        <li>Teknik Informatika</li>
        <li>203040045@mail.unpas.ac.id</li> -->

        <!-- <?php foreach( $mahasiswa as $mhs ) : ?>
            <li> <?= $mhs; ?> </li>
        <?php endforeach; ?> -->

        <!-- <li> <?php echo $mahasiswa[0]; ?> </li>
        <li> <?php echo $mahasiswa[1]; ?> </li>
        <li> <?php echo $mahasiswa[2]; ?> </li>
        <li> <?php echo $mahasiswa[3]; ?> </li> -->
    </ul>    

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>Nama :  <?= $mhs[0]; ?> </li>
            <li>NRP :  <?= $mhs[1]; ?> </li>
            <li>Jurusan :  <?= $mhs[2]; ?> </li>
            <li>Email :  <?= $mhs[3]; ?> </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>