<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
// Shift : PemrogramanWeb_Jumat10
?>

<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                    alert('Registrasi Berhasil');
                    document.location.href = 'login.php';
                  </script>";
    } else {
        echo "<script>
                    alert('Registrasi Gagal');
                  </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- materialize icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- css lokal -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- shortcut icon -->
    <link rel="shortcut icon" href="../assets/img/logo/ER.png">
    <title>Login & Registrasi</title>
    <style>
        .container {
            width: 400px;
            height: 437px;
            padding-top: 100px;
        }

        .register {
            text-align: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        th {
            text-align: center;
        }

        .admin {
            border: 1px solid rgba(0, 0, 0, 1);
            color: white;
        }

        marquee {
            color: white;
        }
    </style>
</head>

<body class="grey darken-4">
    <marquee class="blue darken-2" behavior="scroll" direction="right">LOGIN & REGISTRASI</marquee>

    <div class="container">
        <div class="admin green darken-4">
            <form action="" method="post">
                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic;">Username atau Password salah</p>
                <?php endif; ?>

                <table>
                    <h5 class="center">REGISTRASI</h5>
                    <tr>
                        <td><label for="username">Username</label></td>
                        <td>:</td>
                        <td><input id="username" type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td>:</td>
                        <td><input id="password" name="password" type="password"></td>
                    </tr>
                </table>
                <div class="register">
                    <button class="waves-effect waves-light blue darken-4 btn" type="submit" name="register">Register</button>
                    <button class="waves-effect waves-light blue darken-4 btn" type="submit">
                        <a href="../index.php" style='text-decoration: none; color: white;'>Batal</a>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- script materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>