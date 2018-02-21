<?php
/*
	Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
	выходные дни следует вывести жирным
*/
$arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

foreach($arr as $value){
	if($value == 'Saturday' || $value == 'Sunday'){
		echo '<b>'.$value.'</b><br>';
	}
	else{
		echo $value.'<br>';
	}
}