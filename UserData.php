<?php
$data = array(
    array("Назва користувача", 'Анна', 'Вікторія', 'Роман', 'Максим', 'Іван', 'Софія'),
    array("Телефон", 0442234347, 0443242347, 0443242347, 0443242347, 0443241254, 0443241254),
    array("Назва товару", 'Тонер', 'Скраб', 'Крем', 'Пудра', 'Туш', 'Пілінг'),
    array("Кількість", 3, 2, 5, 1, 2, 4)
);

$output = '';
if (isset($_POST['nameOfUser']) && isset($_POST['phoneOfUser']) &&
    isset($_POST['nameOfGoods']) && isset($_POST['amount'])) {
    // в переменную name помещаем переданное с помощью запроса имя
    $nameOfUser = $_POST['nameOfUser'];
    $phoneOfUser = $_POST['phoneOfUser'];
    $nameOfGoods = $_POST['nameOfGoods'];
    $amount = $_POST['amount'];

    $output .= 'Дані не додано';

    $goods[0][count($data)] = $nameOfUser;
    $goods[1][count($data)] = $phoneOfUser;
    $goods[2][count($data)] = $nameOfGoods;
    $goods[3][count($data)] = $amount;

    if ($goods[0][count($data)] == $nameOfUser) {
        $output = 'Дані додано';
    }
    echo "$output";
}

if (isset($_POST['nameOfUserForAnswer'])) {
    // в переменную name помещаем переданное с помощью запроса имя
    $nameOfUser = $_POST['nameOfUserForAnswer'];

    $output1 = 'Користувача не існує';

    for ($col = 1; $col < 7; $col++) {
        if ($nameOfUser === $data[0][$col]) {
            $output1 = "User name - ";
            $output1 .= $nameOfUser;
            $output1 .= "\n";
            $output1 .= "User phone - ";
            $output1 .= $data[1][$col];
            $output1 .= "\n";
            $output1 .= "Good name - ";
            $output1 .= $data[2][$col];
            $output1 .= "\n";
            $output1 .= "Good amount - ";
            $output1 .= $data[3][$col];
        }
    }
    echo "$output1";
}