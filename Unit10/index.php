<!--Зробити можливість завантаження файлів першим способом. -->
<!--Відправляти усі дані на сторінку form_data.php , -->
<!--використовувати тип передачі пост. -->
<!--На сторінці form_data виловити усі файли і відобразити їх. -->
<!--Якщо файлу не буде надіслано то повернутися на попередню сторінку -->
<!--й відобразити текст під полем де завантаження файлу , -->
<!--що файл обовязково має бути надісланий. -->
<!--Також перевірити чи це було надіслано зображення.-->
<?php
if (isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

?>

<form  method= "POST"  action= "form_data.php"  enctype= "multipart/form-data"> <!--передаємо файли в form_data.php методом post-->
    <div>
        <span> Завантажте файл:</span>
        <input  type= "file"  name= "uploadedFile" />
        <input  type= "file"  name= "uploadedFile1"  />
        <input  type= "file"  name= "uploadedFile2"  />
    </div>
    <input  type= "submit"  name= "uploadBtn"  value= "Upload"  />
</form>