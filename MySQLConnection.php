<?php

$host = "localhost";
$username = "root";
$password = "coderslab";
$dbname = "shop_ex";

//Poniżej napisz kod łączący się z bazą danych

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

if ($conn->errorCode() != null) {
    echo "Połącznie nieudane..." . $conn->errorInfo([2]) . "<br>";
    exit;
}

// Tabele do zrobienia:

