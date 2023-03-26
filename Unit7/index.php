<?php

$a = [1, 2, 3, 4, 5];
$b = [1, 2, 3, 4, 5, 6, 7, 8];

$am = array_merge($a, $b);
var_dump($am);
echo '<br>';
echo 'Завдання 1';
echo '<br>';
$arr = [1, 2];
for ($i = 1; $i <= 10; $i+=2) {
    echo $am[$i];
    echo '<br>';
}
echo 'Завдання 2';
echo '<br>';
if (array_search(2, $am)){
    $n = array_search(2, $am);
    echo "Key - $n";
    echo '<br>';
} else {
    'Ключа 2 не існує';
    echo '<br>';
}

if (array_search(7, $am)){
    $n = array_search(7, $am);
    echo "Key - $n";
    echo '<br>';
} else {
    'Ключа 7 не існує';
    echo '<br>';
}

if (array_search(9, $am)){
    $n = array_search(9, $am);
    echo "Key - $n";
    echo '<br>';
} else {
    echo 'Значення 9 в масиві не існує';
    echo '<br>';
}
echo '<br>';
echo 'Завдання 3';
echo '<br>';
if (array_key_exists('2', $am)) {
    echo "The element is in the array";
}
echo '<br>';
if (array_key_exists('4', $am)) {
    echo "The element is in the array";
}
echo '<br>';
echo 'Завдання 4';
echo '<br>';
$_COOKIE = setcookie('name', "admin");
echo $_COOKIE['name'];
echo '<br>';
echo 'Завдання 5';
echo '<br>';
session_start();
$_SESSION['config'] = 'settings';
var_dump($_SESSION);
echo '<br>';
echo 'Завдання 6';
echo '<br>';
unset($_SESSION['config']);
var_dump($_SESSION);
echo '<br>';
unset($_COOKIE['name']);
echo $_COOKIE['name'];
session_destroy();