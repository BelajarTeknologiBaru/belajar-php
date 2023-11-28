<?php

// Variable adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya
// Di PHP variable bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data
// Untuk membuat variable kita bisa menggunakan tanda $ (dolar) diikuti dengan nama variable nya
// Penamaan variable tidak boleh mengandung spasi

$name = "Ahmad Zidni Hidayat";
$age = 20;
$is_married = false;

echo $name;
echo "\n";
echo $age;
echo "\n";
var_dump($is_married);
echo "\n";

// variabel variables

$nama = "Ahmad";
$$nama = "Zidni";

//seakan akan ada $Ahmad

echo  "$nama, $Ahmad"; // variabel variable
