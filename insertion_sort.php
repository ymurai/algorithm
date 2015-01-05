<?php

$data = array(52, 77, 5, 59, 47, 30, 62, 65, 26, 28);
print_r($data);
echo '<br>';

foreach ($data as $i => $value) {
  $j = $i;
  while ($value <= $sort[$j]) {
    $sort[$j + 1] = $sort[$j];
    $j--;
    if ($j < 0) { break; }
  }
  $sort[$j + 1] = $value;
}

print_r($sort);
echo '<br>';