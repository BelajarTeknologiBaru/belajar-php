<?php

$nilai = 90;
$hadir = 100;

if ($nilai <= 60 && $hadir <= 80) {
    echo "Maaf Anda Tidak Lulus";
} else {
    echo "Selamat Anda Lulus";
}


//elese if

$nama = "Ahmad";

if ($nama == "Ahmad") {
    echo "Selamat Datang $nama";
} elseif ($nama == "Budi") {
    echo "Selamat Datang $nama";
} else {
    echo "Selamat Datang undifined";
}
