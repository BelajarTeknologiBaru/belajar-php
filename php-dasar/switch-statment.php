<?php

$nilai = "C";

switch ($nilai) {
    case "A":
        echo "Anda Lulus Dengan Nilai Baik";
        break;
    case "B":
    case "C":
        echo "Anda Lulus";
        break;
    case "D":
        echo "Anda tidak lulus";
        break;
    default:
        echo "Anda Mungkin Salah Jurusan";
}
