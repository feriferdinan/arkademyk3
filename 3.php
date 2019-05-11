<?php
function cetak($nilai) {
    $karakter = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    for ($i = 0; $i < $nilai; $i++) {
        $randomString = substr(str_shuffle($karakter),0,32) ;
        print ($randomString."</br>");
    }
    
}
echo cetak(2) ;