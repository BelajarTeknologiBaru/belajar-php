<?php

// Nilai NULL merepresentasikan sebuah variable tanpa nilai.
// Saat kita membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut, kita bisa menggunakan NULL untuk mengosongkan variable tersebut
// Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)


$name = "Budi";
$name = null;

echo $name;

// mengecek suatu variable null

$isNull = is_null($name);

//bisa juga pakai is set lebih aman juga
$isSet = isset($name);

var_dump($isSet); // output: false
echo $isSet; // output: ""

var_dump($isNull); // output : true
echo $isNull; // output : 1




// menghapus variable null

unset($name);
var_dump($name); // eror karena variabel udah ilang 🗿
