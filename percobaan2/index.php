<?php
// Pertemuan 2
// Syntax Php

// Standar Output
// echo, print => echo "";
// print_r [array] => print_r();
// var-dump => var_dump();

echo "jum'at";

// Penulisan Syntax PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variable & Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tpi boleh mengandung angka

$nama = "Ade Saputra";
echo 'hallo nama saya $nama';

// Operator
// Aritmatika
// + - * / %
$a = 30;
$b = 5;
echo $a / $b;

// Penggabung string / concat
// .

$nama_depan = "Ade";
$nama_belakang = "Saputra";
echo $nama_depan . " " . $nama_belakang;

// Operator Assignment
// =, -=, +=, *=, /=, %=, .=

$x = 1;
$x += 5;
echo $x;

$nama = "Ade";
$nama .= " ";
$nama .= "Saputra";
echo $nama;

// Operator Perbandingan
// <, >, <=, >=, ==, !=

var_dump(1 == "1");

// Operator Identitas
// ===, !=
// var_dump(1 === "1");

// Operator Logika
// &&, ||, !

$x = 20;
var_dump($x < 20 || $x % 2 == 0);
