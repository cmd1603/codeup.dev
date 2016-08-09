<?php

require_once 'adlister.php';
require_once 'db_connect.php';

$query = "DROP TABLE IF EXISTS users";

$dbc->exec($query);

$query2 = "CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    first-name VARCHAR(100) NOT NULL,
    last-name VARCHAR(100) NOT NULL,
    email VARCHAR(125) NOT NULL,
    PRIMARY KEY (id))";
?>