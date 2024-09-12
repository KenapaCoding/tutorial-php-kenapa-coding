<?php
    // array pada umumnya
    $buah = ["Apel", "Pisang", "Jeruk"];
    echo $buah[0]; // Output: Apel
    echo $buah[1]; // Output: Pisang

    // array asosiatif
    $umur = [
        "Andi" => 25,
        "Budi" => 30,
        "Citra" => 28
    ];
    echo $umur["Andi"]; // Output: 25
    echo $umur["Budi"]; // Output: 30
    
    // array multidimensional
    $data = [
        ["Andi", 25, "Jakarta"],
        ["Budi", 30, "Bandung"],
        ["Citra", 28, "Surabaya"]
    ];
    echo $data[0][0]; // Output: Andi
    echo $data[1][2]; // Output: Bandung

    // built-in function dalam array
    $angka = [4, 2, 8, 1];
    sort($angka); // Hasil: [1, 2, 4, 8]
    print_r($angka);
    echo"<br>";

    $buah1 = ["Apel", "Pisang"];
    $buah2 = ["Jeruk", "Anggur"];
    $gabungan = array_merge($buah1, $buah2);
    // Hasil: ["Apel", "Pisang", "Jeruk", "Anggur"]

    $buah = ["Apel", "Pisang", "Jeruk"];
    echo count($buah); // Hasil: 3

    if (in_array("Apel", $buah)) {
        echo "Apel ditemukan!";
    }


    
?>