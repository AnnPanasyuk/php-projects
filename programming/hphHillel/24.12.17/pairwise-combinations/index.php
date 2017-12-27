<?php

    $arr_one = [1, 2, 3, 4, 5, 6];
    $arr_two = ['a', 'd', 'f', 'g'];

    foreach ($arr_one as $a) {
        foreach ($arr_two as $b) {
            echo $a . $b . ',';
        }
        echo '<br>';
    }