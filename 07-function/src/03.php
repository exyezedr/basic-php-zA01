<?php

function getValue(int $value, int $attendance): string
{
    if ($value >= 80 && $attendance >= 80) {
        return "your value a";
    } else if ($value >= 70 && $attendance >= 70) {
        return "your value b";
    } else if ($value >= 60 && $attendance >= 60) {
        return "your value c";
    } else {
        return "your value d";
    }
}

echo getValue(70, 80) . "\n";
