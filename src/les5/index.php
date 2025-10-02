<?php

// array 1.2.4 antwoorden

$array = [10, 1337, 28, 24, 9, 7, 33, 111];

array_push($array, 12);

$array[] = 13;

$array[3] = 99;

// c
foreach ($array as $key => $value) {
    $value++;
    $array[$key] = $value;
}
echo "<pre>";
print_r($array);
echo "</pre>";

echo array_is_list($array) ? "Ja is een lijst" : "Nee is geen lijst";

echo "<br>";

var_dump(array_filter($array, function (int $value) {
    return $value > 80;
}));