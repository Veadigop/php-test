<?php
/*  Написать функцию, которая в качестве аргумента принимает строку,
 и форматирует ее таким образом, что предложения идут в обратном порядке.
Пример:
Входная строка:  'А Васька слушает да ест. А воз и ныне там. 
А вы друзья как ни садитесь, все в музыканты не годитесь.
А король-то — голый. А ларчик просто открывался.
А там хоть трава не расти.'
Строка, возвращенная функцией : 
'А там хоть трава не расти. А ларчик просто открывался. 
А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь.
А воз и ныне там.А Васька слушает да ест.'*/

include './library/functions.php';

function reverseSentences($sentences){
	
	//Преобразования строки в массив
	$sentences = explode('.', $sentences);
	
	// Удаляем пустые элементы
	$sentences = array_filter($sentences);
	
	// Получаем массив с элементами в обратном порядке
	$sentences = array_reverse($sentences);
	
	//Объединяет элементы массива в строку
	$sentences = implode('. ', $sentences).'.';

	return $sentences;
}

$message = null;

if($_POST){
	
	$reverse_sentences = strip_tags(requestPost('reverse_sentences'));
	
	if($reverse_sentences ){
		$message = reverseSentences($reverse_sentences);
	}
	else{
		$message = 'Invalid Value';
	}	
}

?>

<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8" />
	  <title>HTML5</title>
	</head>
 <body>
 
	<form method="post">
		<textarea name="reverse_sentences" required></textarea>
		<button type="submit">Submit</button>
	</form>
	<div class="message-status">
	    <?=$message ?>
	</div>
	
 </body>
</html>