<?php
  $numbers = [10, 20, 30];

  //reduce(): reduce an array to a single value.
  $total = array_reduce($numbers, fn ($prev, $item) => $prev += $item);
  echo $total . "<br>";

  //map(): creates a new array whose elements are the results of applying a callback to each element.
  $double = array_map(fn ($item) => $item * 2, $numbers);
  print_r($double);

  class Square {
    public static function area($length) {
      return $length * $length;
    }
  }

  $lengths = [10, 20, 30];
  $area = array_map('Square::area', $lengths);
  print_r($area);


  //filter(): filter elements of an array using a callback function.
  $numbers = [1, 2, 3, 4, 5, 6, 7];
  $odd_nums = array_filter($numbers, fn ($x) => $x % 2 == 1);
  print_r($odd_nums);


  //Passing elements to the callback function
  $inputs = [
    'first' => 'John',
    'last' => 'Doe',
    'password' => 'secret',
    'email' => ''
  ];
  
  $filtered = array_filter($inputs, fn ($key) => $key !== 'password', ARRAY_FILTER_USE_KEY);
  print_r($filtered);

  $filtered_both = array_filter($inputs, fn ($value, $key) => $value !== '' && $key !== 'password', ARRAY_FILTER_USE_BOTH);
  print_r($filtered_both);
?> 