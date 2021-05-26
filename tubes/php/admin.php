<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
// Shift : PemrogramanWeb_Jumat10
?>

<?php
// Menghubungkan dengan file php lainnya
require 'functions.php';

// Melakukan query dari database
$anime = query("SELECT * FROM anime");

if (isset($_POST["cari"])) {
    $anime = cari($_POST["keyword"]);
}

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
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
    <!-- icon medsos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- css lokal -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- shortcut icon -->
    <link rel="shortcut icon" href="../assets/img/logo/ER.png">
    <title>Halaman Admin</title>
    <style>
        @font-face {
            font-family: 'Kaushan-Script';
            src: url('../assets/font/Kaushan-Script/KaushanScript-Regular.otf');
        }

        .brand-logo {
            font-family: 'Kaushan-Script';
        }

        .form {
            padding-top: 5px;
        }

        footer {
            padding: 5px 0;
            text-align: center;
        }

        .sosmed {
            margin-top: 30px;
        }

        .sosmed i {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="navbar-fixed">
        <nav class="blue darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <img src="../assets/img/logo/ER-2.png" width="60px" height="50px" style="padding-top: 10px;">
                    <a href="" class="brand-logo" style="padding-left: 15px;">Egi Rahayu</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-nav">
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <div class="container">
        <h3 class="center">Main Character (MC) Anime</h3>

        <div class="row">
            <div class="col m9 s12">
                <div class="add">
                    <a href="tambah.php" class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons">add</i></a>
                </div>
            </div>
            <div class="col m3 s12">
                <div class="search">
                    <form action="" method="POST">
                        <input type="text" name="keyword" size="30" autofocus autocomplete="off">
                        <button type="submit" name="cari" class="waves-effect waves-light brown darken-4 btn" style="font-size: 18px;"><i class="material-icons" style="margin-right: 10px;">search</i>Search</button>
                    </form>
                </div>
            </div>
        </div>

        <table class="striped">
            <tr class="orange darken-2">
                <th class="center">No</th>
                <th class="center">Opsi</th>
                <th class="center">Image</th>
                <th>Nama MC</th>
                <th>Anime</th>
                <th>Pengarang</th>
                <th class="center">Rilis</th>
            </tr>

            <?Php if (empty($anime)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>

                <?php $i = 1; ?>

                <?php foreach ($anime as $anm) : ?>
                    <tr class="grey darken-3 white-text">
                        <td class="center"><?= $i; ?></td>
                        <td class="center">
                            <a href="ubah.php?id=<?= $anm['id']; ?>" class="waves-effect waves-light blue darken-2 btn">Ubah</a>
                            <a href="hapus.php?id=<?= $anm['id']; ?>" class="waves-effect waves-light red darken-2 btn" onclick="return confirm('Hapus Data?')">Hapus</a>
                        </td>
                        <td class="center"><img src="../assets/img/<?= $anm['img']; ?>" width="100px"></td>
                        <td><?= $anm['nama']; ?></td>
                        <td><?= $anm['anime']; ?></td>
                        <td><?= $anm['pengarang']; ?></td>
                        <td class="center"><?= $anm['rilis']; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>

    <div class="container">
        <div class="card">
            <h3 class="center light grey-text text-darken-3">Contact</h3>

            <div class="sosmed center">
                <a href="https://web.facebook.com/egi.rahayu26/" class="waves-effect waves-light blue darken-4 btn"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="https://instagram.com/egirahayu_/" class="waves-effect waves-light red accent-3 btn"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="https://twitter.com/egirahayu07?s=08/" class="waves-effect waves-light light-blue btn"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="https://wa.me/+6281344752259/" class="waves-effect waves-light green btn"><i class="fab fa-whatsapp"></i>Whatsapp</a>
            </div>

            <div class="form">
                <div class="row">
                    <div class="col m5 s12">
                        <div class="card-panel blue darken-2 center white-text">
                            <i class="material-icons">email</i>
                            <h5>Email</h5>
                            <p class="center">Contact me : <a href="mailto:mohammadegirahayu@gmail.com" class="white-text">Mohamad Egi Rahayu</a></p>
                        </div>
                        <ul class="collection with-header">
                            <li class="collection-header blue darken-2 white-text center">
                                <h4>My Address</h4>
                            </li>
                            <li class="collection-item green darken-2 white-text">Mohamad Egi Rahayu</li>
                            <li class="collection-item green darken-2 white-text">Panyingkiran, Majalengka</li>
                            <li class="collection-item green darken-2 white-text">West Java, Indonesia</li>
                        </ul>
                    </div>
                    <div class="col m7 s12">
                        <form name="tubes-pw-contact-form">
                            <div class="card-panel">
                                <h5>Please fill out this form</h5>
                                <div class="input-field">
                                    <input type="text" name="nama" id="name" required class="validate" autocomplete="off">
                                    <label for="name">Name</label>
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" id="email" class="validate" autocomplete="off">
                                    <label for="email">Email</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="phone" id="phone" autocomplete="off">
                                    <label for="phone">Phone Number</label>
                                </div>
                                <div class="input-field">
                                    <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <button class="btn waves-effect waves-light blue darken-2 btn btn-kirim" type="submit" name="action">Kirim
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="grey darken-4 white-text">
        <p class="flow-text" style="text-align: center;">Mohamad Egi Rahayu. Copyright &copy;2021.</p>
    </footer>

    <!-- script materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- script lokal -->
    <script src="../js/script.js"></script>
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbxUes3D1ulPX5I_WIyqxw2ECd70Ja2LBYBUvAF1BqbcUB8qI-mphr7bJathJubYQY8/exec'
        const form = document.forms['tubes-pw-contact-form'];

        form.addEventListener('submit', e => {
            e.preventDefault();
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })

                .then(response => {
                    M.toast({
                        html: 'Terima kasih! Pesan sudah dikirim'
                    })
                    form.reset();
                    console.log('Success!', response)
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>
</body>

</html>