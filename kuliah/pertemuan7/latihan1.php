<?php
    // Mohamad Egi Rahayu
    // 203040045
    // https://github.com/Egirahayu/pw2021_203040045
    // Pertemuan 7 (20 Maret 2021)
    // Menjelaskan tentang PHP Dasar - Get & Post

    // Variabel Scope / lingkup variabel
    // $x = 10; // variabel local untuk file latihan1.php
    // echo $x;

    // function tampilX() {
    //     $x = 20;
    //     echo $x;
    // }

    // tampilX();
    // echo "<br>";
    // echo $x;

    // function tampilX() {
    //     global $x;
    //     echo $x;
    // }

    // tampilX();
    
    // SUPERGLOBALS
    // variabel global milik php
    // merupakan Array Associative
    // var_dump($_GET);
    // var_dump($_POST);
    // var_dump($_SERVER);
    // echo $_SERVER["SERVER_NAME"];

    // $_GET
    // $_GET["nama"] = "Egi Rahayu";
    // $_GET["nrp"] = "203040045";
    // var_dump($_GET);
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
            "jurusan" => "Teknik Mesin",
            "gambar" => "Andre.JPG"
        ]
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li> <img src="img/<?= $mhs["gambar"]; ?>"> </li>
            <li> <?= $mhs["nama"]; ?> </li>
            <li> <?= $mhs["nrp"]; ?> </li>
        </ul>
    <?php endforeach; ?> -->

    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li> 
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"> <?= $mhs["nama"]; ?> </a>
            </li>   
        <?php endforeach; ?>
    </ul>
</body>
</html>