<?php
function setAge(?int $age) {
    if ($age === null) {
        echo "Возраст не указан";
    } else {
        echo "Возраст: $age";
    }
}

setAge(25);  // Выведет: Возраст: 25
setAge(null); // Выведет: Возраст не указан
