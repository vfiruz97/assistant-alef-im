<?php
/**
* Задание 1.
* 1. При помощи языка PHP создайте двумерный массив размером 6х6, заполните его числами из последовательности Фибоначчи
* таким образом, чтобы в углу [0][0] была единица, в ячейке [1][0] была единица, в ячейке [2][0] была цифра 2. 
* Найдите сумму чисел назодящихся на диагонали [5][0]-[0][5]
*/

$arr_size = 6;
$s = 0;
$f = [];
$f[0][0] = 1;
$f[1][0] = 1;
$f[2][0] = 2;

for($i=0; $i < $arr_size; $i++) {
	for($j=0; $j < $arr_size; $j++) {
		if( isset($f[$j][$i]) ) continue;
		elseif( ($j-1) < 0 ) {
			$f[$j][$i] = $f[$arr_size -1][$i-1] + $f[$arr_size -2][$i-1];
			continue;
		}
		elseif(($j-2) < 0) {
			$f[$j][$i] = $f[$j -1][$i] + $f[$arr_size -1][$i-1];
			continue;
		}
		else
			$f[$j][$i] = $f[$j -1][$i] + $f[$j -2][$i];
	}
}

for($i=0; $i < $arr_size; $i++) {
	for($j=0; $j < $arr_size; $j++)
		if( (($i + $j) == ($arr_size -1)) ) $s += $f[$i][$j];
}

echo $s;
