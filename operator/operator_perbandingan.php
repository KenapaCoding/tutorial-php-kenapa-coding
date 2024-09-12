<?php
   $a = 5;
   $b = 10;
   $c = '5';
   $d = 5;
   
   echo $a == $b;  // Output: 0 (false)
   echo $a != $b;  // Output: 1 (true)
   echo $a === $d; // Output: 1 (true) karena $a dan $d sama-sama integer dan nilainya sama
   echo $a === $c; // Output: 0 (false) karena $a adalah integer dan $c adalah string
   echo $a !== $c; // Output: 1 (true) karena $a adalah integer dan $c adalah string
   echo $a < $b;   // Output: 1 (true)
   echo $a > $b;   // Output: 0 (false)
   
?>