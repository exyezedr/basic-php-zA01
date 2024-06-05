<?php

function sayHello(string $name, callable $filter): string
{
    return "hello " . call_user_func($filter, $name);
}

echo sayHello("john doe", "strrev") . "\n";
