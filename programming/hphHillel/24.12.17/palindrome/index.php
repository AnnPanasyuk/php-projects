<?php

    $str_palindrome = 'adbvda';

    function isPalindrome($str) {
        $array = str_split($str);
        $count = count($array);
        $for_count = floor($count / 2);
        for ($i = 0; $i < $for_count; $i++) {
            if ($array[$i] != $array[$count - $i -1]) {
                return false;
            }
        }
        return true;
    }


    if (isPalindrome($str_palindrome)) {
        echo $str_palindrome . ' ' . 'is a palindrome';
    }else {
        echo $str_palindrome . ' ' . 'is not a palindrome';
    }

