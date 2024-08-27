<?php
function generator(): Generator
{
    yield 1;
    yield 2;
    yield 3;
}

$gen = generator();

foreach ($gen as $value) {
    echo $value, PHP_EOL;
}
