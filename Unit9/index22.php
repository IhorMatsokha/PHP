<!DOCTYPE html>
<html>
<head>
    <title>HTML-форма</title>
    <meta charset='utf-8'>
</head>
<body>
<form method='get'>
    <input type='text' name='email'><br />
    <input type='text' name='login'><br />
    <input type='submit' value='Надіслати'>
    <?php
    foreach ($_GET as $value){
        echo '<br>';
        echo $value;
        echo '<br>';
    }
    ?>
</form>
</body>
</html>


