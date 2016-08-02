<?php

require_once 'parks_login.php';

require_once 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$query = "DROP TABLE IF EXISTS national_parks";

$dbc->exec($query);

$query2 = "CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    location VARCHAR(240) NOT NULL,
    date_established DATE,
    area_in_acres DOUBLE(12,2) UNSIGNED,
    PRIMARY KEY (id))";

$dbc->exec($query2);

?>
