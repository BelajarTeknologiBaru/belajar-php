<?php


// Secara default, kapasitas integer di PHP ada batasnya, 2147483647 untuk sistem operasi 32 bit, dan 9223372036854775807 untuk sistem operasi 64 bit
// Jika kita membuat number integer yang melebihi nilai tersebut, maka secara otomatis tipe numbernya akan berubah menjadi floating point.


echo "Integer Overflow: ";
var_dump(9223372036854775808); // akan jadi float  karena melebihi batas integer di PHP sistem operasi 64 bit
