<?php 
   $greeting = "hello world";
   $num =  123;
   $float = 3.14;
   $bool = true;
   $arr = ['a', 'b', 3];
   $var = null;

   gettype($greeting) ."<br>";
   gettype($num) ."<br>";
   gettype($float) ."<br>";
   gettype($bool) ."<br>";
   gettype($arr) ."<br>";
   gettype($var) ."<br>";

   var_dump($greeting)."<br>";
   var_dump($num);
   var_dump($arr);

   echo is_string($greeting) // true or false
?>