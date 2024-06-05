<?php

function sayHello(string $firstName, ?string $lastName = "anonymous"): void
{
    echo "hello $firstName $lastName\n";
}

function sum(string $sentence, int ...$values): void
{
    echo "$sentence " . join(" + ", $values) . " = " . array_sum($values) . "\n";
}

sayHello("john", "doe");
sayHello("john");
sayHello("john", null);
sayHello(lastName: "doe", firstName: "john");
sum("sum", 10, 10, 10, 10, 10);
sum("sum", ...[10, 10, 10, 10, 10]);
