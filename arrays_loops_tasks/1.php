<?php
//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик

$new_alements = ['html', 'css', 'php', 'js', 'jq'];

foreach($new_alements as $value){
	echo $value.'<br>';
}
