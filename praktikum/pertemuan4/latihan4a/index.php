<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    // Melakukan koneksi ke database
    $conn = mysqli_connect("localhost", "root", "");
    
    // Memilih database
    mysqli_select_db($conn, "pw_tubes_203040045");
    
    // Melakukan query dari database
    $result = mysqli_query($conn, "SELECT * FROM anime")
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Anime</title>
</head>
<body>
    <div class="container">
        <h3 class="center">List Main Character (MC) Anime</h3>
        
        <table class="striped">
            <thead>
                <tr class="orange darken-2">
                    <th class="center">No</th>
                    <th class="center">Image</th>
                    <th>Nama MC</th>
                    <th>Anime</th>
                    <th>Rilis</th>
                    <th class="center">Status Anime</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php $i = 1 ?>
                        <?php while( $row = mysqli_fetch_assoc($result)) : ?>
                            <tr class="grey darken-3 white-text">
                                <td class="center"> <?= $i ?> </td>
                                <td class="center"> <img src="assets/img/<?= $row["img"]; ?>"></td>
                                <td> <?= $row["nama"]; ?> </td>
                                <td> <?= $row["anime"]; ?> </td>
                                <td> <?= $row["rilis"]; ?> </td>
                                <td class="center "> <a class="waves-effect waves-light btn"> <?= $row["status"]; ?> </a> </td>
                            </tr>
                        <?php $i++ ?>
                    <?php endwhile; ?>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>