<!--
  4 variables:
    Local
    Global
    Static
    Function params
-->

<?php
  $message = "hi"; //global var

  function say() {
    $message = "hello"; //local var
    echo $message . "<br>";
  }

  echo $message . "<br>";
  say();

  function global_say() {
    global $message; //global var
    echo $message . "<br>";
  }

  global_say();


  function counter() {
    static $count = 1; //static var
    return $count++;
  }

  echo counter() . "<br>";
  echo counter() . "<br>";
  echo counter() . "<br>";



  function sum($numbers) { //$numbers are function params
    $total = 0;
    foreach($numbers as $num) {
      $total += $num;
    }
    return $total;
  }

  echo sum([10, 20, 30]);

?> 