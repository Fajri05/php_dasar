<?php
/*
    // Date : untuk menampilkan tanggal dengan format tertentu
    echo date("l, d-M-Y");
*/
/*
    //Time
    //Unix Timestamp / EPOCH time
    //Detik yang muncul dari fungsi ini sudah berlalu sejak 1 januari 1970
    echo time();
*/

/*
    //penggabungan kedua fungsi
    echo date("d M Y", time()+60*60*24*100);   
*/

/*
    mktime
    membuat detik sendiri detik
    mktime(0,0,0,0,0,0)
    jam, menit, detik, bulan, tanggal, tahun

    echo date("l", mktime(0,0,0,5,5,1997));
*/

/*
    //strtotime
    //echo date("l", strtotime("5 mei 1997"));
*/

?>