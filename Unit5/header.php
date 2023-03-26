<?php

include ('config.php');

foreach ($config as $index => $val) {

    if($index === 'header'){
        foreach ($val as $i => $v){
            foreach ($v as $in => $va){
                echo '<li><a style="margin-right: 5px" href="' . $va['link'] . '">' . $va['title'] . '</a></li>';
            }

        }
    }

}

//var_dump($config);
//print_r($config);

?>
