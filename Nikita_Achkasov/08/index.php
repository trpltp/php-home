<?php

echo "<h1>Массив в квадрате</h1>";

function all_square (...$args){
    var_dump($args);
    $square = [];
    foreach ($args as $arg){
        if(is_integer($arg)){
            $square[] = $arg*$arg;
        }
    }
    return $square;
}
var_dump( all_square(2,2,2));
var_dump( all_square(3,2,5));

echo "<hr>";
echo "<h1>Сумма массивов по элементам</h1>";

function sum_arg (...$args)
{
    if (count($args) == 1 && is_array($args[0])) {
        var_dump($args[0]);
        $sum = [];
        foreach ($args as $arg) {
            if (is_integer($arg)) {
                $sum[] += $arg;
            }
        }
    } else {
        var_dump($args);
        $sum = [];
        foreach ($args as $arg) {
            if (is_integer($arg)) {
                $sum[] += $arg;
            }
        }
        return $sum;
    }
}

$test = sum_arg([1,2,3],[3,4,5],[6,7,8]);

var_dump($test);
