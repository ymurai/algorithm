<?php
$input_lines = trim(fgets(STDIN));
$str = explode(' ', $input_lines);
$n = $str[0];
$t = $str[1];

$pos['A'] = '321';
$pos['B'] = '';
$pos['C'] = '';
echo $pos['A']."/".$pos['B']."/".$pos['C'];
		echo PHP_EOL;

$count = 0;
hanoi($n, "A", "B", "C");
echo "移動回数：",$count;

echo PHP_EOL;

function hanoi($n, $a, $b, $c) {
	global $pos, $count, $t;

	if ($n > 0) {
		hanoi($n-1, $a, $c, $b);
		if ($count == ($t-1)) { echo '!!';}
		$pos[$a] = substr($pos[$a], -1);
		$pos[$b] .= $n;
		echo $n,"番の円盤を",$a,"から",$b,"へ移動";
		echo $pos['A']."/".$pos['B']."/".$pos['C'];
		echo PHP_EOL;
		$count++;
		hanoi($n-1, $c, $b, $a);
	}
}