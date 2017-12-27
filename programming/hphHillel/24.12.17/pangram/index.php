<?php

    $main_str = 'abcdefghijklmnopqrstuvwxyz';
    $main_array = str_split($main_str);
    print_r($main_array);
    echo '<br>';

//    $input_str = 'The quick brown fox jumps over the lazy dog';
//    $input_str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//    $input_str = 'ABCDEFGHIJKLM/NOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $input_str = 'butterfly';
    $srt_1 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $array_1 = str_split($srt_1);
    $srt_2 = 'abcdefghijklmnopqrstuvwxyz';
    $array_2 = str_split($srt_2);
    //убрали пробелы
    $replace_input_str = str_replace(' ','',$input_str);
    $ireplace_input_str = str_ireplace($array_1, $array_2, $replace_input_str);

    var_dump($ireplace_input_str);
    $input_array = str_split($ireplace_input_str);
    echo '<br>';
    print_r($input_array);

//    //сравнили элементы массивов, возвращаемое значение не найденные символы первого массива
    $result = array_diff($main_array, $input_array);
    echo '<br>';
    echo '<br>';
    print_r($result);
    echo '<br>';
    echo '<br>';
    if (!empty($result)) {
        echo 'The entered string is not a pangram';
    }else {
        echo 'the entered string is a pangram';
    }
