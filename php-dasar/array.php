<?php

// Array adalah tipe data yang berisikan kosong atau banyak data
// Array di PHP bisa berisikan data dengan jenis berbeda-beda
// Array di PHP memiliki panjang dinamis, artinya kita bisa menambah data ke Array sebanyak-banyaknya, tidak dibatasi kapasitasnya

$values = [1, "Dua", 3.14, true, false];
var_dump($values); // Output: Array ( [0] => 1 [1] => Dua [2] => 3.14 [3] => true [4] => false )

echo $values[0]; // Output 1
echo $values[1]; // Output Dua
echo $values[2]; // Output 3.14
echo $values[3]; // Output true
echo $values[4]; // Output false

// Mengubah value array

$values[0] = "Satu";
var_dump($values); // Output: Array ( [0] => Satu [1] => Dua [2] => 3.14 [3] => true [4] => false )

//OR

$names = array("Ahmad", "Zidni", "Hidayat");
var_dump($names); // Output: Array ( [0] => Ahmad [1] => Zidni [2] => Hidayat )

echo $names[0]; // Output Ahmad
echo $names[1]; // Output Zidni
echo $names[2]; // Output Hidayat

// mengakases panjanng array
echo count($values); // Output: 5


// Array Sebagai Map
$ahmad = array("name" => "Ahmad", "age" => 20);
var_dump($ahmad); // Output: Array ( [name] => Ahmad [age] => 20 ) 

$budi = ["name" => "Budi", "age" => 21];
var_dump($budi); // Output: Array ( [name] => Budi [age] => 21 )


// Array di dalam Array
$sisi = array("nama" => "sisi", "address" => [
    "city" => "Jakarta",
    "country" => "Indonesia"
]);
var_dump($sisi); // Output: Array ( [nama] => sisi [address] => Array ( [city] => Jakarta [country] => Indonesia ) )