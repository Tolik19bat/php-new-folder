<?php
$a = 10;

function myFunction() {
    global $a;
    echo $a; // Здесь будет ошибка, так как $a не видна внутри функции
}

myFunction();

