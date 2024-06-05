<?php

echo "integer = ";
var_dump(10);

echo "octal = ";
var_dump(010);

echo "hexadecimal = ";
var_dump(0x1A);

echo "binary = ";
var_dump(0b1010);

echo "floating point = ";
var_dump(10.10);

echo "e notation plus 10.10 x 1000 = ";
var_dump(10.10e3);

echo "e notation minus 10 x 0.001 = ";
var_dump(10e-3);

echo "underscore = ";
var_dump(10_000);

echo "underscore = ";
var_dump(10_000.10);

echo "integer overflow 32 bit = ";
var_dump(2147483647 + 1);

echo "integer overflow 64 bit = ";
var_dump(9223372036854775807 + 1);
