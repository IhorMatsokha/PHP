
<?php
//1) Визначити довжину рядка 'The length of the string is length'
echo '1) Визначити довжину рядка "The length of the string is length"';
echo '<br>';
echo ('Довжина рядка ' . (strlen('The length of the string is length')) . ' символи.');
echo '<br>';
echo '<br>';
//2) Видалення символів екранування з цього тесту 'This is a \'test\' string.'
echo '2) Видалення символів екранування з цього тесту "This is a \'test\' string."';
echo '<br>';
echo ('Нова строка - ' . (stripslashes('This is a \'test\' string.')));
echo '<br>';
echo '<br>';
//3) Визначення кількості символів до першого співпадіння з словом word з цього тексту 'Hello, world!'
echo '3) Визначення кількості символів до першого співпадіння з словом word з цього тексту "Hello, world!"';
echo '<br>';
echo (strspn("Hello, world!", "world"));
echo '<br>';
echo '<br>';
//4) Порівняння двох рядків один 'Hello' і 'hello!'
echo '4) Порівняння двох рядків один "Hello"" і "hello!"';
echo '<br>';
echo (strcmp("Hello", "hello"));
echo '<br>';
echo '<br>';
//5) Пошук підрядка 'world' в рядку "Hello, world!"
echo '5) Пошук підрядка "world" в рядку "Hello, world!"';
echo '<br>';
echo (substr("Hello, world!", 6));
echo '<br>';
echo '<br>';
//6) Форматування рядка за допомогою sprintf(). В рядку "My name is John, I'm 30 years old, and my height is 1.75 meters."
//Зробити заміну в імені , кількість років і зріст.
echo '6) Форматування рядка за допомогою sprintf(). В рядку "My name is John, I\'m 30 years old, and my height is 1.75 meters."';
echo '<br>';
echo 'Зробити заміну в імені , кількість років і зріст.';
echo '<br>';
$str = 'My name is %s, I\'m %02d years old, and my height is %1.2f meters.';
echo (sprintf($str, 'John', 30, 1.75));
echo '<br>';
echo '<br>';
//7) Визначити ,що слова вимовляються приблизно однаково Smith , Smyth, John, join
echo '7) Визначити ,що слова вимовляються приблизно однаково Smith , Smyth, John, join';
echo '<br>';
echo (soundex("Smith") == soundex("Smyth"));
echo '<br>';
echo (soundex("John") == soundex("join"));
echo '<br>';
echo '<br>';
//8) Заміни символів, які можуть бути сприйняті як HTML-теги з цієї строки <script>alert('test');</script>
echo '8) Заміни символів, які можуть бути сприйняті як HTML-теги з цієї строки <script>alert(\'test\');</script>';
echo '<br>';
$str_1 = '<script>alert(\'test\');</script>';
$str_2 = htmlspecialchars($str_1);
echo $str_2;
echo '<br>';
?>

