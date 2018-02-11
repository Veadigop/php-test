<?php

$foo = 'bar';
$bar = 10;
$foo = &$bar;
echo "<p>{$foo}</p>";