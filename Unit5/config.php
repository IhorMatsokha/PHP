<?php

$title = 'Рибалка';
$description = '';

$config = array(
    "header" => array(
        "menu" => array(
            array("title" => "More info1...",
                "link" => "./info.php",),
            array("title" => "More info2...",
                "link" => "./info.php",)
        )
    ),

    "footer" => array(
        0 => $title,
        1 => '2023')
);
$url = "https://baconipsum.com/api/?type=all-meat&paras=3&start-with-lorem=1";
$content = file_get_contents($url);

?>
