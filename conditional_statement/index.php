<?php
    // if else, elseif
    $nilai = 85;

    if ($nilai >= 90) {
        echo "Nilai A";
    } else if ($nilai >= 75) {
        echo "Nilai B";
    } else {
        echo "Nilai C";
    }

    $warna = "merah";

    switch ($warna) {
        case "merah":
            echo "Warna favorit Anda adalah merah!";
            break;
        case "biru":
            echo "Warna favorit Anda adalah biru!";
            break;
        default:
            echo "Warna favorit Anda tidak diketahui.";
    }

?>