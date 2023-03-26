<?php

foreach ($_POST as $value){
    if($value == false){
        header('location: index.php?login=text&password=password');
    }
    echo '<br>';
    echo $value;
    echo '<br>';
}
?>