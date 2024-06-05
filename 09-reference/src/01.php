<?php

$name = "david wilson";
$referenceName = &$name;
$referenceName = "john doe";

echo <<<MULTILINE
$name
$referenceName\n
MULTILINE;
