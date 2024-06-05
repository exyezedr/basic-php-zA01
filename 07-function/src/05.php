<?php

function sayHello(string $name, callable $filter): string
{
    return "hello {$filter($name)}";
}

$sayHi = function (string $name): string {
    return "hi $name";
};

$name = "john doe";
$sayGoodBye = function () use ($name): string {
    return "good bye $name";
};

echo sayHello("john doe", function (string $name): string {
    return strrev($name);
}) . "\n";

echo <<<MULTILINE
{$sayHi("john doe")}
{$sayGoodBye()}\n
MULTILINE;
