<?php

// Открываем поток stdin для чтения
$stdin = fopen('php://stdin', 'r');

// Читаем строку данных из stdin
$input = fgets($stdin);

// Закрываем поток stdin
fclose($stdin);

// Открываем поток stdout для записи (хотя это не обязательно, можно использовать echo)
$stdout = fopen('php://stdout', 'w');

// Выводим полученные данные в stdout
fwrite($stdout, "Вы ввели: " . $input);

// Закрываем поток stdout (тоже не обязательно, но хорошая практика)
fclose($stdout);
