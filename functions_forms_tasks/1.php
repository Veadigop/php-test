<?php
/* 1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.*/

include './library/functions.php';

function getCommandWords($a, $b){
	$result_arr = [];// Для вариант через foreach
	$symbol_del = ['.', ',', ';', ':', '–', '- ', '!', '?', '"', '<', '>'];
	
	// Удаление символов и Преобразования строки в массив
	$first_comments = explode(' ', str_replace($symbol_del, '', $a));
	$last_comments = explode(' ', str_replace($symbol_del, '', $b));
	
	// Удаление пустых елементов массива
	$first_comments = array_filter($first_comments);
	$last_comments = array_filter($last_comments);
	
	//Вариант через foreach
	
	/*foreach($first_comments as $first_comment){
		foreach($last_comments as $last_comment){
			if ($first_comment===$last_comment){
				$result_arr[] = $first_comment;
			}
		}
	}
	return $result_arr;
	*/
	
	//Вариант через функцию array_intersect()
	return array_intersect($first_comments, $last_comments);
}

$message = null;
$results = [];

if($_POST){
	$comment1 = strip_tags(requestPost('first_comment'));
    $comment2 =  strip_tags(requestPost('last_comment'));

	
	if($comment1 && $comment2){
		$results = getCommandWords($comment1, $comment2);
		
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
		<textarea name="last_comment" required></textarea>
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