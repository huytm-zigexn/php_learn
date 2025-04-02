<?php
  //ksort(): mainly useful for sorting associative arrays. (key sort)
  $employees = [
    'john' => [
      'age' => 24,
      'title' => 'Front-end Developer'
    ],
    'alice' => [
      'age' => 28,
      'title' => 'Web Designer'
    ],
    'bob' => [
      'age' => 25,
      'title' => 'MySQL DBA'
    ]
  ];

  ksort($employees, SORT_STRING);
  print_r($employees);
  echo "<br>";

  //krsort(): is like the ksort() function except that it sorts the keys of an array in descending order
  krsort($employees, SORT_STRING);
  print_r($employees);


  echo "<br>";

  //usort: to sort an array using a user-defined comparison function (user-defined)
  //sort numbers
  $numbers = [2, 1, 3];

  usort($numbers, fn ($x, $y) => $x <=> $y); //sort ascending
  print_r($numbers);

  echo "<br>";

  usort($numbers, function ($x, $y) { //sort descending
    if ($x === $y) {
      return 0;
    }
    return $x < $y ? 1 : -1;
  });
  print_r($numbers);

  echo "<br>";

  //sort string by length
  $names = [ 'Alex', 'Peter',  'John' ];
  usort($names, fn ($x, $y) => strlen($x) <=> strlen($y)); //sort ascending
  print_r($names);

  echo "<br>";

  usort($names, function($x, $y) {
    if (strlen($x) === strlen($y)) {
      return 0;
    }

    return strlen($x) < strlen($y) ? 1 : -1;
  });
  print_r($names);


  //sort an array of objects
  class Person {
    public $name;
    public $age;

    public function __construct(string $name, int $age)
    {
      $this->name = $name;
      $this->age = $age;
    }
  }

  $group = [
    new Person('Huy', 22),
    new Person('A', 20),
    new Person('B', 21)
  ];

  echo "<br>";

  usort($group, fn ($x, $y) => $x->age <=> $y->age);
  print_r($group);


  //Using a static method as a callback
  class PersonComparer {
    public static function compare(Person $x, Person $y) {
      return $x->age <=> $y->age;
    }
  }

  echo "<br>";

  usort($group, ["PersonComparer", "compare"]);
  print_r($group);

  echo "<br>";

  //asort(): to sort an associative array and maintain the index association. (associative sort)
  $mountains = [
    'K2' => 8611,
    'Lhotse' => 8516,
    'Mount Everest' => 8848,
    'Kangchenjunga' => 8586,
  ];
  asort($mountains); //sort ascending
  print_r($mountains);

  echo "<br>";

  arsort($mountains); //sort descending
  print_r($mountains);

  echo "<br>";
  //uasort(): sorts the elements of an associative array with a user-defined comparison function and maintains the index association.
  //user-defined associative sort
  $countries = [
    'China' => ['gdp' => 12.238 , 'gdp_growth' => 6.9],
    'Germany' => ['gdp' => 3.693 , 'gdp_growth' => 2.22 ],
    'Japan' => ['gdp' => 4.872 , 'gdp_growth' => 1.71 ],
    'USA' => ['gdp' => 19.485, 'gdp_growth' => 2.27 ],
  ];

  uasort($countries, fn ($x, $y) => $x['gdp'] <=> $y['gdp']);
  foreach($countries as $name => $stat) {
    echo "{$name} has a GDP of {$stat['gdp']} trillion USD with a gdp growth rate of {$stat['gdp_growth']} <br>";
  }


  //uksort(): to sort an array by keys using a user-defined comparison function. (user-defined key sort)
  $names = [
    'c' => 'Charlie',
    'A' => 'Alex',
    'b' => 'Bob'
  ];
  uksort($names, fn ($x, $y) => strtolower($x) <=> strtolower($y));
  print_r($names);
?> 