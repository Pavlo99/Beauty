<?php

$mysqli = false;

function connectDB_1()
{
    global $mysqli;
    $mysqli = new mysqli("localhost", "root", "pavlo2001", "beauty");
    if ($mysqli->connect_errno) {
        printf("Соединение не удалось: %s\n", $mysqli->connect_error);
        exit();
    }
    $mysqli->query("SET NAMES 'utf-8'");
}
function connectDB_2()
{
    global $mysqli;
    $mysqli = new mysqli("localhost", "root", "pavlo2001", "beauty");
    if ($mysqli->connect_errno) {
        printf("Соединение не удалось: %s\n", $mysqli->connect_error);
        exit();
    }
    $mysqli->query("SET NAMES 'utf-8'");
}
function connectDB_3()
{
    global $mysqli;
    $mysqli = new mysqli("localhost", "root", "pavlo2001", "beauty");
    if ($mysqli->connect_errno) {
        printf("Соединение не удалось: %s\n", $mysqli->connect_error);
        exit();
    }
    $mysqli->query("SET NAMES 'utf-8'");
}
function connectDB_4()
{
    global $mysqli;
    $mysqli = new mysqli("localhost", "root", "pavlo2001", "beauty");
    if ($mysqli->connect_errno) {
        printf("Соединение не удалось: %s\n", $mysqli->connect_error);
        exit();
    }
    $mysqli->query("SET NAMES 'utf-8'");
}

function closeDB()
{
    global $mysqli;
    $mysqli->close();
}

function getGoods_1($limit)
{
    global $mysqli;
    connectDB_1();

    $result = $mysqli->query("SELECT * FROM `goods_info` ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    return resultToArray($result);
}
function getGoods_2($limit)
{
    global $mysqli;
    connectDB_2();

    $result = $mysqli->query("SELECT * FROM `mygoods` ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    return resultToArray($result);
}
function getGoods_3($limit)
{
    global $mysqli;
    connectDB_3();

    $result = $mysqli->query("SELECT * FROM `myorder` ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    return resultToArray($result);
}
function getGoods_4($limit)
{
    global $mysqli;
    connectDB_4();

    $result = $mysqli->query("SELECT * FROM `user_data` ORDER BY `id` DESC LIMIT $limit");
    closeDB();
    return resultToArray($result);
}

function resultToArray($result)
{
    $array = array();
    while (($row = $result->fetch_assoc()) != false) {
        $array[] = $row;
    }
    return $array;
}
