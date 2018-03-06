<?php

function getCommandWords($a, $b){
	$first_comment = isset($_GET['first_comment']) ? $_GET['first_comment'] : '' ;
	$last_comment = isset($_GET['last_comment']) ? $_GET['last_comment'] : '' ;
	echo $first_comment;
	echo $last_comment;
}
getCommandWords('first_comment', 'last_comment');
?>

<!DOCTYPE html>
<html>
	<head>
	  <meta charset="utf-8" />
	  <title>HTML5</title>
	</head>
 <body>
	<form method="get">
		<textarea name="first_comment"></textarea>
		<textarea name="last_comment"></textarea>
		<button type="submit">Submit</button>
	</form>
 </body>
</html>