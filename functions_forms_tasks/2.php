<?php
/* Создать форму с элементом textarea. 
	При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
	Реализовать с помощью функции
*/

function getTopLongWords($a){
	$result_arr = [];
	$comments = isset($_GET[$a]) && !empty($_GET[$a]) ? explode(' ', $_GET[$a]) : '' ;
	var_dump(count($comments)-1);
	var_dump(count($comments));
	for($i = 0;  $i<count($comments); $i++){
		
					if(mb_strlen($comments[$i])> mb_strlen($comments[$i+1])){
				$result_arr[] = $comments[$i];
				
			}

	}
	
	
}
getTopLongWords('comment');
?>

<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8" />
	  <title>HTML5</title>
	</head>
 <body>
	<form method="get">
		<textarea name="comment"></textarea>
		<button type="submit">Submit</button>
	</form>
 </body>
</html>