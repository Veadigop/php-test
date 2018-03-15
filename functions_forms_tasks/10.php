<?php
/*10. Написать функцию, которая считает количество уникальных слов в тексте.
	  Слова разделяются пробелами.
      Текст должен вводиться с формы.
*/

include './library/functions.php';

function wordsUnique($words){
	
	//Получаем массив
	$wordsUniqueArr = explode(' ', $words);
	
	//Убирает повторяющиеся значения из массива и получаем число улементов масива
	$uniq_words = count(array_unique($wordsUniqueArr));
	
	return $uniq_words;
}

$message = null;

if($_POST){
	$words_unique = requestPost('words_unique');
	if($words_unique){
		$resultWordsUnique = wordsUnique($words_unique);
		$message = 'Количество уникальных слов - ' .$resultWordsUnique;
	}
	else{
		$message = 'Invalid';
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
		<textarea name="words_unique" required></textarea>
		<button type="submit">Submit</button>
	</form>
	<div class="message-status">
	    <?=$message ?>
	</div>
	
 </body>
</html>