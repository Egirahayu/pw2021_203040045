<?php
// Mohamad Egi Rahayu
// 203040045
// https://github.com/Egirahayu/pw2021_203040045
// Pertemuan 12 (7 Mei 2021)
// Login & Registrasi
?>

<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('username baru berhasil ditambahkan. silahkan login!');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo 'user gagal ditambahkan!';
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Anime</title>
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
      <form action="" method="POST">
        <?php if (isset($error)) : ?>
          <p style="color: red; font-style: italic;">Username atau Password salah</p>
        <?php endif; ?>

        <table>
          <h5 class="center">REGISTRASI</h5>
          <tr>
            <td><label for="username">Username</label></td>
            <td>:</td>
            <td><input id="username" type="text" name="username" autofocus autocomplete="off" required></td>
          </tr>
          <tr>
            <td><label for="password">Password</label></td>
            <td>:</td>
            <td><input id="password" name="password1" type="password" required></td>
          </tr>
          <tr>
            <td><label for="password">Konfirmasi Password</label></td>
            <td>:</td>
            <td><input id="password" name="password2" type="password" required></td>
          </tr>
        </table>
        <div class="register">
          <button class="waves-effect waves-light blue darken-4 btn" type="submit" name="registrasi">Register</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>