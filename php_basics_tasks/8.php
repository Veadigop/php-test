<?php
$age = 31;

if(  18 <= $age && $age < 59){
	echo "<p>Вам еще работать и работать</p>";
}
elseif($age > 59){
	echo "<p>Вам пора на пенсию</p>";
}
elseif(0 <= $age && $age < 17){
	echo "<p>Вам еще рано работать</p>";
}
elseif( $age < 0 ){
	echo "<p>Неизвестный возраст</p>";
}