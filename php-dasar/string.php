<?php

// Tipe data string adalah tipe data representasi dari teks
// String bisa mengandung kosong atau banyak karakter

echo 'Nama: ';
echo 'Ahmad Zidni Hidayat';

// OR

echo "nama: ";
echo "Ahmad Zidni Hidayat";

echo "\n";


// Salah satu kelebihan menggunakan double quote adalah, kita menggunakan escape sequence untuk beberapa hal, seperti \n untuk ENTER \t untuk TAB, \” untuk double quote, dan lain-lain

echo "nama: ";
echo "\n";
echo "Ahmad \t Zidni \t Hidayat";


// Multiline String

// Kadang kita ingin membuat data string yang lebih dari satu baris. Untuk melakukan itu sebenarnya kita bisa menggunakan \n sebagai ENTER
// Namun PHP memiliki fitur yang lebih baik, yaitu bernama Heredoc dan Nowdoc

//Heredoc seperti single quote

echo <<<TEXT
Ini Multiline String
Ini Multiline String
Ini Multiline String
Ini Multiline String
TEXT;


// Nowdoc seperti double quote punya kemampuan lebih 🗿

echo <<<"TEXT"
Ini Multiline String
Ini Multiline String
Ini Multiline String
Ini Multiline String
Bisa juga ditulis tanpa menggunakan \n
bisa juga ditulis tanpa menggunakan "" 
TEXT;
