<?php

require 'inc/DBprovider.php';

$delete = $database->exec("DELETE FROM user_information WHERE id");

header("Location: adminkontrol.php");