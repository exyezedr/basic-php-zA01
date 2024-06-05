<?php

function &getValue(): int
{
    static $value = 11;

    return $value;
}

$a = &getValue();

echo "$a\n";

$a = 10;
$b = &getValue();

echo "$b\n";
