<?php

require "inc/DBprovider.php";

$hazirla = $database->prepare("INSERT INTO user_information (date, name, surname, phone, email) VALUES (?,?,?,?,?)");

$cevir = $hazirla->execute([
    $bugün = date("d.m.y"),
    $_GET['name'],
    $_GET['surname'],
    $_GET['phone'],
    $_GET['email']
]);

header("Location: index.php");

die();