<?php

// without for each
$fruits = ["apple", "banana", "orange"];

for ($i = 0; $i < count($fruits); $i++) {
    echo "$fruits[$i]\n";
}

echo "==================================================\n";

foreach ($fruits as $fruit) {
    echo "$fruit\n";
}

echo "==================================================\n";

foreach ($fruits as $index => $fruit) {
    echo "$index $fruit\n";
}

echo "==================================================\n";

$user = ["first_name" => "john", "last_name" => "doe"];

foreach ($user as $key => $name) {
    $key = str_replace("_", " ", $key);
    echo "my $key is $name\n";
}
