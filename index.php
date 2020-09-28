<?php
require_once "functions.php";
$account = "Аuthorization";
$goods = getGoods_1(50);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty for you</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="main.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script type="text/javascript">
        $.getJSON('file.json', function (data) {
            $.each(data.goods, function (i, f) {
                var tblRow = "<div class='col-sm-12 col-md-6 col-lg-4'>" + "<img src='img/beauty.jpeg'>" + "<div>" + "<p>" +
                    "Назва - " + f.nameOfGood + "</p>" + "<p>" + "Ціна - " + f.price + "</p>" +
                    "<p>" + "Об'єм - " + f.weight + "</p>" + "</div>" + "</div>";
                $(tblRow).appendTo("#goodsItems");
            });

        });
    </script>
</head>
<body>
<!-- Блок для навігації (закріплений) -->
<nav class="navbar navbar-expand-md navbar-light bg-dark sticky-top">
    <div class="container-fluid">
        <!-- Логотип -->
        <a href="https://www.clipart.email/download/11487979.html" title="Image from clipart.email"><img
                    src="https://cdn.clipart.email/606862fd53d00e2c7b9513d9fa1cb24b_model-vector-beauty-parlour-picture-1438411-model-vector-beauty-_300-299.png"
                    width="50" alt="Beauty Logo Png"/></a>
        <!-- Кнопка для малих девайсів -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Сама навігація -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" id="navbarItems">
                <li class="nav-item">
                    <a href="#" class="nav-link">Main</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About us</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contacts</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Servise</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Comand</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <?php
                        if (isset($_POST["button1"])) {
                            if ($_POST['nameUser'] != "")
                                $account = $_POST['nameUser'];
                        }
                        echo $account;
                        ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Слайдер зображень -->
<div class="container-fluid bg-dark">
    <div class="carousel slide" data-ride="carousel" id="slides">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide-1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/slide-2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="img/slide-3.jpg" class="d-block w-100">
            </div>
        </div>
    </div>
</div>
<!-- Блок з товарами -->
<div class="container-fluid padding" id="goods" name="goods">
    <div class="row text-center alert" id="goodsItems">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img src="img/beauty.jpeg">
            <div>
                <p>Ціна - 200 грн</p>
                <p>Виробник - корея</p>
                <p>Об'єм - 200 мл</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img src="img/beauty.jpeg">
            <div>
                <p>Ціна - 200 грн</p>
                <p>Виробник - корея</p>
                <p>Об'єм - 200 мл</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img src="img/beauty.jpeg">
            <div>
                <p>Ціна - 200 грн</p>
                <p>Виробник - корея</p>
                <p>Об'єм - 200 мл</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img src="img/beauty.jpeg">
            <div>
                <p>Ціна - 200 грн</p>
                <p>Виробник - корея</p>
                <p>Об'єм - 200 мл</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img src="img/beauty.jpeg">
            <div>
                <p>Ціна - 200 грн</p>
                <p>Виробник - корея</p>
                <p>Об'єм - 200 мл</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img src="img/beauty.jpeg">
            <div>
                <p>Ціна - 200 грн</p>
                <p>Виробник - корея</p>
                <p>Об'єм - 200 мл</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img src="img/beauty.jpeg">
            <div>
                <p>Ціна - 200 грн</p>
                <p>Виробник - корея</p>
                <p>Об'єм - 200 мл</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img src="img/beauty.jpeg">
            <div>
                <p>Ціна - 200 грн</p>
                <p>Виробник - корея</p>
                <p>Об'єм - 200 мл</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
            <img src="img/beauty.jpeg">
            <div>
                <p>Ціна - 200 грн</p>
                <p>Виробник - корея</p>
                <p>Об'єм - 200 мл</p>
            </div>
        </div>
        <?php

        for ($i = count($goods) - 1; $i >= 0; $i--) {
            echo '
        <div class="col-sm-12 col-md-6 col-lg-4">
        <img src="img/beauty.jpeg">
            <div>
                <p>Назва - ' . $goods[$i]["name"] . '</p>
                <p>Ціна - ' . $goods[$i]["price"] . '</p>
                <p>Знижка - ' . $goods[$i]["percent"] . '</p>
            </div>
        </div> ';
        }
        ?>
    </div>
