<?php
  $prices = [100, 0.1];

  list($buy_price, $tax) = $prices;

  echo "The price is $buy_price and tax is $tax";

  //Using a list to skip array elements
  $prices = [100, 0.05, 0.1];

  list($buy_price, , $tax) = $prices;

  echo "The price is $buy_price and tax is $tax";


  //Using the nested list to assign variables
  $elements = ['body', ['white', 'blue']];
  list($element, list($bgcolor, $color)) = $elements;
  var_dump($element, $bgcolor, $color);


  //Using a PHP list with an associative array
  $person = [
    'first_name' => 'Huy',
    'last_name' => 'Tran',
    'age' => 22
  ];

  list(
    'first_name' => $first,
    'last_name' => $last,
    'age' => $age
  ) = $person;
  var_dump($first, $last, $age);

?> 