<?php

    function salam($nama = "Admin", $waktu = "Datang"){
        return "Selamat $waktu, $nama!!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Lail Fajri", "Pagi"); ?></h1>
    
</body>
</html>