<?php

function foo(): string
{
    return "foo";
}

function sayHello(string $name, callable $filter): string
{
    return "hello {$filter($name)}";
}

function zero(string $name): string
{
    return strrev($name);
}

$myFunction = foo();

echo "{$myFunction()}\n";
echo sayHello("john doe", "strrev") . "\n";
echo sayHello("john doe", "zero") . "\n";