</div>
<!-- Форма для реєстрації-->
<div class="container">
    <div class="row">
        <div class="col-6" style="margin-left: 25%">
            <div class="card">
                <div class="card-body" id="formContainer">
                    <h5 class="card-title">
                        Form
                    </h5>
                    <form action="AddUser.php" method="post">
                        <div class="form-group">
                            <label for="inputMail">Mail: </label>
                            <input type="email" class="form-control" id="inputMail" name="Email">
                        </div>
                        <div class="form-group">
                            <label for="Date">Date: </label>
                            <input type="date" class="form-control" id="myCity" name="Date">
                        </div>
                        <div class="form-group">
                            <label for="Telephone_number">Number: </label>
                            <input type="number" class="form-control" id="myNumber" name="Telephone_number">
                        </div>
                        <div class="form-group">
                            <label for="Shop_ID">Shop_ID: </label>
                            <input type="number" class="form-control" id="Shop_ID" name="Shop_ID">
                        </div>
                        <div class="form-group form-check">
                            <label for="nameUser">Name: </label>
                            <input type="text" class="form-control" id="nameUser" name="nameUser">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="myCheckbox">
                            <label class="form-check-label" for="myCheckbox">I agree</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success w-100" name="button1">Sing in/up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Форма для створення замовлення-->
<div class="row" style="margin-top: 3%">
    <div class="col-6" style="margin-left: 25%">
        <div class="card" style="background-color: sandybrown">
            <div class="card-body" id="formOrder">
                <h5 class="card-title">
                    Create order
                </h5>
                <form action="AddOrder.php" method="post">
                    <div class="form-group">
                        <label for="User_ID">User_ID: </label>
                        <input type="number" class="form-control" id="User_ID" name="User_ID">
                    </div>
                    <div class="form-group form-check">
                        <label for="goodsText">Write the products you want: </label>
                        <input type="text" class="form-control" id="goodsText" name="goodsText" style="height: 200px">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-success w-200" name="button2">Make order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Вивід інформації з БД
<div class="container" style="width: 20%; margin-top: 5%;">
    <table class="table table-striped" style="background-color: gainsboro">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Percent</th>
        </tr>
        </thead>
        <tbody>

        <?php

for ($i = count($goods) - 1; $i >= 0; $i--) {
    echo '
        <tr>
        <th scope="row">' . $goods[$i]["ID"] . '</th>
        <td>' . $goods[$i]["name"] . '</td>
        <td>' . $goods[$i]["price"] . '</td>
        <td>' . $goods[$i]["percent"] . '</td>
        </tr> ';
}
?>
        </tbody>
    </table>
</div>
<div class="container" style="width: 20%; margin-top: 5%;">
    <table class="table table-striped" style="background-color: gainsboro">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Amount</th>
            <th scope="col">ID_Order</th>
        </tr>
        </thead>
        <tbody>

        <?php
$goods = getGoods_2(50);
for ($i = count($goods) - 1; $i >= 0; $i--) {
    echo '
        <tr>
        <th scope="row">' . $goods[$i]["ID"] . '</th>
        <td>' . $goods[$i]["amount"] . '</td>
        <td>' . $goods[$i]["ID_order"] . '</td>
        </tr> ';
}
?>
        </tbody>
    </table>
</div>
-->
<!--
<div class="container" style="width: 20%; margin-top: 5%;">
    <table class="table table-striped" style="background-color: gainsboro">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Date</th>
            <th scope="col">ID_User</th>
            <th scope="col">Data</th>
        </tr>
        </thead>
        <tbody>

        <?php
$goods = getGoods_3(50);
for ($i = count($goods) - 1; $i >= 0; $i--) {
    echo '
        <tr>
        <th scope="row">' . $goods[$i]["ID"] . '</th>
        <td>' . $goods[$i]["DATE"] . '</td>
        <td>' . $goods[$i]["ID_user"] . '</td>
        <td>' . $goods[$i]["DATA"] . '</td>
        </tr> ';
}
?>
        </tbody>
    </table>
