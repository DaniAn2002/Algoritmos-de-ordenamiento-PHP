<?php

function mergeSort($array)
{
    $length = count($array);

    if ($length <= 1) {
        return $array;
    }

    $mid = (int) ($length / 2);
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge($left, $right)
{
    $result = [];

    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] < $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    while (count($left) > 0) {
        $result[] = array_shift($left);
    }
    while (count($right) > 0) {
        $result[] = array_shift($right);
    }

    return $result;
}

function show($array)
{
    $n = count($array);
    for ($i = 0; $i < $n; $i++) {
        echo $array[$i];
        if ($i < $n - 1) {
            echo ", ";
        } else {
            echo ". ";
        }
    }
}

$palabras = ['Cruz', 'An', 'Sanchez', 'Aguilar', 'Fernandez'];

echo "Palabras no ordenadas: ";
show($palabras);

echo "<br>";
echo "Palabras ordenadas: ";
show(mergeSort($palabras));
