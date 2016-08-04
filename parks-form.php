
<?php

require_once 'parks_config.php';
require_once 'db_connect.php';
require_once 'Input.php';

$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established,  area_in_acres, description)
                           VALUES (:name, :location, :date_established, :area_in_acres, :description)');

if ( Input::has('name') && Input::has('location') && Input::has('date')
&& Input::has('area') && Input::has('description')) {

    $stmt->bindValue(':name', Input::get('name'), PDO::PARAM_STR);
    $stmt->bindValue(':location', Input::get('location'), PDO::PARAM_STR);
    $stmt->bindValue(':date_established', date_format(date_create(Input::get('date')), 'Y-m-d'), PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', str_replace(',', '', Input::get('area')), PDO::PARAM_INT);
    $stmt->bindValue(':description', Input::get('description'), PDO::PARAM_STR);

    $stmt->execute();
}