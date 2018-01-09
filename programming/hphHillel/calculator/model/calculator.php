<?php

    function getValues($value1, $value2) {
        $value_1 = $_POST[$value1];
        $value_2 = $_POST[$value2];
        return $arrayOfValues = [$value_1, $value_2];
    }

    function plus() {
        $array = getValues('value1', 'value2');
        $result = $array[0] + $array[1];
        echo '<h2>' . 'Sum of values = ' . $result . '</h2>';
        return $result;
    }

    function minus() {
        $array = getValues('value1', 'value2');
        $result = $array[0] - $array[1];
        echo '<h2>' . 'Difference of values = ' . $result . '</h2>';
        return $result;
    }

    function divide() {
        $array = getValues('value1', 'value2');
        $result = $array[0] / $array[1];
        echo '<h2>' . 'Result of divide = ' . $result . '</h2>';
        return $result;
    }

    function multiple() {
        $array = getValues('value1', 'value2');
        $result = $array[0] * $array[1];
        echo '<h2>' . 'Product of values = ' . $result . '</h2>';
        return $result;
    }

    function actions($name, $action1, $action2, $action3, $action4) {
        $actions = $_POST[$name];

        switch ($actions) {
            case $action1:
                plus();
                break;
            case $action2:
                minus();
                break;
            case $action3:
                divide();
                break;
            case $action4:
                multiple();
                break;
        }
    }

    actions('action', 'plus', 'minus', 'divide', 'multiply');

    require_once './home.php';