<?php

$goods = array(
    array("Назва", 'Тонер', 'Крем', 'Скраб', 'Пудра', 'Туш', 'Пілінг'),
    array("Ціна", 100, 150, 160, 250, 300, 270),
    array("Обєм", 180, 200, 350, 100, 500, 380)
);

$output = '';
if (isset($_POST['nameOfProduct'])) {
    // в переменную name помещаем переданное с помощью запроса имя
    $name = $_POST['nameOfProduct'];
    // добавляем в переменную output строку приветствия с именем
    $output .= 'Товар не знайдено';
    for ($col = 1; $col < 7; $col++) {
        if ($name === $goods[0][$col]) {
            $output = '<div class="container-fluid padding" id="goods" name="goods">
    <div class="row text-center alert" id="goodsItems">
        <div class="col-sm-12 col-md-6 col-lg-4">
        <img src="img/beauty.jpeg">
            <div>
                <p>Назва - ' . $goods[0][$col] . '</p>
                <p>Ціна - ' . $goods[1][$col] . '</p>
                <p>Знижка - ' . $goods[2][$col] . '</p>
            </div>
        </div>
        </div>
        </div>';
            break;
        }
    }
    echo $output;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css">
</head>
<body>
</body>
</html>