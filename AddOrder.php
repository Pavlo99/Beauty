<?php
require_once "functions.php";
require_once "index.php";

if (isset($_POST['button2'])) {
    $Date = date("Y-m-d");
    $User_ID = strip_tags(trim($_POST['User_ID']));
    $Data = strip_tags(trim($_POST['goodsText']));

    connectDB_1();
    $mysqli->query("INSERT INTO `myorder` (`DATE`, `ID_user`, `DATA`) VALUES ('{$Date}','{$User_ID}', '{$Data}')");
    closeDB();
}
