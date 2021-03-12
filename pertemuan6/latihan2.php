<?php
    // Mohamad Egi Rahayu
    // 203040045
    // https://github.com/Egirahayu/pw2021_203040045
    // Pertemuan 5 (12 Maret 2021)
    // Menjelaskan tentang PHP Dasar - Array assosciative

    // $mahasiswa = ["Mohamad Egi Rahayu", "203040045", "203040045@mail.unpas.ac.id", "Teknik Informatika"];

    // $mahasiswa = [
    //     ["Mohamad Egi Rahayu", "203040045", "egirahayu@mail.unpas.ac.id", "Teknik Informatika"], 
    //     ["193040046", "Moch Andre Alfarisi", "andrealfarisi@gmail.com", "Teknik Industri"]
    // ];

    // Array assosciative
    // definisinya sama seperti array numerik, kecuali
    // key-nya adalah string yang kita buat sendiri

    // $mahasiswa = [
    //     "nama" => "Mohamad Egi Rahayu", 
    //     "nrp" => "203040045",
    //     "email" => "203040045@mail.unpas.ac.id"
    //     "jurusan" => "Teknik Informatika"
    // ];
    // echo $mahasiswa["jurusan"];
    // echo $mahasiswa["nama"];

    $mahasiswa = [
        [
            "nama" => "Mohamad Egi Rahayu", 
            "nrp" => "203040045",
            "email" => "203040045@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "Egi.jpg"
        ],
        [
            "nama" => "Moch Andre Alfarisi", 
            "nrp" => "193040046",
            "email" => "andrealfarisi@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "Andre.JPG"
            // "tugas" => [90, 80, 100]
        ]
    ];
    // echo $mahasiswa[1]["email"];
    // echo $mahasiswa[1]["jurusan"];
    // echo $mahasiswa[1]["tugas"][1];
?>

<!DOCTYPE html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- <ul>
        <li>Mohamad Egi Rahayu</li>
        <li>203040045</li>
        <li>203040045@mail.unpas.ac.id</li>
        <li>Teknik Informatika</li>

        <li> <?php echo $mahasiswa[0]; ?> </li>
        <li> <?php echo $mahasiswa[1]; ?> </li>
        <li> <?php echo $mahasiswa[2]; ?> </li>
        <li> <?php echo $mahasiswa[3]; ?> </li>
    </ul> -->

    <!-- <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>Nama :  <?= $mhs[0]; ?> </li>
            <li>Nrp :  <?= $mhs[1]; ?> </li>
            <li>Email :  <?= $mhs[2]; ?> </li>
            <li>Jurusan :  <?= $mhs[3]; ?> </li>
        </ul>
    <?php endforeach; ?> -->

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"];?>"">
            </li>
            <li>Nama :  <?= $mhs["nama"]; ?> </li>
            <li>Nrp :  <?= $mhs["nrp"]; ?> </li>
            <li>Jurusan :  <?= $mhs["jurusan"]; ?> </li>
            <li>Email :  <?= $mhs["email"]; ?> </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>