<?php

$fruits = [
    0 => "apple",
    1 => "banana",
    2 => "orange",
];

$user = [
    "id" => 10,
    "name" => "john doe",
    "age" => 12,
    "address" => [
        "city" => "surabaya",
        "country" => "indonesia",
    ],
];

echo json_encode($fruits) . "\n";
echo "{$user["address"]["city"]}\n";
