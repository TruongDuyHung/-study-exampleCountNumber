<?php
function isNumber()
{
    $numbers = [4, 5, 7, 2, 5, 3, 4, 2, 57, 345, 6, 234, 5];
    $value = 5;
    $count = 0;
    for ($i = 0; $i < count($numbers);$i++){
        if ($numbers[$i] === $value) {
        $count++;
    }
}  return $count;
}

