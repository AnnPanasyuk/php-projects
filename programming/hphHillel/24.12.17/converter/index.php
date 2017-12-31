<?php

    $array = [
        '0' => ' ',
        '1' => 'I',
        '2' => 'II',
        '3' => 'III',
        '4' => 'IV',
        '5' => 'V',
        '6' => 'VI',
        '7' => 'VII',
        '8' => 'VIII',
        '9' => 'IX',
        '10' => 'X',
        '20' => 'XX',
        '30' => 'XXX',
        '40' => 'XL',
        '50' => 'L',
        '60' => 'LX',
        '70' => 'LXX',
        '80' => 'LXXX',
        '90' => 'XC',
        '100' => 'C',
        '200' => 'CC',
        '300' => 'CCC',
        '400' => 'CD',
        '500' => 'D',
        '600' => 'DC',
        '700' => 'DCC',
        '800' => 'DCCC',
        '900' => 'CM',
        '1000' => 'M',
        '10000' => 'X|'
    ];
    
    var_dump($array);
    echo '<br>';

    $input_str = 1640;
    $len_input_str = strlen($input_str);

    foreach ($array as $key => $value) {
        if ($key == $input_str) {
            $res = $value;
            break;
        }else {
            if ($len_input_str == 2) {
                $remainder = $input_str % 10;
                $int_part = $input_str - $remainder;
                if ($key == $int_part) {
                    $dozen_res = $value;
                }
                if ($key == $remainder) {
                    $unit_res = $value;
                }
                $res = $dozen_res . $unit_res;
            }
            if ($len_input_str == 3) {
                $remainder = $input_str % 100;
                $int_part = $input_str - $remainder;
                if ($key == $int_part) {
                    $dozen_res = $value;
                }
                if ($key == $remainder) {
                    $unit_res = $value;
                }else {
                    $remainder3 = $remainder % 10;
                    $int_part_of_remainder3 = $remainder - $remainder3;
                    if ($key == $int_part_of_remainder3) {
                        $dozen_res3 = $value;
                    }
                    if ($key == $remainder3) {
                        $unit_res3 = $value;
                    }
                    $unit_res = $dozen_res3 . $unit_res3;
                }
                $res = $dozen_res . $unit_res;
            }
            if ($len_input_str == 4) {
                $remainder = $input_str % 1000;
                $int_part = $input_str - $remainder;
                if ($key == $int_part) {
                    $dozen_res = $value;
                }
                if ($key == $remainder) {
                    $unit_res = $value;
                }else {
                    $remainder4_2 = $remainder % 100;
                    $int_part_of_remainder4_2 = $remainder - $remainder4_2;
                    if ($key == $int_part_of_remainder4_2) {
                        $dozen_res4_2 = $value;
                    }
                    if ($key == $remainder4_2) {
                        $unit_res4_2 = $value;
                    }else {
                        $remainder4_3 = $remainder4_2 % 10;
                        $int_part_of_remainder4_3 = $remainder4_2 - $remainder4_3;
                        if ($key == $int_part_of_remainder4_3) {
                            $dozen_res4_3 = $value;
                        }
                        if ($key == $remainder4_3) {
                            $unit_res4_3 = $value;
                        }
                        $unit_res4_2 = $dozen_res4_3 . $unit_res4_3;
                    }
                    $unit_res = $dozen_res4_2 . $unit_res4_2;
                }
                $res = $dozen_res . $unit_res;
            }
            if ($len_input_str > 4) {
                $res = '!!! we work only with numbers up to 10000 !!!';
            }
        }
    }

    echo '<br>';
    echo '<hr>';
    echo 'result: ' . $res;
    echo '<br>';
    echo '<hr>';
    echo 'result2222: ' . $dozen_res4_3;
    echo '<br>';
    echo '<hr>';
    echo 'length of input sting: ' . $len_input_str;
    echo '<br>';
    echo '<hr>';
    echo 'remainder: ' . $input_str % 1000;
    echo '<br>';
    echo '<hr>';
