<?php
/*
	Ваше задание создать массив, наполнить это случайными значениями (функция rand),
	найти максимальное и минимальное значение и поменять их местами
*/
$arr = [];
for ($i = 0; $i < 5; $i++) {
    $arr[] = rand(1, 100);
}
print_r($arr);
echo '<br>';

$arrMax = array_search(max($arr), $arr);
$arrMin = array_search(min($arr), $arr);

list($arr[$arrMin], $arr[$arrMax]) = [$arr[$arrMax], $arr[$arrMin]];
print_r($arr);