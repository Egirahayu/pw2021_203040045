<?php
// Mohamad Egi Rahayu
// 203040045
// https://github.com/Egirahayu/pw2021_203040045
// Pertemuan 12 (7 Mei 2021)
// Login & Registrasi
?>

<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// Ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = login($_POST);
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Login</title>
  <style>
    .container {
      width: 400px;
      height: 437px;
      padding-top: 100px;
    }

    .login {
      text-align: center;
      margin-top: 15px;
    }

    .register {
      text-align: center;
    }

    th {
      text-align: center;
    }

    .admin {
      border: 1px solid rgba(0, 0, 0, 1.5);
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
      <form action="" method="POST">
        <?php if (isset($login['error'])) : ?>
          <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
        <?php endif; ?>

        <table>
          <h5 class="center">LOGIN</h5>
          <tr>
            <td><label for="username">Username</label></td>
            <td>:</td>
            <td><input id="username" type="text" name="username" autofocus autocomplete="off" required></td>
          </tr>
          <tr>
            <td><label for="password">Password</label></td>
            <td>:</td>
            <td><input id="password" name="password" type="password" required></td>
          </tr>
        </table>
        <div class="login">
          <button class="waves-effect waves-light blue darken-4 btn" type="submit" name="login">Login</button>
        </div>
        <div class="register">
          <p>Belum punya akun? Registrasi <a href="registrasi.php" class="waves-effect waves-light blue darken-4 btn">Disini</a></p>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>