<?php
$length = 100;
$time = 2;
$speed_k_h = $length/$time;
$speed_m_s = $length*1000/$time/3600;

echo '<p>Скорость Автомобиля равна '. $speed_k_h .' км/ч</p>';
echo '<p>Скорость Автомобиля равна '. $speed_m_s .' м/с</p>';