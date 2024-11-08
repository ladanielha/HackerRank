<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $positiveSum = 0;
    $negativeSum = 0;
    $zeroSum = 0;
    $total = count($arr);
    
    if($total < 0 && $total <= 100){
        throw new InvalidArgumentException("Ukuran array harus antara 1 dan 100.");
    }

  
    for ($i = 0; $i < $total; $i++) {
        $value = $arr[$i];

        // Check if each element is within the constraints
        if ($value < -100 || $value > 100) {
            throw new InvalidArgumentException("Nilai elemen harus antara -100 dan 100.");
        }

        // Count positive, negative, and zero values
        if ($value > 0) {
            $positiveSum++;
        } elseif ($value < 0) {
            $negativeSum++;
        } else {
            $zeroSum++;
        }
    }

    // Calculate and print the ratios
    echo $positiveSum / $total . "\n";
    echo $negativeSum / $total . "\n";
    echo $zeroSum / $total . "\n";
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

