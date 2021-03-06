<?php
/*
Написать функцию, которая в качестве аргумента принимает строку,
и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.

Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.'
Строка, возвращенная функцией :  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.'; */
function reverseFirstWord($sentence){

	$sentenceResult = '';
	
	//Преобразования строки в массив
	$sentenceArr = explode('.', $sentence);


	foreach($sentenceArr as $sentence){
		// Удаляет пробелы
		$sentence_trim = ltrim($sentence);

		if(mb_strlen($sentence)){
			/*Делаем первый символ строки с большой буквы,
			  конкатенируем его с остальными символами  предложения и конкатенируем с точкой.
			  Каждый елемет конкатенируем между собой.
			  Убираем пробелы в начале и конце строки.
			*/
			$sentenceResult .= trim(mb_strtoupper(mb_substr($sentence_trim, 0, 1)) . mb_substr($sentence_trim, 1) .'. ');
		}
		
	}
	
	return $sentenceResult;
}
reverseFirstWord('а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.');
