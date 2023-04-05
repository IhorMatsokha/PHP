<?php

//Завдання 1:
//Створіть масив, який містить наступні властивості: ім'я (name), прізвище (surname),
// вік (age) та середній бал (avg_grade). Після цього серіалізуйте його.
// Відобразьте готовий результат на єкран.
// З серіалізованої строки зробіть unserialize та виведіть результат на екран.
echo 'Task_1';
echo '<br>';
$array = [
    "name" => "Ivan",
    "surname" => "Pupckin",
    "age" => 100,
    "avg_grade" => 10,
];

$str = serialize($array);
echo $str;
echo '<br>';
$arr = unserialize($str);
var_dump($arr);
echo '<br>';
echo '<br>';

//Завдання 2:
//Створіть рядок "I love PHP". Використовуючи функцію explode,
// розбийте цей рядок на окремі слова та виведіть їх на екран.
echo 'Task_2';
echo '<br>';
$str_task_2 = 'I love PHP';
$arr_task_2 = explode(' ', $str_task_2);
var_dump($arr_task_2);
echo '<br>';
echo '<br>';

//Завдання 3:
//Створіть рядок "i love php". Використовуючи функцію ucwords,
//змініть першу літеру кожного слова на велику та виведіть рядок на екран.
echo 'Task_3';
echo '<br>';
$str_task_3 = 'i love php';
echo ucwords($str_task_3);
echo '<br>';
echo '<br>';

//Завдання 4:
//Створіть рядок " i love php ".
// Використовуючи функцію trim,
// видаліть пробіли в початку та в кінці рядка та виведіть рядок на екран.
echo 'Task_4';
echo '<br>';
$str_task_4 = ' i love php     ';
echo trim($str_task_4);
echo '<br>';
echo '<br>';

//Завдання 5:
//Створіть рядок "i love php". Використовуючи функцію substr, виведіть на екран слово "php".
echo 'Task_5';
echo '<br>';
$str_task_5 = 'i love php';
echo substr($str_task_5, -3);
echo '<br>';
echo '<br>';

//Завдання 6:
//Створіть рядок "Hello my world".
// Використовуючи функцію substr, виведіть на екран слова "Hello world".
// Слово "my" потрібно замінити на порожнечу.
echo 'Task_6';
echo '<br>';
$str_task_6 = 'Hello my world';
echo substr($str_task_6, 0, 5) . substr($str_task_6, 8, 6);
echo '<br>';
echo '<br>';

//Завдання 7:
//Розбити рядок "I love PHP" за допомогою циклу for.
echo 'Task_7';
echo '<br>';
$str_task_7 = 'I love PHP';
for ($i = 0;$i < Strlen($str_task_7);$i++){
    echo $str_task_7[$i];
    echo '<br>';
}
echo '<br>';
echo '<br>';

//Завдання 8:
//Створіть рядок "i love php". Використовуючи функцію substr, виведіть на екран слово "love".
echo 'Task_8';
echo '<br>';
$str_task_8 = 'i love php';
echo substr($str_task_8, 2, 4);
echo '<br>';
echo '<br>';
?>