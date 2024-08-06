<?php

$data = [
    "ahmad"=> "Ahmad Zidni",
];


// Normal If Else isset

if(isset($data["ahmad"])){
    $action = $data["ahmad"];
} else {
    $action = "nothing";
}

echo $action . PHP_EOL;


// Null Coalescing Operator
$action2 = $data["ahmad"] ?? "nothing";
echo $action2 . PHP_EOL;