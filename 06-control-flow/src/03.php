<?php

// without ternary
$gender = "female";

if ($gender === "male") {
    $sayHello = "hello bro";
} else {
    $sayHello = "hello sis";
}

echo "$sayHello\n";

echo "==================================================\n";

$gender = "male";
$sayHello = "hello " . ($gender === "male" ? "bro" : "sis");

echo "$sayHello\n";
