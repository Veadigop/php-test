<?php
/* Создать форму с элементом textarea. 
	При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
	Реализовать с помощью функции
*/
include('library/functions.php');

function getTopLongWords($a){

	$symbol_del = ['.', ',', ';', ':', '–', '- ', '!', '?', '"', '<', '>'];
	
	// Удаление символов и Преобразования строки в массив
	$first_comments = explode(' ', str_replace($symbol_del, '', $a));

	// Удаление пустых елементов массива
	$first_comments = array_filter($first_comments);

	// Сортировка массива по длине строк
	uasort($first_comments, function ($a, $b) {

		if (strlen($a) == strlen($b)) {
            return 0;
        }
		if(strlen($a) > strlen($b)){
			$resq = (strlen($a) > strlen($b)) ? -1 : 1;
		}
        return (strlen($a) > strlen($b)) ? -1 : 1;
    });

	return array_slice($first_comments, 0, 3);
}

$message = null;
$results = [];

if($_POST){
	$comment1 = strip_tags(requestPost('first_comment'));
	
	if($comment1){
		$results = getTopLongWords($comment1);
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
		<textarea name="first_comment" required></textarea>
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