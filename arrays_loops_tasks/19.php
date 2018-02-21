<?php
/*
	Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
	текущий день выведите курсивом. Текущий день должен храниться в переменной $day
*/
$arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$day = date('l');

foreach($arr as $value){
	if($value == $day){
		echo '<b>'.$value.'</b><br>';
	}
	else{
		echo $value.'<br>';
	}
}