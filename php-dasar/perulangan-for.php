<?php

//  for(initStatement; condition; postStatement) {
//      // block of code
// 

// initStatement -> statement yang akan dieksekusi sekali di awal
// condition -> kondisi yang akan dievaluasi setiap perulangan
// postStatement -> statement yang akan dieksekusi setiap kali diakhir perulangan

for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL;
}