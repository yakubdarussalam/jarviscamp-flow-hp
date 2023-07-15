<?php
//perbedaan dengan while loop jika do nilai awalnya sudah salah maka tetap akan jalan 1 kali
$counter = 1;

do{
    echo "<br>Angka $counter";
    $counter++;
} while ($counter <= 5);