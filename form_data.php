<?php
session_start();//старт сесії

$uploadFileDir = './uploaded_files/';


if ($_POST['uploadBtn'] == true){ //
    echo '<pre>';
    var_dump($_FILES);

    foreach ($_FILES as $key => $value){
        $fileName  =  $_FILES [ $key ][ 'name' ];
        $fileSize  =  $_FILES [ $key ][ 'size' ];
        $fileType  =  $_FILES [ $key ][ 'type' ];
        $fileNameCmps  =  explode ( "." ,  $fileName );
        $fileExtension = strtolower ( end ( $fileNameCmps ));
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $dest_path = $uploadFileDir . $newFileName;
        if ($fileExtension == 'jpg'||  $fileExtension == 'gif' ||  $fileExtension == 'png' ||  $fileExtension == 'tif'){
            if (move_uploaded_file($_FILES [ $key ][ 'tmp_name' ], $dest_path)){
                echo 'Файл завантажено успішно';
            } else {
                $_SESSION['message'] = 'Файл не завантажено';
                header('location: index.php');
            }

        } else {
            $_SESSION['message'] = 'Файл не завантажено';
            header('location: index.php');
        }

        echo '<br>';
        var_dump($key);
        var_dump($value);

    }

}


?>