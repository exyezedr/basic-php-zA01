<?php

// without null coalescing
$data = [];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "none";
}

echo "$action\n";

echo "==================================================\n";

$data = ["action" => null];
$action = $data["action"] ?? "none";

echo "$action\n";

echo "==================================================\n";

$data = ["action" => "create"];
$action = $data["action"] ?? "none";

echo "$action\n";
