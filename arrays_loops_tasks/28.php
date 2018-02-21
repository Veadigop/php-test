<?php //Вывести таблицу умножения с помощью двух циклов for.( Вывод с помощью таблицы) ?>

<table class="table table-bordered">
    <tr>
        <th class="text-right">&nbsp;</th>
		<th class="text-right">1</th>
        <th class="text-right">2</th>
        <th class="text-right">3</th>
        <th class="text-right">4</th>
        <th class="text-right">5</th>
        <th class="text-right">6</th>
        <th class="text-right">7</th>
        <th class="text-right">8</th>
        <th class="text-right">9</th>
    </tr>
    <?php for ($i = 1; $i < 10; $i++) : ?>
        <tr>
            <?php 
				echo "<th>{$i}</th>";
				for ($a = 1; $a < 10; $a++) : 
					echo '<td >' . $i * $a . '</td>';
				endfor; 
			?>
        </tr>
    <?php endfor; ?>
</table>