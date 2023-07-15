<?php
$makanan = 'nasi goreng';
$mood;
//indentasi tidak ngaruh, hanya kerapihan
switch($makanan){
    case 'sate ayam':
        $mood = 'sayur bayem | gk enak';
        break;
    case 'bubur ayam':
        $mood = 'lumayan';
        break;
    case 'nasi goreng':
    default:
        $mood = 'mantul';
        break;
}


echo "makanan ini membuat mood saya " . $mood;