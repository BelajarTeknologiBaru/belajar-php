<?php

// while(condition) { Block of code }

// condition -> kondisi yang akan dievaluasi setiap perulangan jika true maka perulangan akan berlanjut, jika false maka perulangan akan berhenti
// Block of code -> kode yang akan dieksekusi selama kondisi bernilai true



$counter = 1;

while($counter <=10){
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
}

$counter = 1;

// Syntax Alternative
while ($counter <= 10):
    echo "Ini adalah while loop ke-$counter" . PHP_EOL;
    $counter++;
endwhile;