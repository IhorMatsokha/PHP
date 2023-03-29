<?php
session_start();//старт сесії

$uploadFileDir = './uploaded_files/';


if ($_POST['uploadBtn'] == 'Upload'){ // чи була натиснута кнопка

    foreach ($_FILES as $key => $value){ // перебираємо всі файли які були надіслані
        $fileName  =  $_FILES [ $key ][ 'name' ];// записуємо у змінну оригінальну назву файлу
        $fileSize  =  $_FILES [ $key ][ 'size' ];// записуємо у змінну розмір файлу
        $fileType  =  $_FILES [ $key ][ 'type' ];// записуємо у змінну розширення файлу
        $fileNameCmps  =  explode ( "." ,  $fileName ); // це розбивання строки на масив з двома елементами назва файлу та розширення
        $fileExtension = strtolower ( end ( $fileNameCmps )); // розширення файлу приводиться до маленького регістру
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension; //в зміну записується зашифроване імя файлу та розширення
        $dest_path = $uploadFileDir . $newFileName;// строка в якій вказано шлях до папки де зберігається файл + назва та розширення файлу

        if ($fileExtension == 'jpg'||  $fileExtension == 'gif' ||  $fileExtension == 'png' ||  $fileExtension == 'tif'){ // перевірка допустимого розширення файлу
            if (move_uploaded_file($_FILES [ $key ][ 'tmp_name' ], $dest_path)){//якщо верхня умова виконується тоді завантажуємо файл
                echo 'Файл завантажено успішно';
            } else {
                $_SESSION['message'] = 'Файл не завантажено';//якщо файл не завантажився то повертаємося на попередню сторінку
                header('location: index.php');
            }

        } else {
            $_SESSION['message'] = 'Файл не завантажено';//якщо розширення не допустиме маємо помилку та повертаємося на попередню сторінку
            header('location: index.php');
        }
    }

}

?>