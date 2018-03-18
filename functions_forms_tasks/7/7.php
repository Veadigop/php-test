<?php

/* 7. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом
	  поле и добавить его. Все добавленные комментарии выводятся над текстовым полем.
   
   и
   
   8. Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
	  Все добавленные комментарии выводятся над текстовым полем. 
	  Реализовать проверку на наличие в тексте запрещенных слов, матов.
	  При наличии таких слов - выводить сообщение "Некорректный комментарий".
	  Реализовать удаление из комментария всех тегов
   
*/

require_once('../library/functions.php');

define('COMMENT_FILE', 'comments.txt');

function setCommentContent($name, $comment){
	return [
		'name' => $name,
		'comment' => forbiddenWords($comment),
	];
}

function loadComment()
{
	if (!file_exists(COMMENT_FILE)) {
		return [];
	}
	$comment = file_get_contents(COMMENT_FILE);
	return unserialize($comment);
}

function saveComment(array $userComment){
	$comment = loadComment();
	$comment[] = $userComment;
	$comment = serialize($comment);
	file_put_contents(COMMENT_FILE, $comment);
}

function forbiddenWords($forbidden){
	$comments_arr = explode(' ', $forbidden);
	$forbidden_words = ['fuck', 'none', 'array'];
	$result = array_diff($comments_arr, $forbidden_words);
    return implode('', $result);
}



$name = requestPost('name');
$name = strip_tags($name);
$comment = strip_tags(requestPost('comment'));
$message = null;

if($_POST){
	
	if(!empty($name) && !empty($comment)){
		
	$set_comment_content = setCommentContent($name, $comment);
	saveComment($set_comment_content);
	$message = 'Save';
	header('Location: 7.php');
	}
	$messege = "Invalid";
}


$get_comment = loadComment();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Comments</title>
	</head>
<body>


<?php if(!empty($get_comment)):
	  for($i=0; $i<count($get_comment); $i++) :
?>
<li>
	<span><?= $get_comment[$i]['name'] ?> </span>
	<p><?= $get_comment[$i]['comment'] ?> </p>
</li>

<?php 
	endfor;
	endif; 
?>

<form method="post">
	<input type = "text" name="name">
    <textarea type="text" name="comment"></textarea>
    <br>
    <button type="submit">Submit</button>
</form>
</body>
</html>
