<?php

function sayHello(): void
{
    echo "hello\n";
    $create = true;

    if ($create) {
        function sayHi(): void
        {
            echo "hi\n";
        }
    }

    sayHi();
}

sayHello();
