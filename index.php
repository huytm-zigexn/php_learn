<?php
  $scores = [
    ["Math", 8],
    ["English", 8],
    ["Physics", 6],
    ["Biology", 10],
  ];

  $add_subjects = [
    ["ab", 9],
    ["bc",8]
  ];

  $scores[] = ["Chemistry", 9];

  
  unset($scores[0]);

  array_splice($scores, 0, 2, $add_subjects); //array_splice($array, start, length, $replace_array): replace array's items by another array's items
  
  usort($scores, function ($a, $b) { //sort ascending
    return $a[1] <=> $b[1];
  });

  usort($scores, function ($a, $b) { //sort descending
    return $b[1] <=> $a[1];
  });
  
  foreach ($scores as $score) {
    foreach ($score as $score_detail) {
      echo $score_detail . "<br>";
    }
  }
?> 