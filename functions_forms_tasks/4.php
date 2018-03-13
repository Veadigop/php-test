<?php
/* 4. Написать функцию, которая выводит список файлов в заданной директории. 
	  Директория задается как параметр функции.
*/

function scaningFile($pathFiles){
	//Получаем список файлов и директорий 
	$pathArr = scandir( $pathFiles );
	//Удаляем ненужные елементы массива и делаем начальный индекс массива 0 
	$resultArr = array_slice(array_diff($pathArr, Array( ".", ".." )), 0);
	
	// Удаляем директории и получаем исключительно список файлов
	for($i=0; $i<=count($resultArr); $i++){
		
		if(is_dir($pathFiles.'/'.$resultArr[$i])){
			unset($resultArr[$i]);
		}

	}
	
	echo '<pre>'.print_r($resultArr, true).'</pre>';
}

scaningFile(__DIR__);
