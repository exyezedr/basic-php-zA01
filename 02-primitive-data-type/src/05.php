<?php

$toString = (string)10;
$toInt = (int)$toString;
$toBool = (bool)$toInt;
$toFloat = (float)"10.10";
$wrong = (int)"wrong";

var_dump($toString, $toInt, $toBool, $toFloat, $wrong);
