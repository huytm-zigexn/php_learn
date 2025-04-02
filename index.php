<?php
  $numbers = [2,3];
  $scores = [1, ...$numbers, 4];
  print_r($scores);


  $even = [0, 2, 4, 6];
  $odds = [1, 3, 5, 7];
  $numbers = [...$even, ...$odds];
  print_r($numbers);

  //Using PHP spread operator with a return value of a function call
  function get_random_numbers()
  {
    for ($i = 0; $i < 5; $i++) {
      $random[] = rand(1, 100);
    }
    return $random;
  }

  $random_numbers = [...get_random_numbers()];

  print_r($random_numbers);


  //Using PHP spread operator with a generator
  function even_number() {
    for ($i = 2; $i < 10; $i += 2) {
      yield $i;
    }
  }

  $even_nums = [...even_number()];
  print_r($even_nums);


  //Using PHP spread operator with a Traversable object
  class Animals implements IteratorAggregate 
  {
    private $pets = ["dog", "cat", "parrot"];
    
    public function getIterator():Traversable
    {
      return new ArrayIterator($this -> pets);
    }
  }

  $pet = new Animals();
  $animals = [...$pet];
  print_r($animals);



  //Spread operator and named arguments
  function format_name(string $firstname, string $middlename, string $lastname): string
  {
    return $middlename ? "$firstname $middlename $lastname" : "$firstname $lastname";
  }

  $name1 = ['firstname' => 'Huy', 'middlename' => 'Minh', 'lastname' => 'Tran'];
  $name2 = ['firstname' => 'Huy', 'middlename' => '', 'lastname' => 'Tran'];

  echo format_name(...$name1) . "<br>";
  echo format_name(...$name2) . "<br>";
?> 