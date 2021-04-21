<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    session_start();
    session_destroy();

    setcookie('username', '', time() - 3600);
    setcookie('hash', '', time() - 3600);
    header("Location: ../index.php");
    die;
?>