<?php
function addFive(&$num) {
    $num += 5;
}

$a = 10;
addFive($a);
echo $a; // Выведет 15
