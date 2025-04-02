<?php
  //Anonymous function
  $multiple = function ($x, $y) {
    return $x * $y;
  };

  echo $multiple(2, 5);

  $list = [10, 20, 30];
  $new_list = array_map(function ($x) {
    return $x * 2;
  }, $list);
  print_r($new_list);

  //Anonymous function's scope
  $message = 'hi';
  $say = function () use ($message) {
    echo $message . "<br>";
  };
  $say();

  //Return an anonymous function from a function
  function power($x)
  {
    return fn ($y) => pow($y, $x);
  }

  $power = power(2);
  echo $power(100);
?> 