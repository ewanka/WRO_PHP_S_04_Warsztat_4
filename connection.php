<?php

try{
    $connection = new PDO ('mysql:dbname=shop;host=localhost','root', 'coderslab');
} catch (PDOException $e) {
    die ('can not connect to database ');
}  

