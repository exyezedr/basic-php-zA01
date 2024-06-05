<?php

function increment(int &$value): void
{
    $value++;
}

$i = 1;

increment($i);

echo "$i\n";
