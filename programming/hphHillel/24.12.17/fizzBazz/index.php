<?php

    $array = [];

    function bla($arr) {
        for ($i = 0; $i < 100; $i++) {
            $arr[] = $i + 1;
            if (($arr[$i] % 3) == 0) {
                echo $arr[$i] . ' - ' . 'fizz' . '<br>';
            }
            if (($arr[$i] % 5) == 0) {
                echo $arr[$i] . ' - ' . 'bazz' . '<br>';
            }
            if (($arr[$i] % 15) == 0) {
                echo $arr[$i] . ' - ' . 'fizzBazz' . '<br>';
            }
            if ((($arr[$i] % 3) !== 0) && (($arr[$i] % 5) !== 0) && (($arr[$i] % 15) !== 0)) {
                echo $arr[$i] . '<br>';
            }
        }
    }

    bla($array);

