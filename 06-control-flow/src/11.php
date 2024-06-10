<?php

$value = "b";
$result = match ($value) {
    "a", "b", "c" => "pass",
    "d" => "fail",
    default => "unknown",
};

echo "$result\n";

echo "==================================================\n";

$value = "50";
$result = match (true) {
    $value >= 80 => "you pass very well",
    $value >= 60 => "pass",
    default => "fail",
};

echo "$result\n";

echo "==================================================\n";

$name = "mr. john doe";
$result = "hello " . match (true) {
    str_contains($name, "mr.") => "bro",
    str_contains($name, "mrs.") => "sis",
    default => "unknown",
};

echo "$result\n";
