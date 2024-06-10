<?php

$fruits = ["apple", ["banana", "watermelon"], "orange"];

echo count($fruits) . "\n";
echo "{$fruits[1][0]}\n";

$fruits[] = "grape";
echo json_encode($fruits) . "\n";

$fruits[1][1] = "pineapple";
echo json_encode($fruits) . "\n";

unset($fruits[1]);
echo json_encode(array_values($fruits)) . "\n";
