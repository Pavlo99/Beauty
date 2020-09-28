<?php
require_once "functions.php";
require_once "index.php";

if (isset($_POST['button1'])) {
    $Email = trim($_POST["Email"]);
    $Date = strip_tags(trim($_POST['Date']));
    $Telephone_number = strip_tags(trim($_POST['Telephone_number']));
    $Shop_ID = strip_tags(trim($_POST['Shop_ID']));
    $name = strip_tags(trim($_POST['name']));

    connectDB_1();
    $mysqli->query("INSERT INTO `user_data` (`Email`, `Date`, `Telephone_number`, `Shop_ID`) VALUES ('{$Email}','{$Date}','{$Telephone_number}', '{$Shop_ID}', '{$name}')");
    closeDB();
}