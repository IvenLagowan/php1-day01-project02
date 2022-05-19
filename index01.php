<?php
    // Data
    // Untuk Menampilkan Dat untuk format Tanggal
    //   echo date("l, d-M-y");
    
    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 2021
    //   echo date();
    // echo date("d M Y", time()+60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun

    echo date("l", mktime(0,0,0,8,25,2021));

    // strtotime
    echo date("l", strtotime("25 aug 1985"));
?>