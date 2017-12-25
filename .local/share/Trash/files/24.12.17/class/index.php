<?php
echo 'hello';

    function grid($n, $m, $def) {
        $grid = [];

        for ($i = 0; $i < $n; $i++) {
            $grid[$i] = [];
            for ($j = 0; $j < $m; $j++) {
                $grid[$i][$j] = $def;
            }
        }

        return $grid;
    }

    $n = 5;
    $m = 6;

    var_dump(grid($n, $m, 'x'));