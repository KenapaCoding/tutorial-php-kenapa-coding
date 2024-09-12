<?php
    // while loop
    $i = 1;

    while ($i <= 5) {
        echo "Nomor: $i <br>";
        $i++;
    }

    // do while loop

    $j = 1;
    do {
        echo "Nomor: $j <br>";
        $j++;
    } while ($j <= 5);

    // for loop
    for ($i = 1; $i <= 5; $i++) {
        echo "Nomor: $i <br>";
    }

    // for each 
    $buah = array("apel", "pisang", "jeruk");

    foreach ($buah as $item) {
        echo "Buah: $item <br>";
    }

    // break
    for ($i = 1; $i <= 5; $i++) {
        if ($i == 3) {
            break; // Menghentikan loop jika $i sama dengan 3
        }
        echo "Nomor: $i <br>";
    }

    // continue
    for ($i = 1; $i <= 5; $i++) {
        if ($i == 3) {
            continue; // Melewati iterasi jika $i sama dengan 3
        }
        echo "Nomor: $i <br>";
    }
    

?>