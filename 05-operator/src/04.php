<?php

// or can use the keyword "or"
echo json_encode(true || true) . "\n";
echo json_encode(true || false) . "\n";
echo json_encode(false || true) . "\n";
echo json_encode(false || false) . "\n";

echo "==================================================\n";

// or can use the keyword "and"
echo json_encode(true && true) . "\n";
echo json_encode(true && false) . "\n";
echo json_encode(false && true) . "\n";
echo json_encode(false && false) . "\n";

echo "==================================================\n";

// or can use the keyword "^"
echo json_encode(true xor true) . "\n";
echo json_encode(true xor false) . "\n";
echo json_encode(false xor true) . "\n";
echo json_encode(false xor false) . "\n";

echo "==================================================\n";

echo json_encode(!true) . "\n";
echo json_encode(!false) . "\n";
