<?php
  declare(strict_types = 1); //strict types

  function add (int|float|string $x, int|float|string $y) :int|float|string {
    return $x + $y;
  }

  echo add(1, 2) . "<br>";
  echo add(1, 2.5) . "<br>";
  echo add(1, '2') . "<br>"; //type hints

  function super_add (int|float|string $x, int|float|string $y, int|float|string ...$numbers) :int|float|string {
    return $x + $y + array_sum($numbers);
  }
  echo super_add(1, 2, 3, '4', 5, 6) . "<br>"; //variadic function
?> 