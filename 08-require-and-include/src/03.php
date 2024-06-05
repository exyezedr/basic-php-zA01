<?php

/**
 * if there is an error in the path, the program still run
 * does not cause a redeclare function, if it call the same file
 */
include_once __DIR__ . "/my-function.php";

echo 10 + 10 . "\n";
echo sayHello("john doe") . "\n";
