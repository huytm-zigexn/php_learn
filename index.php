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




  //ARRAY DESTRUCTING
  [$buy_price, $tax] = $prices;

  echo "The price is $buy_price and tax is $tax";

  //Using a list to skip array elements
  $prices = [100, 0.05, 0.1];

  [$buy_price, , $tax] = $prices;

  echo "The price is $buy_price and tax is $tax";


  //Using the nested list to assign variables
  $elements = ['body', ['white', 'blue']];
  [$element, [$bgcolor, $color]] = $elements;
  var_dump($element, $bgcolor, $color);

  [
    'first_name' => $first,
    'last_name' => $last,
    'age' => $age
  ] = $person;
  var_dump($first, $last, $age);
  

  //Swaping variables
  $x = 10;
  $y = 20;
  [$x, $y] = [$y, $x];
  echo "<br>" . $x . "<br>" . $y;

  //Parsing an array returned from a function
  [
    'dirname' => $dirname,
    'basename' => $basename
  ] = pathinfo('c:\temp\readme.txt');

  var_dump($dirname, $basename);
?> 