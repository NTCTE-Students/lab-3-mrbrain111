<?php
// Многомерный массив (таблица)
$table = [
    ['Имя', 'Возраст', 'Город'],
    ['Егор', 25, 'Тагил)'],
    ['Никита', 30, 'Вагонка'],
    ['Гомункул', 0, 'Неизвестно']
];

// Выводим таблицу в HTML формате
echo "<table border='1'>";
foreach ($table as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>