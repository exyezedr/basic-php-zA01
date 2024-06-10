<?php

$name = "john doe";
$name = null;

echo json_encode($name) . "\n";
echo json_encode(is_null($name)) . "\n";
echo json_encode(isset($name)) . "\n";

unset($name);
echo json_encode(isset($name)) . "\n";

/**
 * error
 * ==================================================
 * echo json_encode(is_null($name)) . "\n";
 */

$name = "john doe";
echo json_encode(isset($name)) . "\n";
