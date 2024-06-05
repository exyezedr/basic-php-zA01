<?php

var_dump('john ' . "\tdoe");

echo <<<MULTILINE
heredoc \theredoc heredoc
heredoc \theredoc heredoc\n
MULTILINE;

echo <<<'MULTILINE'
nowdoc nowdoc nowdoc
nowdoc nowdoc nowdoc
MULTILINE . "\n";

$name = "john doe";
$fruit = "fruit";

echo "name = " . $name . "\n";
echo "value = " . 100 . PHP_EOL;

echo <<<MULTILINE
last name = $name[5]$name[6]$name[7]
this is a {$fruit}s\n
MULTILINE;
