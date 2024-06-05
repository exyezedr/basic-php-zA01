<?php

$value = "b";

switch ($value) {
    case "a":
        echo "you pass very well\n";
        break;
    case "b":
    case "c":
        echo "pass\n";
        break;
    default:
        echo "fail\n";
}

echo "==================================================\n";

$value = "d";

switch ($value):
    case "a":
        echo "you pass very well\n";
        break;
    case "b":
    case "c":
        echo "pass\n";
        break;
    default:
        echo "fail\n";
endswitch;
