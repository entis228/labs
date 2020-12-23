<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Тег table</title>
    <style>
        table {
            width: 25%; /* Ширина таблицы */
            background: white; /* Цвет фона таблицы */
            color: black; /* Цвет текста */
        }

        th {
            background: red; /* Цвет фона ячеек */
            padding: 5px; /* Поля вокруг текста */
        }

        td {
            background: yellow; /* Цвет фона ячеек */
            padding: 5px; /* Поля вокруг текста */
        }
    </style>
</head>
<body>
<?php $array = [
    ['С. Кинг', 'Жребий', 477],
    ["А. Атеев", "Карты Люцифера", 451],
    ["Э. Райс", "Интервью с вампиром", 445],
    ["Г. Лавкрафт", "Дагон", 9]
];
?>
<table>
    <tr>
        <th>Автор</th>
        <th>Название</th>
        <th>Страницы</th>
    </tr>
    <?php
    for ($i = 0; $i <= 3; $i++) {
        echo "<tr>";
        for ($z = 0; $z < 3; $z++) {
            echo "<td>" . $array[$i][$z]. "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>