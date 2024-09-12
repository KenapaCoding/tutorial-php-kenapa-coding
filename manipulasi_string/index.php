<?php
    // String Concatenation
    $firstName = "John";
    $lastName = "Doe";
    $fullName = $firstName . " " . $lastName; // Menggabungkan nama depan dan nama belakang
    echo $fullName; // Output: John Doe

    $fullName = "$firstName $lastName"; // Menggabungkan menggunakan interpolasi string
    echo $fullName; // Output: John Doe

    // Pencarian String
    $kalimat = "PHP adalah bahasa pemrograman PHP";
    $posisi_awal = strpos($kalimat, "PHP");
    $posisi_akhir = strrpos($kalimat, "PHP"); // Mencari posisi terakhir string "PHP"
    echo $posisi_awal . "" . $posisi_akhir; // Output: 26

    // Fungsi Lain di Manipulsi String
    $text = "Saya suka belajar JavaScript";
    $newText = str_replace("JavaScript", "PHP", $text); // str_replace()
    echo $newText; // Output: Saya suka belajar PHP
    
    $panjang = strlen($text); // strlen()
    echo $panjang; // Output: 24
    
    $upperText = strtoupper($text); // strtoupper()
    echo $upperText; // Output: SAYA SUKA BELAJAR JAVASCRIPT
    
    $lowerText = strtolower($text); // strtolower()
    echo $lowerText; // Output: saya suka belajar javascript
    
    $subText = substr($text, 0, 7); // substr()
    echo $subText; // Output: Saya su
    
?>