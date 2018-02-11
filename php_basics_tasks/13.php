<?php
$length = 100;
$time = 2;
$speed = $length/$time;
$speed_m_s = $length*1000/$time/3600;

echo '<p>Скорость Автомобиля равна '. $speed .' км/ч</p>';
echo '<p>Скорость Автомобиля равна '. $speed_m_s .' м/с</p>';