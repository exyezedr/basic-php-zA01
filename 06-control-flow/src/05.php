<?php

$i = 1;

for (; $i <= 3;) {
    echo "$i\n";

    $i++;
}

echo "==================================================\n";

for ($i = 3; $i >= 1;) {
    echo "$i\n";

    $i--;
}

echo "==================================================\n";

for ($i = 1; $i <= 3; $i++) {
    echo "$i\n";
}

echo "==================================================\n";

for ($i = 3; $i >= 1; $i--) :
    echo "$i\n";
endfor;