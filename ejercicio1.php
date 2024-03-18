<?php
//Problema de Ordenar Lista con Bubble Sort

function bubbleSort($array)
{
    $elements = count($array);

    for ($i = 0; $i < $elements - 1; $i++) {
        for ($j = 0; $j < $elements - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
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
        }else{
            echo ". ";
        }
    }
}

$numeros = [25, 50, 63, 2, 5, 89, 11];

echo "Numeros no ordenados: ";
show($numeros);

echo "<br>";

echo "Numeros ordenados: ";
show(bubbleSort($numeros));
