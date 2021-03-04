<?php
    // Mohamad Egi Rahayu
    // 203040045
    // https://github.com/Egirahayu/pw2021_203040045
    // Pertemuan 4 (4 Maret 2021)
    // Menjelaskan tentang PHP Dasar - Functiom

    // Date : Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 Januari 1970
    // echo time()

    // echo date("l", time()+172800) //Menghitung hari apa pada 2 hari yang akan datang dengan menjumlahkan detik selama 2 hari (60*60*24*2) menggunakan kakulator terlebih dahulu
    // echo date("l", time()+60*60*24*100) //Menghitung hari apa pada 100 hari yang akan datang dengan menjumlahkan detik selama 100 hari menggunakan PHP nya langsung tanpa menghitung terlebih dahulu menggunakan kalkulator
    // echo date("l", time()-60*60*24*100) //Menghitung hari apa pada 100 hari sebelumnya dengan menjumlahkan detik selama 100 hari menggunakan PHP nya langsung tanpa menghitung terlebih dahulu menggunakan kalkulator
    // echo date("d M Y", time()-60*60*24*100) //Menampilkan tanggal 100 hari sebelumnya
    
    //mktime : membuat sendiri detik
    //mktime(0,0,0,0,0,0) -> //mktime(jam, menit, detik, bulan, tanggal, tahun)
    // echo mktime(0,0,0,1,26,2002); //detik yang sudah berlalu dari 1 Januari 1970 - 26 Januari 2002
    // echo date("l", mktime(0,0,0,1,26,2002)); //menampilkan hari dari tanggal 26 Januari 2002

    //strtotime
    // echo strtotime("26  jan 2002"); //detik yang sudah berlalu dari 1 Januari 1970 - 26 Januari 2002
    // echo date("l", strtotime("26 jan 2002")); //menampilkan hari dari tanggal 26 Januari 2002
?>