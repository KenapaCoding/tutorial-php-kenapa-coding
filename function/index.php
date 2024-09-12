<?php
    function salam() {
        echo "Halo, selamat datang!";
    }
    
    salam(); // Memanggil fungsi 'salam'

    // fungsi dengan parameter
    function penjumlahan($a, $b) {
        $hasil = $a + $b;
        echo "Hasil penjumlahan: $hasil";
    }
    
    penjumlahan(5, 3); // Output: Hasil penjumlahan: 8


    // fungsi dengan return statement
    function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
    
    $luas = luasPersegi(4);
    echo "Luas persegi: $luas"; // Output: Luas persegi: 16

    // built-in function
    $teks = "Halo, Dunia!";
    echo strlen($teks); // Output: 12
    echo strtoupper($teks); // Output: HALO, DUNIA!

    $buah = array("apel", "jeruk");
    array_push($buah, "mangga", "pisang");
    print_r($buah); 
    echo count($buah); // Output: 3

    
?>