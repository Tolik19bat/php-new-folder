<?php $a = 10;

function myFunction() {
    global $a;
    echo $a; // Выведет 10
}

myFunction();

