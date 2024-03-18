<?php

function insertionSort($array)
{
    $length = count($array);

    for ($i = 1; $i < $length; $i++) {
        $key = $array[$i];
        $j = $i - 1;

        while ($j >= 0 && $array[$j] > $key) {
            $array[$j + 1] = $array[$j];
            $j = $j - 1;
        }
        $array[$j + 1] = $key;
    }

    return $array;
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
show(insertionSort($palabras));
