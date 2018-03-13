<?php
/* 5. Написать функцию, которая выводит список файлов в заданной директории,
		которые содержат искомое слово.
  Директория и искомое слово задаются как параметры функции.
*/

include 'library/functions.php';

function necessaryWords($necessaryWords, $pathFiles = '/functions_forms_tasks/5/'){
	
	//Получаем список файлов
	$filesList = scandir($pathFiles);
	$necessaryArr = [];
	
	//Перебираем элементы масива и сравниваем его элемент с искомым словом 
	foreach($filesList as $item){
		if(mb_stripos($item, $necessaryWords) !== false){
			$necessaryArr [] = $item;
		}
	}

	return $necessaryArr;
}

$results = '';
$message = '';

if($_POST){
	
	$necessary_words = requestPost('necessary_words');
	$necessary_words_path = requestPost('path_files');
	
	
	if($necessary_words && $necessary_words_path){
		$results = necessaryWords($necessary_words, $necessary_words_path);
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
		<input name="necessary_words" type="input">
		<input name="path_files" type="input">
		<button type="submit">Submit</button>
	</form>
	<div class="message-status">
	    <?=$message ?>
	</div>
	
	<?php if($results) : ?>

	<ul>
	<?php foreach( $results as $result) : ?>
		<li><?=$result?></li>
	<?php endforeach; ?>
	</ul>
	
<?php endif; ?>
	
 </body>
</html>