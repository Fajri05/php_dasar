<?php
// Pertemuan 2 - Php Dasar
// Sintaks PHP

// Standar output
// echo, print
// print_r
// var_dump

echo "Lail Fajri";
//print "Lail Fajri";
//print_r ("Lail Fajri");
//var_dump ("Lail Fajri");
//Dalam kutip 2 (") terdapat interpolasi, yaitu untuk mengecek didalam kutip 2 apakah ada variable,
//jika menggukan kutip 1, maka interpolasi tidak jalan, jadi value dari variable tidak terpanggil

// Penulisan sintaks PHP
//1. php di dalam html
//2. html di dalam php
//4. operator aritmatika (kurang, bagi, tambah, kali, modulus"sisabagi")
//   operator penggabung string / concatenation/ concat
//   yaitu dengan titik "."
//   operator Assigment(penugasan) adalah ( =, +=, -=, /=, %=, .=)
//   operator perbandingan ( <, >, <=, >=, ==, != )
//   operator identitas (===, !==)
//   operator logika ( &&, ||, !)
//3. variable dan tipe data
$nama = "Lail Fajri";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Hallo, Selamat datang <?php echo "Lail Fajri"; ?></h1>
    <h1> Hallo, Selamat datang <?php echo $nama; ?></h1>
</body>
</html>

<br><br>

<?php
 $x = 4;
 $y = 5;

 echo $x * $y;
?>

<br><br>

<?php
 $nama_depan = "Lail";
 $nama_belakang = "Fajri";
 echo $nama_depan . " " . $nama_belakang;
?>

<br><br>

<?php

 $m = 1;
 $m += 5;
 echo $m;
 ?>

 <br><br>

<?php
 $nama = "Lail";
 $nama .= " ";
 $nama .= "Galih";
 echo $nama;
?>

<br><br>

<?php
 var_dump(1 < 5);
?>

<br><br>

<?php
//Operator identitas
 // untuk mengecek perbedaan tipe data, dan hasilnya bolean
 var_dump(1 === "1");
?>

<br><br>

<?php
// operator logika
// pada operator logika && nilai kedua statment harus benar maka nilai akan true, jika hanya salah satu maka false
// pada operator "atau" || ,cukup salah satu statment yg benar maka nilainya true, jika keduanya salah baru false
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
var_dump($x < 9 && $x % 2 == 0);
var_dump($x < 9 || $x % 2 == 0);
?>