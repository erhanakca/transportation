<?php
require 'config.php';

$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;

$database = new PDO($dsn, DB_USER, DB_PASSWORD);

/*t/*ry {
    $db = new PDO($dsn, DB_USER, DB_PASSWORD);
    if ($db){
        echo 'database bağlantısı kuruldu.';
    }
}catch (PDOException $e){
    echo 'bağlantı başarısız. ' . $e->getMessage();
}*/

