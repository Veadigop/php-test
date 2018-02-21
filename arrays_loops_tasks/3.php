<?php
//3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result

$new_alements = [26, 17, 136, 12, 79, 15];
$result=0;

foreach($new_alements as $value){
	//Вариант 1
		$result += pow($value, 2);
	/* Вариант 2
		$result += $value*$value;
	*/
}
echo $result;
