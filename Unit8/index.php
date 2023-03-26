<?php
echo 'Task_1';
//1) Оголошення та виклик функції з іменем myFunc
echo '<br>';
function myFunc()
{
    echo 'Hello!';
}

myFunc();
echo '<br>';
echo '<br>';
echo 'Task_2';
//2) Створити функцію з іменем calc , яка буде приймати три параметри , третій параметр буде не обовязковим. У функції
//викликати перевірку на наявність третього параметру. Отримати результат усіх введених параметрів.
echo '<br>';
function calc($z, $x, $v = null)
{
echo $z;
echo '<br>';
echo $x;
echo '<br>';
if ($v == true){
    echo $v;
} else {
    echo 'Третього параметра немає';
}
}

echo calc(1, 2, );
echo '<br>';
echo '<br>';
echo 'Task_3';
//3) Напишіть функцію, яка приймала будь-яке слово (введене користувачем) та виводило його.
echo '<br>';

function getString(String $a): String
{
    return $a;
}

echo getString('Строка');
echo '<br>';
echo '<br>';
echo 'Task_4';
//4) Напишіть функцію PHP, яка приймає один аргумент та виводить слово "Hello" разом з текстом, який був передано.
echo '<br>';
function getHi($a): String
{
    return 'Hello ' . $a . '!';
}
echo getHi('Bob');

echo '<br>';
echo '<br>';
echo 'Task_5';
//5) Напишіть функцію PHP, яка приймала будь-яку к-сть аргументiв і виводила їх.
echo '<br>';
function echoColors(...$colors)
{
    foreach ($colors as $value) {
        echo $value;
        echo '<br>';
    }
}
echoColors('black', 'grey', 'red');
echo '<br>';
echo 'Task_6';
//6) Напишіть функцію яка буде отримувати два масива. Потрібно зробити перевірку на отримання саме двох масивів. Об'єднати
//два масива і вивести результат у виді нового масиву.
echo '<br>';
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [6, 7, 8, 9, 10];
$r = 1;
function getArrays($arr1, $arr2)
{
    if (is_array($arr1) && is_array($arr2)){
        return var_dump(array_merge($arr1, $arr2));
    } else{
        echo 'Передайте два масиви';
    }

}

getArrays($arr1, $arr2);

echo '<br>';
echo 'Task_7';
//7) Напишіть функцію PHP, яка приймає два значення та лінк який переданий за допомогою посилання. Змінити зміну , яка
//передана в третьому аргументі. Вивести усі зміні.
echo '<br>';
function getLists($a, $b, &$link)
{
    $link = $link . $a . $b;
    return $link;
}
$link = 'https://google.com.ua';
echo getLists('/', 'maps',$link);
echo '<br>';
echo $link ;

echo '<br>';
echo 'Task_8';
//8) Створити глобальну зміну у функції. Змінити глобальну зміну поза межами функції і вивести її. Викликати функцію в
//якій створили глобальну зміну. Вивести рельтат зміної після викликаної функції.
echo '<br>';
function getDiv()
{
    global $n;
    $n = 10;
    return $n;
}
$n = 5;
echo 'n = ' . $n . ' -' . ' Зміна змінної поза межами функції';
echo '<br>';
getDiv();
echo 'n = ' . $n . ' -' . ' Зміна після виконання функції';

echo '<br>';
echo '<br>';
echo 'Task_9';
//9) Створити статичну зміну у функції і її результат буде плюсуватися відповідно від того скільки разів буде викликана
//функція. Викликати функцію 10 разів , на 7 кроці змінити статичну зміну у функції на значення 0.
echo '<br>';
echo '<br>';
echo 'Task_10';
//10) Створити функцію , яка буде отримувати 5 параметрів і в ретурні має створюватись масив з усіма введенними
//параметрами. Результат вивести через print_r , var_dump.
echo '<br>';
function showListColor($a, $b, $c, $d, $e)
{
    return [$a, $b, $c, $d, $e];
}

var_dump(showListColor('red', 'green', 'pink', 'blue','black'));

echo '<br>';
echo '<br>';
echo 'Task_11';
//11) Написати рекурсивну функцію для обчислення суми послідовності цілих чисел. Функція повинна приймати масив як
//аргумент, та повертати суму всього масиву.
echo '<br>';
function arraySum($arr) {
    $sum = 0;

    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $sum += arraySum($elem);
        } else {
            $sum += $elem;
        }
    }

    return $sum;
}
var_dump(arraySum([2, 5 ,10, 10]));

echo '<br>';
echo '<br>';
echo 'Task_12';
//12) Напишіть функцію PHP, яка прийматиме два параметри: строку тексту та число. Функція повинна згенерувати динамічне
//ім'я, яке буде містити слово "func" та послідовность символів, яку ми передали.
echo '<br>';

function getStringInt(String $a, int $b)
{
    return 'func' . $a . $b;
}

echo getStringInt('Name', 7);

echo '<br>';
echo '<br>';
echo 'Task_13';
//13) Напишіть анонімну функцію PHP, яка прийматиме два аргументи типу int та повертатиме суму цих двох чисел.
echo '<br>';
$returnSum = function (int $a, int $b)
{

        return $a + $b;

};

echo $returnSum(3, 7);