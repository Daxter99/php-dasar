<?php
// Array
// Variabel yg dapat memiliki banyak nilai
// element di array boleh berbeda
// Array adl pasangan antara key & value
// key-nya adl index, yg dimulai dr 0

// membuat Array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");

// cara baru
$bulan = ["January", "February", "Maret"];
$arr1 = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];


// Menambahkan elemen baru pada array yg telah dibuat
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);