</div>
-->
<!--
<div class="container" style="width: 20%; margin-top: 5%;">
    <table class="table table-striped" style="background-color: gainsboro">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">Date</th>
            <th scope="col">Phone</th>
            <th scope="col">Shop_ID</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>

        <?php
$goods = getGoods_4(50);
for ($i = count($goods) - 1; $i >= 0; $i--) {
    echo '
        <tr>
        <th scope="row">' . $goods[$i]["ID"] . '</th>
        <td>' . $goods[$i]["Email"] . '</td>
        <td>' . $goods[$i]["Date"] . '</td>
        <td>' . $goods[$i]["Telephone_number"] . '</td>
        <td>' . $goods[$i]["Shop_ID"] . '</td>
        <td>' . $goods[$i]["name"] . '</td>
        </tr> ';
}
?>
        </tbody>
    </table>
</div>
-->

<!-- Робота з Ajax -->

<!-- Введення назви товару -->
<div class="container" style="width: 50%; margin-top: 5%; background-color: burlywood">
    <label for="nameOfProduct" style="margin-top: 2%">Введіть товар, для якого хочете отримати інформацію: </label>
    <input type="text" name="nameOfProduct" id="nameOfProduct" style="margin-left: 2%">
    <button id="sendNameOfProduct" style="margin-bottom: 1%" class="btn btn-success w-100">Отримати дані про товари
    </button>
</div>
<div id="response" style="align-items: center"></div>

<!-- Введення даних про користувача та замовлення -->
<div class="container" style="margin-top: 3%">
    <div class="row">
        <div style="width: 35%;margin-left: 35%">
            <div class="card">
                <div class="card-body" id="formContainer" style="text-align: right">
                    <div class="form-group">
                        <label for="nameOfUser" style="margin-right: 2%">Name of user: </label>
                        <input type="text" name="nameOfUser" id="nameOfUser">
                    </div>
                    <div class="form-group">
                        <label for="nameOfUser" style="margin-right: 2%">Phone of user: </label>
                        <input type="number" name="phoneOfUser" id="phoneOfUser">
                    </div>
                    <div class="form-group">
                        <label for="nameOfUser" style="margin-right: 2%">Name of goods: </label>
                        <input type="text" name="nameOfGoods" id="nameOfGoods">
                    </div>
                    <div class="form-group">
                        <label for="nameOfUser" style="margin-right: 2%">Amount: </label>
                        <input type="text" name="amount" id="amount">
                    </div>
                    <div class="text-center">
                        <button id="sendDataForOrder" class="btn btn-success w-100">Відправити дані</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Введення даних для отримання інформації про замовлення користувача -->
<div class="container" style="margin-top: 3%">
    <div class="row">
        <div style="width: 35%;margin-left: 35%">
            <div class="card">
                <div class="card-body" id="formContainer" style="text-align: right">
                    <div class="form-group">
                        <label for="nameOfUserForAnswer" style="margin-right: 2%">Name of user: </label>
                        <input type="text" name="nameOfUserForAnswer" id="nameOfUserForAnswer">
                    </div>
                    <div class="text-center">
                        <button id="getDataForOrder" class="btn btn-success w-100">Отримати дані</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="response1" style="align-items: center"></div>


                <!-- Футер -->
                <div class="container-fluid bg-dark" style="margin-top : 3%;">
                    <div class="text-center" style="color: white">
                        <h6 style="padding-top: 1%">Email: student@gmail.com</h6>
                        <br>Number: +380503494638
                        <br>Adress: Lviv, Bandery, 100
                        <footer>
                            © 2020 Lviv
                        </footer>
                    </div>
                </div>
                <script src="jquery-3.5.1.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                        crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                        crossorigin="anonymous"></script>
                <script src="main.js"></script>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
                <script src="http://malsup.github.com/jquery.form.js"></script>
</body>
</html>