<?php

require_once 'adlister_config.php';
require_once 'db_connect.php';

$query = "DROP TABLE IF EXISTS users";

$dbc->exec($query);

$query2 = "CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(125) NOT NULL,
    password VARCHAR(125) NOT NULL,
    PRIMARY KEY (id))";

    $dbc->exec($query2);
?>