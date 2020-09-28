<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Server</title>-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
<!--    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->
<!--    <link rel="stylesheet" href="main.css">-->
<!--    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
<!--</head>-->
<!--<body>-->
<!--<script src="jquery-3.5.1.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"-->
<!--        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"-->
<!--        crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"-->
<!--        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"-->
<!--        crossorigin="anonymous"></script>-->
<!--<script src="http://malsup.github.com/jquery.form.js"></script>-->
<!---->
<!--<script src="main.js"></script>-->
<!--</body>-->
<!--</html>-->
<?php

$goods = array(
    array("Назва", 'Тонер', 'Крем', 'Скраб', 'Пудра', 'Туш', 'Пілінг'),
    array("Ціна", 100, 150, 160, 250, 300, 270),
    array("Обєм", 180, 200, 350, 100, 500, 380)
);

if ($_SERVER['REMOTE_ADDR']) {
    for ($col = 1; $col < 7; $col++) {
        echo '
        <div class="col-sm-12 col-md-6 col-lg-4">
        <img src="img/beauty.jpeg">
            <div>
                <p>Назва - ' . $goods[0][$col] . '</p>
                <p>Ціна - ' . $goods[1][$col] . '</p>
                <p>Знижка - ' . $goods[2][$col] . '</p>
            </div>
        </div>';
    }
}


///*
//$inp = $_POST['ourform_input'];
//
//echo $inp;
//switch ($inp){
//case 'Maks':
//    echo "Okey, hi Maks";
//    break;
//case 'Pavlo':
//    echo "Okey, hi Pavlo";
//    break;
//case 'Ann':
//    echo "Okey, hi Ann";
//    break;
//default:
//    echo "Hi everyone";
//}
//*/
