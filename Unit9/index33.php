<?php
$url = 'https://name:mypass@www.apartner.pro/uploads/index.php?id=98&success=ok#test:443';
$arr = parse_url($url);
echo '<pre>';
print_r($arr);
foreach ($arr as $key => $value){
    switch ($key){
        case 'scheme':

        case 'host':

        case 'user':

        case 'pass':

        case 'path':

        case 'query':

        case 'fragment':

        case 'port':
        echo $value;
    }
    echo '<br>';
}
echo '<pre>';