<?php
/*
	Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
	рядов, а не 5
*/
for($i=1; $i<10; $i++){
	$piramida ='';
	for($a=0; $a<$i; $a++){
		$piramida .=$i;
	}
	echo $piramida.'<br>';
}
