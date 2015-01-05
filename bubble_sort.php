<?php

$data = array(52, 77, 5, 59, 47, 30, 62, 65, 26, 28);
print_r($data);
echo '<br>';

$count = count($data);

for ($j = $count; $j >2; $j--) {

  for ($i = 0; $i < $count - 1; $i++) {

    if ($data[$i] > $data[$i + 1]) {
      $tmp = $data[$i];
      $data[$i] = $data[$i + 1];
      $data[$i + 1] = $tmp;
    }

  }

}

print_r($data);
echo '<br>';