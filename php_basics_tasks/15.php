<?php
//Если нужно сделать через форму - могу написать
$a = 11;
$b = 3;
$operator="%";
$result="";

if($a!=='' && $b!=='' && !is_string($a) && !is_string($b)){
	switch($operator){
		case '/' :
			if($b == 0){
				$result =  "Деление на ноль";
			}
			else{
				$result = $a/$b;
			}
		break;
		case '*' :
			$result = $a*$b;
		break;
		case '+' :
			$result = $a+$b;
		break;
		case '-' :
			$result = $a-$b;
		break;
		case '%' :
			$result = $a%$b;
		break;
		default:
			$result = "Неправильный оператор";
	}
	echo $result;
}