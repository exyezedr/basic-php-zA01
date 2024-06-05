<?php

// without recursive
function factorial1(int $value): int
{
    $result = 1;

    for ($i = 1; $i <= $value; $i++) {
        $result *= $i;
    }

    return $result;
}

function factorial2(int $value): int
{
    return $value === 1 ? 1 : $value * factorial2($value - 1);
}

function problem(int $value): void
{
    if ($value === 0) {
        echo "end\n";
    } else {
        echo "$value\n";

        problem($value - 1);
    }
}

echo factorial1(5) . "\n";
echo factorial2(5) . "\n";
problem(5);
