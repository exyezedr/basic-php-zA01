<?php

/**
 * if there is an error in the path, the program will stop
 * does not cause a redeclare function, if it call the same file
 */
require_once __DIR__ . "/my-function.php";

echo 10 + 10 . "\n";
echo sayHello("john doe") . "\n";
