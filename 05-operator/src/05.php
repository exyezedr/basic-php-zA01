<?php

$postIncrement = 10;
$preIncrement = 10;
$postDecrement = 10;
$preDecrement = 10;

$postIncrement++;
++$preIncrement;
$postDecrement--;
--$preDecrement;

echo <<<MULTILINE
$postIncrement
$preIncrement
$postDecrement
$preDecrement\n
MULTILINE;

echo "==================================================\n";

$postIncrement = 10;
$preIncrement = 10;
$postDecrement = 10;
$preDecrement = 10;

echo $postIncrement++ . "\n";
echo $postIncrement . "\n";
echo ++$preIncrement . "\n";
echo $postDecrement-- . "\n";
echo $postDecrement . "\n";
echo --$preDecrement . "\n";
