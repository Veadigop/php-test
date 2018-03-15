<?php 
/*9. Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba".
Ввод текста реализовать с помощью формы. */

include 'library/functions.php';

function wordReverse($word){
	$word = strrev($word);
	return $word;
}


if($_POST){
	$reverse_word = strip_tags(requestPost('reverse_word'));
	$result_reverse_word = wordReverse($reverse_word);
	$message = 'You reverse word result is <b>'. $result_reverse_word .'</b>';
}
else{
	$message = 'Invalid Value';
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
		<input name="reverse_word" required>
		<button type="submit">Submit</button>
	</form>
	<div class="message-status">
	    <?=$message ?>
	</div>
	
 </body>