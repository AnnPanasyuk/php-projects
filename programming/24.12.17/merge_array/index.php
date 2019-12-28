<?php

    function merge_for_compact(Array $a, Array $b, $count) {
        $res = [];
        for ($i = 0; $i < $count; $i++) {
            $res[$a[$i]] = $b[$i];
        }
        return $res;
    }

    function merge(Array $a, Array $b, $count) {
        $res = [];
        for ($i = 0; $i < $count; $i++) {
            if ($b[$i]) {
                $res[$a[$i]] = $b[$i];
            }else {
                $res[$a[$i]] = $i;
            }
        }
        return $res;
    }

    function merge_array(Array $a, Array $b) {
        $res = [];

        $a_len = count($a);
        $b_len = count($b);

         if ($a_len == $b_len) {
             echo 'Arrays are equal';
             $res = merge($a, $b, $a_len);
         }else {
             echo 'Arrays is not equal';
             if ($a_len > $b_len) {
                 echo '<br>' . 'Array a is a bigger';
                 $res = merge($a, $b, $b_len);
             }else {
                 echo '<br>' . 'Array b is a bigger';
                 $res = merge($a, $b, $a_len);
             }
         }

        return $res;
    }

    function merge_array_compact (Array $a, Array $b) {
        $res = [];

        $a_len = count($a);
        $b_len = count($b);

        if ($a_len == $b_len) {
            echo 'Arrays are equal';
            $res = merge($a, $b, $a_len);
        }else {
            echo 'Arrays is not equal';
            if ($a_len > $b_len) {
                echo '<br>' . 'Array a is a bigger';
                $res = merge($a, $b, $b_len);
            }else {
                echo '<br>' . 'Array b is a bigger';
                $res = merge($a, $b, $a_len);
            }
        }
        return $res;
    }

    function merge_array_compact_2 (Array $a, Array $b) {
        $res = [];


        $a_len = count($a);
        $b_len = count($b);

        switch ($a_len <=> $b_len) {
             case -1:
                 echo 'Array b is a bigger' . '<br>';
                 $res = merge($a, $b, $a_len);
                 break;
             case 0:
                 echo 'Arrays are equal' . '<br>';
                 $res = merge($a, $b, $a_len);
                 break;
             case 1:
                 echo 'Array a is a bigger' . '<br>';
                 $res = merge($a, $b, $b_len);
                 break;
             default:
                echo 'yps';
        }
        return $res;
    }

    $a = ['a', 'v', 'b', 's', 'd'];
    $b = [1, 2, 3, 4];


    var_dump(merge_array($a, $b));
