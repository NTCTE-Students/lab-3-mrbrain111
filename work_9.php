<?php
// Массив
$array = ["jabloko", "banan", "vinograd", "dota"];

// Элемент для поиска
$search_element = "dota";

// Проверка наличия элемента в массиве
if (($key = array_search($search_element, $array)) !== false) {
    echo "Элемент '$search_element' найден. Индекс: $key";
} else {
    echo "Элемент '$search_element' не найден.";
}
?>