<?php

$name = "john doe";

function sayHello(): array
{
    global $name;

    return [
        "hello $name",
        "hello {$GLOBALS["name"]}",
    ];
}

function sayHi(): string
{
    $name = "john doe";

    return "hi $name";
}

function increment(): int
{
    static $i = 1;

    return $i++;
}

foreach (sayHello() as $sayHello) {
    echo "$sayHello\n";
}

echo sayHi() . "\n";
echo increment() . "\n";
echo increment() . "\n";
echo increment() . "\n";
