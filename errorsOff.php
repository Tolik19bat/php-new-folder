<?php

$filename = "non_existing_file.txt";

// Попытка открыть несуществующий файл
// Без оператора @ это вызвало бы предупреждение, что файл не найден
$file = @fopen($filename, "r");

if (!$file) {
    echo "Не удалось открыть файл.";
}

