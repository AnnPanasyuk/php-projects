<?php

    $str_palindrome = 'adda';

    function isPalindrome($str) {
        return strrev($str) == $str;
    }


    if (isPalindrome($str_palindrome)) {
        echo $str_palindrome . ' ' . 'is a palindrome';
    }else {
        echo $str_palindrome . ' ' . 'is not a palindrome';
    }

