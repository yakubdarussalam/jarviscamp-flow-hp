<?php

$umur = 1;

if($umur >= 50 && $umur <= 200){
    echo "Anda Sudah Lanjut Usia";
} elseif ($umur >=30) {
    echo "Anda Sudah Paruh Baya";
} elseif ($umur >=20){
    echo "Anda Remaja";
} elseif ($umur >=5){
    echo "Anda Bocil";
} elseif ($umur >=0){
    echo "Anda Balita";
} else {
    echo "Anda Bukan Manusia";
}