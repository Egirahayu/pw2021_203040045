<!DOCTYPE html>
<html>

<head>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- materialize icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- icon medsos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- shortcut icon -->
    <link rel="shortcut icon" href="tubes/assets/img/logo/ER.png">
    <title>Index Pemrograman Web</title>
    <style>
        @font-face {
            font-family: 'Kaushan-Script';
            src: url('tubes/assets/font/Kaushan-Script/KaushanScript-Regular.otf');
        }

        body {
            background-image: url(tubes/assets/img/background/index-pw.jpg);
        }

        .slider h3,
        h5 {
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .slider h3,
        .brand-logo {
            font-family: 'Kaushan-Script';
        }

        section,
        footer {
            padding: 5px 0;
            text-align: center;
        }

        .card a:hover {
            background-color: lightskyblue;
            color: white;
        }

        .about {
            margin-top: 35px;
            padding-bottom: 75px;
        }

        .about img {
            margin-top: 25px;
        }

        .form {
            padding-top: 5px;
        }

        .parallax img {
            filter: grayscale(1);
            opacity: 0.5 !important;
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
        <nav class="grey darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <img src="tubes/assets/img/logo/ER-1.png" width="60px" height="50px" style="padding-top: 10px;">
                    <a href="" class="brand-logo" style="padding-left: 15px;">Egi Rahayu</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="kuliah">Kuliah</a></li>
                        <li><a href="praktikum">Praktikum</a></li>
                        <li><a href="tubes/index.php">Tubes</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-nav">
        <li><a href="kuliah">Kuliah</a></li>
        <li><a href="praktikum">Praktikum</a></li>
        <li><a href="tubes/index.php">Tubes</a></li>
    </ul>

    <div class="slider">
        <ul class="slides">
            <li>
                <img src="tubes/assets/img/index/slider/Ace.png">
                <div class="caption left-align">
                    <h3 class="red-text text-accent-4">Mohamad Egi Rahayu</h3>
                    <h5 class="light-blue-text text-darken-1">Welcome To My Website</h5>
                </div>
            </li>
            <li>
                <img src="tubes/assets/img/index/slider/Egirahayu.png">
                <div class="caption center-align">
                    <h3 class="red-text text-accent-4">Mohamad Egi Rahayu</h3>
                    <h5 class="light-blue-text text-darken-1">-Teknik Informatika UNPAS-</h5>
                </div>
            </li>
            <li>
                <img src="tubes/assets/img/index/slider/One-Piece.png">
                <div class="caption right-align">
                    <h3 class="red-text text-accent-4">Mohamad Egi Rahayu</h3>
                    <h5 class="light-blue-text text-darken-1">Thank you</h5>
                </div>
            </li>
        </ul>
    </div>

    <div class="container">
        <div class="card">
            <h3 class="center light grey-text text-darken-3">About</h3>
            <div class="center">
                <img src="tubes/assets/img/index/about/MOHAMAD-EGI-RAHAYU.png" class="circle responsive-img">
                <h5 class="grey-text text-darken-4">Halo, Nama saya Mohamad Egi Rahayu</h5>
                <p>Perkenalkan nama saya Mohamad Egi Rahayu, saya merupakan Mahasiswa Teknik Informatika di UNPAS yang berasal dari Kabupaten Majalengka. Lahir di Majalengka, 26 Januari 2002.
                    Hobi saya bermain Game dan nonton anime One Piece. Saya juga penggemar sepak bola, fans fanatik Real Madrid & Persib Bandung.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="row">
                <h3 class="light center grey-text text-darken-3">Project</h3>
                <div class="col m4 s12">
                    <div class="card-panel amber accent-4 center">
                        <i class="material-icons medium">desktop_windows</i>
                        <h5><a href="kuliah" class="white-text">Kuliah</a></h5>
                        <p>Kumpulan Tugas Kuliah Pemrograman Web 2021</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel amber accent-4 center">
                        <i class="material-icons medium">developer_mode</i>
                        <h5><a href="praktikum" class="white-text">Praktikum</a></h5>
                        <p>Kumpulan Tugas Praktikum Pemrograman Web 2021</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel amber accent-4 center">
                        <i class="material-icons medium">folder</i>
                        <h5><a href="tubes/index.php" class="white-text">Tugas Besar</a></h5>
                        <p>Tugas Besar Praktikum Pemrograman Web 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <h3 class="light center grey-text text-darken-3">Portfolio</h3>
            <div class="row">
                <div class="col m4 s12">
                    <img src="tubes/assets/img/index/portfolio/SD.png" class="responsive-img">
                </div>
                <div class="col m4 s12">
                    <img src="tubes/assets/img/index/portfolio/SMP.png" class="responsive-img">
                </div>
                <div class="col m4 s12">
                    <img src="tubes/assets/img/index/portfolio/SMK.png" class="responsive-img">
                </div>
            </div>
            <div class="row">
                <div class="col m4 s12">
                    <img src="tubes/assets/img/index/portfolio/SMK2.png" class="responsive-img">
                </div>
                <div class="col m4 s12">
                    <img src="tubes/assets/img/index/portfolio/Jatigede.png" class="responsive-img">
                </div>
                <div class="col m4 s12">
                    <img src="tubes/assets/img/index/portfolio/SMK3.png" class="responsive-img">
                </div>
            </div>
        </div>
    </div>

    <div id="clients" class="parallax-container" style="height: 400px">
        <div class="parallax"><img src="tubes/assets/img/parallax/parallax-2.jpg"></div>
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
                            <p>Contact me : <a href="mailto:mohammadegirahayu@gmail.com" class="white-text">Mohamad Egi Rahayu</a></p>
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

    <footer class="grey darken-4 white-text center">
        <p class="flow-text">Mohamad Egi Rahayu. Copyright &copy;2021.</p>
    </footer>

    <!-- script materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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