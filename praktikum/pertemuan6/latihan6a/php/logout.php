<?php
    // Nama : Mohamad Egi Rahayu
    // NRP : 203040045
    // Shift : PemrogramanWeb_Jumat10
?>

<?php
    session_start();
    session_destroy();
    header("Location: ../index.php");
    die;
?>