<?php
//jika lebih dari satu kondisi lebih baik pakai if else atau switch
$makanan = 'ayam goreng';
$rasanya = ($makanan == 'ayam goreng'|| $makanan == 'batu')?
    'enak cuy' :'gk enak jir';

echo $makanan.' rasanya '. $rasanya;
