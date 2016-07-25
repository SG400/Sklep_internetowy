<?php
session_start();
//require_once __DIR__ . "/User.php";

$db_host = "localhost";
$db_user = "root";
$db_password = "coderslab";
$db_name = "KonKamPaw_shop";

$db_conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($db_conn->connect_error) {
    die("Połączenie do sklepu nieudane. Błąd jaki mamy: " . $db_conn->connect_error);
}

