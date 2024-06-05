<?php

function sayHello(string $name, callable $filter): string
{
    return "hello {$filter($name)}";
}

$sum = fn (int $a, int $b): int => $a + $b;

$name = "john doe";
$sayGoodBye = fn (): string => "good bye $name";

echo sayHello("john doe", fn (string $name): string => strrev($name)) . "\n";

echo <<<MULTILINE
{$sum(10, 10)}
{$sayGoodBye()}\n
MULTILINE;
