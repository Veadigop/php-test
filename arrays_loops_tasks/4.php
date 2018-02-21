<?php
/*Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, 
с помощью второго — столбец элементов $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); */

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];

foreach($arr as $value=>$key){
	echo $value.'<br>';
}

foreach($arr as $value=>$key){
	echo $key.'<br>';
}