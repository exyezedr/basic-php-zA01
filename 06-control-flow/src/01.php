<?php

$value = 75;
$attendance = 80;

if ($value >= 75 && $attendance >= 75) {
    echo "pass\n";
}

echo "==================================================\n";

$value = 70;
$attendance = 80;

if ($value >= 75 && $attendance >= 75) {
    echo "pass\n";
} else {
    echo "fail\n";
}

echo "==================================================\n";

if ($value >= 80 && $attendance >= 80) {
    echo "your value a\n";
} else if ($value >= 70 && $attendance >= 70) {
    echo "your value b\n";
} else if ($value >= 60 && $attendance >= 60) {
    echo "your value c\n";
} else {
    echo "your value d\n";
}

echo "==================================================\n";

if ($value >= 80 && $attendance >= 80) :
    echo "your value a\n";
elseif ($value >= 70 && $attendance >= 70) :
    echo "your value b\n";
elseif ($value >= 60 && $attendance >= 60) :
    echo "your value c\n";
else :
    echo "your value d\n";
endif;
