<?php
require_once '../lib/dBug.php';

$data = array(52, 77, 5, 59, 47, 30, 62, 65, 26, 28);
$h = 4;

while($h >= 1) {

  foreach ($data as $i => $value) {
    $j = $i;
    while ($value <= $sort[$j]) {
      $sort[$j + 1] = $sort[$j];
      $j--;
      if ($j < 0) { break; }
    }
    $sort[$j + 1] = $value;
  }

  $h--;
}

new dBug($data);
new dBug($sort);