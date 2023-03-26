<?php
$a = [1, 2, 3, 4, 5];
$b = [1, 2, 3, 4, 5, 6, 7, 8];
$sum = $a + $b;

$am = array_merge($a, $b);

echo 'Додавання';
echo '<br>';
var_dump($sum);
echo '<br>';
echo 'array_merge';
echo '<br>';
var_dump($am);

echo '<br>';
echo 'List';
echo '<br>';
$c = list(,,$one, $two, $three) = $a;
var_dump($one);
echo '<br>';
var_dump($two);
echo '<br>';
var_dump($three);