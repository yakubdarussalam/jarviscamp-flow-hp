<?php
//untuk memberhentikan loop berdasarkan kondisi yang sudah ditentukan

//use case 1
$rasa = ['gk enak','enak'.'enak bet cuy'];

for($i=0; $i <2; $i++){
    if ($i==1){
        break;
    }
    echo '<br>makanannya <br>'.$rasa[$i];
}


//use case 2
$target = 10;

for($i=0; $i <50; $i++){
    if ($i==$target){
        echo '<br><br>ketemu!<br>';
        break;
    }
}


//use case 3

$makanan = ["ayam goreng","nasi pecel","nasi uduk","nasi padang","sayur asem"];

for($i=0; $i < count($makanan); $i++){
    if ($makanan[$i]=="nasi padang"){
        echo '<br>nasi padang ketemu!';
        break;
    }
    echo "<br>bukan nasi padang <br>";
}