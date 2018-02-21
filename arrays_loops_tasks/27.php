<?php
/*
	Создать генератор случайных таблиц. 
	Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
	Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
	Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. 
	В каждой ячейке должно находиться случайное число
*/

$rows = rand(2, 5);
$cols = rand(2, 5);
$colors = ['red','yellow','blue','gray','maroon','brown','green'];

echo '<table>';
for ($i = 0; $i < $rows; $i++) {
    echo '<tr>';
    for ($a = 0; $a < $cols; $a++) {
        $color = $colors[array_rand($colors)];
        $number = rand(1000, 10000);
        echo "<td style='background-color:{$color}'>{$number}</td>";
    }
    echo '</tr>';
}
echo '</table>';