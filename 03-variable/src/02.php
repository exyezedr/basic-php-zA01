<?php

$name = "john";
$$name = "smart";

echo <<<MULTILINE
\$name = $name
\$john = $john\n
MULTILINE;
