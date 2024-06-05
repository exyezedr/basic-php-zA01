<?php

$first = ["first_name" => "john"];
$last = ["last_name" => "doe"];

echo json_encode($first + $last) . "\n";

$user1 = ["first_name" => "john", "last_name" => "doe"];
$user2 = ["first_name" => "david", "last_name" => "wilson"];
$first = ["first_name" => "john", "last_name" => "doe"];
$second = ["last_name" => "doe", "first_name" => "john"];

echo json_encode($user1 + $user2) . "\n";
echo json_encode($user2 + $user1) . "\n";
echo json_encode($first == $second) . "\n";
echo json_encode($first != $second) . "\n";
echo json_encode($first <> $second) . "\n";
echo json_encode($first === $second) . "\n";
echo json_encode($first !== $second) . "\n";
