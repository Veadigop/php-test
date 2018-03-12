<?php
/* 4. Написать функцию, которая выводит список файлов в заданной директории. 
	  Директория задается как параметр функции.
*/

function scaningFile($pathFiles){
	$pathFile = scandir( $pathFiles );
	$result = array_diff(scandir( $pathFiles ), Array( ".", ".." ));
	
	echo '<pre>'.print_r($result, true).'</pre>';
}

scaningFile(__DIR__);
