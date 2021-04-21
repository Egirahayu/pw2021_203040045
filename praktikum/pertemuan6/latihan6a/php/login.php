<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    session_start();
    require 'functions.php';

    // Melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect ke halaman admin
    if (isset($_SESSION['username'])) {
        header("Location: admin.php");
        exit;
    }

    // Login
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

        // Mencocokan USERNAME dan PASSWORD
        if (mysqli_num_rows($cek_user) > 0) {
            $row = mysqli_fetch_assoc($cek_user);
            if ($password == $row['password']) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['hash'] = $row['id'];
            }

            if ($row['id'] == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
        $error = true;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Anime</title>
    <style>
        .container {
            width : 400px;
            height : 437px;
            padding-top: 100px;
        }

        .login {
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

        .remember {
            margin-left: 5px;
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
            <form action="#" method="post">
                <?php if (isset($error)) : ?>
                    <p style="color: red; font-style: italic;">Username atau Password salah</p>
                <?php endif; ?>
                
                <table>
                    <h5 class="center">LOGIN</h5>
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
                <div class="remember">
                    <label>
                        <input type="checkbox" name="remember" class="filled-in" checked="checked" />
                        <span for="remember">Remember me</span>
                    </label>
                </div>
                <div class="login">
                    <button class="waves-effect waves-light blue darken-4 btn" type="submit" name="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>