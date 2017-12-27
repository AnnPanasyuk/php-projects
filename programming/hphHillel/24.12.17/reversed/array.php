<?php

    $array = ['a', 's', 'v', 'b', 'r', 'e'];
    $reversed=[];

    for($i = count($array) - 1; $i >= 0; $i--){
        if ($i > count($array)-1) {
            break;
        }
        $reversed[] = $array[$i];
    }

    var_dump($reversed);
