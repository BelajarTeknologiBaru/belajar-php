<?php

$nama = "Ahmad";

echo "Nama" . $nama . PHP_EOL; // PHP_EOL = Enter
echo "Nilai" . 100 . PHP_EOL;


// konversi string ke integer
$angka = (int) "100";
var_dump($angka);


// konversi string ke float
$angka = (float) "10.1";
var_dump($angka);


// konversi string ke boolean
$angka = (bool) "0";
var_dump($angka); // false

// konversi integer ke string
$angka = (string) 100;
var_dump($angka);


// mengakses  karakter pada string
$name =  "Ahmad";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;

// variable parsing
$name = "Ahmad";
var_dump("hello $name"); // hanya bisa pakai double quote

// curly bracket
$name = "Ahmad";
var_dump("hello {$name}s");
