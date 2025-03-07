<?php
// Массив с повторяющимися элементами
$array_with_duplicates = [1, 2, 2, 3, 4, 4, 5, 6, 6, 7];

// Удаляем дубликаты
$unique_array = array_unique($array_with_duplicates);

print_r($unique_array);
?>