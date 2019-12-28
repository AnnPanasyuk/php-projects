<?php

//    !5 = 1*2*3*4*5;
//    $res = 1;
//    for ($i = 1; $i <= 5; $i++) {
//        $res = $res * $i;
//    }
//
//    echo $res;

    function factor($a) {
        if ($a <= 1) {
            return 1;
        }
        return $a * factor($a -1);
    }
    echo factor(5);

