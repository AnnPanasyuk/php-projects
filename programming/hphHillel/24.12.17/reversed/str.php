<?php

    $main_str = 'butterfly';
    $array = str_split($main_str);

    var_dump($array);

    $reversed=[];

    for($i = count($array) - 1; $i >= 0; $i--){
        if ($i > count($array)-1) {
            break;
        }
        $reversed[] = $array[$i];
    }
    echo '<br>';
    echo '<hr>';
    var_dump($reversed);

    $reversed_str = implode($reversed);
    echo '<br>' . $reversed_str;
