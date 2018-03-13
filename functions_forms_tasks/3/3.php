<?php
/*3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N
символов. Значение N задавать через форму.
Проверить работу на кириллических строках - найти ошибку, найти решение.
*/

include '../library/functions.php';


function delAllWordsN($nSymbol, $pathFiles){
	
	//Получаем содержимое файла
	$getText = file_get_contents($pathFiles);
	
	//Преобразования строки в массив
	$textArr = explode(' ', $getText);

	for($i=0; $i < count($textArr); $i++){
		if(strlen($textArr[$i]) > $nSymbol){
			unset($textArr[$i]);
		}
	}

	return implode(' ', $textArr);
}

$message = '';
$results = '';

if($_POST){
	
	$qty_sumbols = requestPost('qty_sumbols');
	$pathFiles = __DIR__ .'/words.txt';
	
	if($qty_sumbols){
		$results = delAllWordsN($qty_sumbols, $pathFiles);
		$message = $results;
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
		<input name="qty_sumbols" type="number" value="1"></textarea>
		<button type="submit">Submit</button>
	</form>
	<div class="message-status">
	    <?=$message ?>
	</div>
	
 </body>
</html>