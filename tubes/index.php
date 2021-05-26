<?php
// Nama : Mohamad Egi Rahayu
// NRP : 203040045
// Shift : PemrogramanWeb_Jumat10
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- materialize icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- css AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- icon medsos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- css lokal -->
    <link rel="stylesheet" href="css/style.css">
    <!-- shortcut icon -->
    <link rel="shortcut icon" href="assets/img/logo/ER.png">
    <title>Tubes Pemrograman Web</title>
    <style>
        @font-face {
            font-family: 'Kaushan-Script';
            src: url('assets/font/Kaushan-Script/KaushanScript-Regular.otf');
        }

        .slider h3,
        h5 {
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .slider h3,
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

        .parallax-container {
            height: 20%;
        }

        .parallax img {
            filter: grayscale(1);
            opacity: 0.5 !important;
        }

        .clients img {
            max-width: 300px;
            filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, 0.8));
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
                    <img src="assets/img/logo/ER-2.png" width="60px" height="50px" style="padding-top: 10px;">
                    <a href="" class="brand-logo" style="padding-left: 15px;">Egi Rahayu</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="php/list.php">List Main Character</a></li>
                        <li><a href="php/login.php">Login</a></li>
                        <li><a href="php/registrasi.php">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="php/list.php">List Main Character</a></li>
        <li><a href="php/login.php">Login</a></li>
        <li><a href="php/registrasi.php">Register</a></li>
    </ul>

    <div class="slider">
        <ul class="slides">
            <li>
                <img src="assets/img/slider/Uzumaki-Naruto.jpg">
                <div class="caption left-align">
                    <h3 class="red-text text-accent-4">Welcome To</h3>
                    <h5 class="light-blue-text text-darken-4">-Uzumaki Naruto-</h5>
                </div>
            </li>
            <li>
                <img src="assets/img/slider/Luffy.jpg">
                <div class="caption center-align">
                    <h3 class="red-text text-accent-4">My Website,</h3>
                    <h5 class="light-blue-text text-darken-4">-Monkey D. Luffy-</h5>
                </div>
            </li>
            <li>
                <img src="assets/img/slider/Son-Goku.jpg">

                <div class="caption right-align">
                    <h3 class="red-text text-accent-4">Thank you.</h3>
                    <h5 class="light-blue-text text-darken-4">-Son Goku-</h5>
                </div>
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="content">
            <div class="card">
                <h3 class="center">Pengertian Anime</h3>
                <div class="row center">
                    <div class="col m6 s12">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Anime</span>
                                <p>Anime (bahasa Jepang: アニメ) adalah animasi dari Jepang yang digambar dengan tangan maupun menggunakan teknologi komputer. Kata anime merupakan singkatan dari "animation" dalam bahasa Inggris, yang merujuk pada semua jenis animasi. Di luar Jepang, istilah ini digunakan secara spesifik untuk menyebutkan segala animasi yang diproduksi di Jepang. Meskipun demikian, tidak menutup kemungkinan bahwa anime dapat diproduksi di luar Jepang. Sumber : <a href="https://id.wikipedia.org/wiki/Anime" class="white-text"><u>Pengertian Anime</u></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col m6 s12">
                        <div class="card blue-grey darken-1">
                            <div class="card-content white-text">
                                <span class="card-title">Pendapat saya</span>
                                <p>Anime adalah animasi 2D/3D yang bertujuan untuk hiburan (mencari kesenangan) yang diproduksi oleh suatu perusahaan animasi dan dibuat oleh seorang "jenius" yang disebut sebagai mangaka. Di Indonesia, anime bisa dijadikan sebagai bentuk silaturahmi dengan membuat suatu komunitas dari beberapa fans anime tertentu. Berikut beberapa anime yang memiliki popularitas tinggi di Indonesia : One Piece, Naruto Shippuden, Attack On TItan, Dragon Ball dan Kimetsu no Yaiba (Demon Slayer).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="clients" class="parallax-container">
        <div class="parallax"><img src="assets/img/parallax/parallax.jpg"></div>

        <div class="container clients">
            <div data-aos="zoom-in" data-aos-duration="3000">
                <h3 class="white-text center">Top Anime</h3>
            </div>
            <div class="row">
                <div data-aos="fade-down-right" data-aos-duration="3000">
                    <div class="col m4 s12">
                        <img src="assets/img/anime/Dragon-Ball.png" class="responsive-img">
                    </div>
                </div>
                <div data-aos="fade-down" data-aos-duration="3000">
                    <div class="col m4 s12">
                        <img src="assets/img/anime/One-Piece.png" class="responsive-img">
                    </div>
                </div>
                <div data-aos="fade-down-left" data-aos-duration="3000">
                    <div class="col m4 s12">
                        <img src="assets/img/anime/Naruto.png" class="responsive-img">
                    </div>
                </div>
            </div>
            <div class="row">
                <div data-aos="fade-up-right" data-aos-duration="3000">
                    <div class="col m4 s12">
                        <img src="assets/img/anime/AOT.png" class="responsive-img">
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="3000">
                    <div class="col m4 s12">
                        <img src="assets/img/anime/Bleach.png" class="responsive-img">
                    </div>
                </div>
                <div data-aos="fade-up-left" data-aos-duration="3000">
                    <div class="col m4 s12">
                        <img src="assets/img/anime/Demon-Slayer.png" class="responsive-img">
                    </div>
                </div>
            </div>

        </div>
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
    <!-- script AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 650,
            transition: 600,
            interval: 3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        AOS.init();

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