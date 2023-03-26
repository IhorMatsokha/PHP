<!DOCTYPE html>
<html>
<head>
    <title>HTML-форма</title>
    <meta charset='utf-8'>
</head>
<body>
<form action="form_data.php " method="post">
    <input type='hidden' name='security'><br />
    <?php
    if ($_GET['login'] == false){
        echo 'Це поле обов\'язкове для заповнення';
    }
    ?>
    <input type='text' name='login' value="<?= $_GET['login']?>"><br />
    <?php
    if ($_GET['password'] == false){
        echo 'Це поле обов\'язкове для заповнення';
    }
    ?>
    <input type='password' name='password'><br />
    <input type='submit' value='Надіслати'>

</form>
</body>
</html>


