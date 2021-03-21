<?php
    // Mohamad Egi Rahayu
    // 203040045
    // https://github.com/Egirahayu/pw2021_203040045
    // Pertemuan 7 (21 Maret 2021)
    // Menjelaskan tentang PHP Dasar - Get & Post

    // cek apakah tombol submit sudah tekan atau belum
    if( isset($_POST["submit"]) ) {
        // cek usern   ame & password
        if( $_POST["username"] == "egi" && $_POST["password"] == "361") {
        // jika benar, redirect ke halaman admin
            header("Location: admin.php");
            exit;
        } else {
        // jika salah, tampilkan pesan kesalahan
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">username / password salah!</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>